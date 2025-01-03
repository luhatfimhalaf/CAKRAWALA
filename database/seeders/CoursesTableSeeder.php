<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            'id' => 1,
            'image' => 'images/Data-Analytics-python.png',
            'title' => 'Data Analytics Python',
            'category' => 'Technology',
            'lessons' => 20,
            'duration' => '30h 20m',
            'students' => 80,
            'price' => 500000,
            'instructor' => 'Miftahul Falah',
            'description' => 'Kursus ini dirancang untuk membantu Anda memahami dan menguasai analisis data menggunakan Python. Anda akan mempelajari cara mengolah, menganalisis, dan memvisualisasikan data untuk mendapatkan wawasan yang berharga. Topik yang dibahas meliputi dasar-dasar Python untuk analisis data, penggunaan pustaka populer seperti Pandas dan NumPy, visualisasi data dengan Matplotlib dan Seaborn, serta pengenalan teknik machine learning. Kursus ini dilengkapi dengan studi kasus nyata dan latihan praktis untuk membantu Anda menerapkan teori ke dalam proyek dunia nyata. Cocok untuk pemula hingga profesional yang ingin meningkatkan keterampilan analisis data mereka dan membuat keputusan berbasis data dengan percaya diri.',
            'video_url' => extractYouTubeVideoId('https://youtu.be/AVjHCN7Sx-8?si=fyS9RmAkUMjf4WWB'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('Courses')->insert([
            'id' => 2,
            'image' => 'images/UIUX Design Basics.png',
            'title' => 'UI/UX Design Basics',
            'category' => 'Technology',
            'lessons' => 25,
            'duration' => '20h 20m',
            'students' => 100,
            'price' => 600000,
            'instructor' => 'Jose Vidi Imanuel',
            'description' => 'Kursus ini dirancang untuk memperkenalkan Anda pada dasar-dasar desain antarmuka pengguna (UI) dan pengalaman pengguna (UX). Anda akan mempelajari prinsip desain, pembuatan wireframe, prototipe interaktif, dan cara menciptakan desain yang intuitif dan estetis. Topik yang dibahas meliputi penelitian pengguna, pembuatan persona, arsitektur informasi, serta praktik terbaik dalam desain responsif. Dengan latihan praktis dan proyek nyata, kursus ini cocok untuk pemula yang ingin memulai karier di bidang desain UI/UX atau siapa pun yang ingin meningkatkan keterampilan mereka dalam menciptakan pengalaman digital yang lebih baik.',
            'video_url' => extractYouTubeVideoId('https://youtu.be/AVjHCN7Sx-8?si=fyS9RmAkUMjf4WWB'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('Courses')->insert([
            'id' => 3,
            'image' => 'images/Front-End-React.png',
            'title' => 'UI/UX Design Basics',
            'category' => 'Technology',
            'lessons' => 25,
            'duration' => '20h 20m',
            'students' => 100,
            'price' => 600000,
            'instructor' => 'Jose Vidi Imanuel',
            'description' => 'Kursus ini dirancang untuk memperkenalkan Anda pada dasar-dasar desain antarmuka pengguna (UI) dan pengalaman pengguna (UX). Anda akan mempelajari prinsip desain, pembuatan wireframe, prototipe interaktif, dan cara menciptakan desain yang intuitif dan estetis. Topik yang dibahas meliputi penelitian pengguna, pembuatan persona, arsitektur informasi, serta praktik terbaik dalam desain responsif. Dengan latihan praktis dan proyek nyata, kursus ini cocok untuk pemula yang ingin memulai karier di bidang desain UI/UX atau siapa pun yang ingin meningkatkan keterampilan mereka dalam menciptakan pengalaman digital yang lebih baik.',
            'video_url' => extractYouTubeVideoId('https://youtu.be/AVjHCN7Sx-8?si=fyS9RmAkUMjf4WWB'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('Courses')->insert([
            'id' => 4,
            'image' => 'images/Excel-professionals.png',
            'title' => 'Advanced Excel for Professionals',
            'category' => 'Business',
            'lessons' => 30,
            'duration' => '25h 30m',
            'students' => 150,
            'price' => 500000,
            'instructor' => 'Ari Setiawan',
            'description' => 'Kursus ini akan membantu Anda menguasai fitur lanjutan Excel yang digunakan oleh para profesional. Anda akan mempelajari teknik analisis data, penggunaan rumus dan fungsi kompleks, serta pembuatan dashboard yang interaktif. Kursus ini juga mencakup analisis data besar, pengolahan data menggunakan pivot table, serta automasi tugas-tugas rutin menggunakan macro. Cocok untuk Anda yang ingin meningkatkan keterampilan Excel dan menjadi lebih produktif di tempat kerja.',
            'video_url' => extractYouTubeVideoId('https://youtu.be/AVjHCN7Sx-8?si=fyS9RmAkUMjf4WWB'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('Courses')->insert([
            'id' => 5,
            'image' => 'images/Copywriting-Marketing.png',
            'title' => 'Copywriting for Marketing',
            'category' => 'Marketing',
            'lessons' => 20,
            'duration' => '15h 10m',
            'students' => 80,
            'price' => 450000,
            'instructor' => 'Lena Permata',
            'description' => 'Kursus ini dirancang untuk mengajarkan teknik-teknik copywriting yang efektif dalam dunia pemasaran. Anda akan mempelajari cara menulis iklan yang menarik, memikat audiens, dan meningkatkan konversi. Topik yang dibahas termasuk penulisan headline, storytelling, pemahaman audiens, dan penggunaan kata-kata yang mempengaruhi keputusan pembelian. Kursus ini cocok bagi Anda yang ingin meningkatkan kemampuan menulis untuk kampanye pemasaran yang sukses.',
            'video_url' => extractYouTubeVideoId('https://youtu.be/AVjHCN7Sx-8?si=fyS9RmAkUMjf4WWB'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('Courses')->insert([
            'id' => 6,
            'image' => 'images/Copywriting-Ads.png',
            'title' => 'Copywriting for Ads',
            'category' => 'Advertising',
            'lessons' => 18,
            'duration' => '12h 40m',
            'students' => 120,
            'price' => 400000,
            'instructor' => 'Rina Agustina',
            'description' => 'Kursus ini mengajarkan Anda cara menulis copy iklan yang efektif untuk berbagai platform, mulai dari media sosial hingga iklan Google. Anda akan belajar teknik penulisan yang dapat meningkatkan keterlibatan audiens dan mengarah pada konversi yang lebih tinggi. Kursus ini mencakup pembuatan pesan yang persuasif, penggunaan call-to-action, dan optimasi iklan untuk berbagai platform digital. Ideal bagi mereka yang ingin membuat iklan yang menarik dan berhasil.',
            'video_url' => extractYouTubeVideoId('https://youtu.be/AVjHCN7Sx-8?si=fyS9RmAkUMjf4WWB'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
