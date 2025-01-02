<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Quiz;
use Illuminate\Http\Request;
use PDF;
use setasign\Fpdi\Fpdi;

class CertificateController extends Controller
{
    public function index()
    {
        // Get all certificates for the authenticated user
        $certificates = Certificate::with(['quiz.course'])
            ->where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('certificate.index', compact('certificates'));
    }

    public function preview($quizId)
    {
        // Get certificate for specific quiz and authenticated user
        $certificate = Certificate::with(['quiz.course', 'user'])
            ->where('quiz_id', $quizId)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        // Load the certificate template
        $template = imagecreatefrompng(public_path('images/certificate-template.png'));
        
        // Set up text color (black)
        $color = imagecolorallocate($template, 0, 0, 0);
        
        // Load fonts (you should place your fonts in public/fonts)
        $font_poppins = public_path('fonts/Poppins-Regular.ttf');
        $font_poppins_bold = public_path('fonts/Poppins-Bold.ttf');
        $font_anton = public_path('fonts/Anton-Regular.ttf');
        
        // Get image dimensions
        $image_width = imagesx($template);

        // Get text size
        $text = $certificate->user->name;
        $font_size = 90.2;
        $bbox = imagettfbbox($font_size, 0, $font_anton, $text);

        // Calculate text width and height
        $text_width = $bbox[2] - $bbox[0];
        // Calculate x position for center alignment
        $x1 = ($image_width - $text_width) / 2;

        // Get text size for course title (now using bold font)
        $text = $certificate->quiz->course->title;
        $font_size = 25;
        $bbox = imagettfbbox($font_size, 0, $font_poppins_bold, $text);

        // Calculate text width and height
        $text_width = $bbox[2] - $bbox[0];
        // Calculate x position for center alignment
        $x2 = ($image_width - $text_width) / 2;

        // Get text size
        $text = $certificate->certificate_number;
        $font_size = 25;
        $bbox = imagettfbbox($font_size, 0, $font_poppins, $text);

        // Calculate text width and height
        $text_width = $bbox[2] - $bbox[0];
        // Calculate x position for center alignment
        $x3 = ($image_width - $text_width) / 2;

        // Apply the text with calculated center position
        imagettftext($template, 90.2, 0, $x1, 800, $color, $font_anton, $certificate->user->name);
        imagettftext($template, 25, 0, $x2, 930, $color, $font_poppins_bold, $certificate->quiz->course->title);
        imagettftext($template, 25, 0, $x3, 305, $color, $font_poppins, $certificate->certificate_number);
        
        // Create temporary file
        $tempImage = storage_path('app/public/temp-' . $certificate->id . '.png');
        imagepng($template, $tempImage);
        imagedestroy($template);
        
        return view('certificate.preview', [
            'certificate' => $certificate,
            'certificateImage' => asset('storage/temp-' . $certificate->id . '.png')
        ]);
    }

    public function generate($quizId)
    {
        // Get certificate data
        $certificate = Certificate::with(['quiz.course', 'user'])
            ->where('quiz_id', $quizId)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        // Generate the PNG certificate first (reusing preview logic)
        $template = imagecreatefrompng(public_path('images/certificate-template.png'));
        $color = imagecolorallocate($template, 0, 0, 0);
        
        // Load fonts
        $font_poppins = public_path('fonts/Poppins-Regular.ttf');
        $font_poppins_bold = public_path('fonts/Poppins-Bold.ttf');
        $font_anton = public_path('fonts/Anton-Regular.ttf');
        
        $image_width = imagesx($template);

        // Calculate positions for name
        $text = $certificate->user->name;
        $bbox = imagettfbbox(90.2, 0, $font_anton, $text);
        $x1 = ($image_width - ($bbox[2] - $bbox[0])) / 2;

        // Calculate positions for course title
        $text = $certificate->quiz->course->title;
        $bbox = imagettfbbox(25, 0, $font_poppins_bold, $text);
        $x2 = ($image_width - ($bbox[2] - $bbox[0])) / 2;

        // Calculate positions for certificate number
        $text = $certificate->certificate_number;
        $bbox = imagettfbbox(25, 0, $font_poppins, $text);
        $x3 = ($image_width - ($bbox[2] - $bbox[0])) / 2;

        // Add text to image
        imagettftext($template, 90.2, 0, $x1, 800, $color, $font_anton, $certificate->user->name);
        imagettftext($template, 25, 0, $x2, 930, $color, $font_poppins_bold, $certificate->quiz->course->title);
        imagettftext($template, 25, 0, $x3, 305, $color, $font_poppins, $certificate->certificate_number);

        // Save temporary PNG
        $tempImage = storage_path('app/public/temp-' . $certificate->id . '.png');
        imagepng($template, $tempImage);
        imagedestroy($template);

        // Create PDF
        $pdf = new FPDI();
        $pdf->AddPage('L'); // Landscape orientation
        $pdf->SetAutoPageBreak(false);
        
        // Convert PNG to JPG (FPDI works better with JPG)
        $jpg = imagecreatefrompng($tempImage);
        $jpgPath = storage_path('app/public/temp-' . $certificate->id . '.jpg');
        imagejpeg($jpg, $jpgPath, 100);
        imagedestroy($jpg);

        // Add JPG to PDF with full page size
        $pdf->Image($jpgPath, 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());

        // Clean up temporary files
        unlink($tempImage);
        unlink($jpgPath);

        // Return PDF for download
        return $pdf->Output('Certificate-' . $certificate->certificate_number . '.pdf', 'D');
    }
}
