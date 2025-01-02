<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quiz_id',
        'certificate_number',
        'score',
        'completion_date'
    ];

    protected $casts = [
        'completion_date' => 'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // Generate unique certificate number
    public static function generateCertificateNumber()
    {
        $prefix = 'CERT';
        $year = date('Y');
        $random = str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        return "{$prefix}-{$year}-{$random}";
    }
}
