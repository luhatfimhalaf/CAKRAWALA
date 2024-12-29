<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('quiz')->insert([
            [
                'course_id' => 1,
                'question_no' => 1,
                'question' => 'Apa itu Pandas dalam Python?',
                'answer_a' => 'Library untuk analisis data',
                'answer_b' => 'Framework web',
                'answer_c' => 'Bahasa pemrograman baru',
                'answer_d' => 'Metode debugging',
                'right_answer' => 'answer_a', // Merujuk ke kolom answer_a
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'question_no' => 2,
                'question' => 'Apa kegunaan library NumPy dalam Python?',
                'answer_a' => 'Analisis gambar',
                'answer_b' => 'Pengolahan array multidimensi',
                'answer_c' => 'Membuat GUI',
                'answer_d' => 'Scraping website',
                'right_answer' => 'answer_b', // Merujuk ke kolom answer_b
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'question_no' => 3,
                'question' => 'Apa itu Matplotlib dalam Python?',
                'answer_a' => 'Library untuk visualisasi data',
                'answer_b' => 'Tool untuk pengembangan AI',
                'answer_c' => 'Framework web',
                'answer_d' => 'Bahasa pemrograman',
                'right_answer' => 'answer_a', // Merujuk ke kolom answer_a
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'question_no' => 4,
                'question' => 'Apa kepanjangan dari CSV?',
                'answer_a' => 'Comma Separated Values',
                'answer_b' => 'Common String Values',
                'answer_c' => 'Continuous Series Visualization',
                'answer_d' => 'Command Set Value',
                'right_answer' => 'answer_a', // Merujuk ke kolom answer_a
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'question_no' => 5,
                'question' => 'Apa fungsi Seaborn dalam Python?',
                'answer_a' => 'Pengolahan array',
                'answer_b' => 'Membuat grafik statistik',
                'answer_c' => 'Mengembangkan AI',
                'answer_d' => 'Scraping data',
                'right_answer' => 'answer_b', // Merujuk ke kolom answer_b
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        DB::table('quiz')->insert([
            [
                'course_id' => 2,
                'question_no' => 1,
                'question' => 'Apa tujuan utama dari desain UI/UX?',
                'answer_a' => 'Meningkatkan estetika situs web',
                'answer_b' => 'Meningkatkan pengalaman dan kepuasan pengguna',
                'answer_c' => 'Meningkatkan jumlah data yang dapat disimpan',
                'answer_d' => 'Mempermudah coding',
                'right_answer' => 'answer_b', // Merujuk ke jawaban B
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'question_no' => 2,
                'question' => 'Apa itu wireframe dalam desain UI/UX?',
                'answer_a' => 'Gambar kerangka dari layout halaman',
                'answer_b' => 'Prototipe interaktif',
                'answer_c' => 'Dokumen proyek',
                'answer_d' => 'Framework untuk pengembangan web',
                'right_answer' => 'answer_a', // Merujuk ke jawaban A
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'question_no' => 3,
                'question' => 'Apa perbedaan utama antara UI dan UX?',
                'answer_a' => 'UI berfokus pada estetika, UX pada pengalaman pengguna',
                'answer_b' => 'UI untuk developer, UX untuk desainer',
                'answer_c' => 'UI lebih teknis, UX lebih strategis',
                'answer_d' => 'UI hanya untuk aplikasi mobile, UX untuk semua platform',
                'right_answer' => 'answer_a', // Merujuk ke jawaban A
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'question_no' => 4,
                'question' => 'Apa yang dimaksud dengan desain responsif?',
                'answer_a' => 'Desain yang selalu mengikuti tren',
                'answer_b' => 'Desain yang beradaptasi dengan ukuran layar',
                'answer_c' => 'Desain dengan interaksi animasi',
                'answer_d' => 'Desain dengan warna yang menarik',
                'right_answer' => 'answer_b', // Merujuk ke jawaban B
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'question_no' => 5,
                'question' => 'Apa fungsi dari persona dalam proses desain UX?',
                'answer_a' => 'Mengidentifikasi kebutuhan pengguna',
                'answer_b' => 'Menentukan framework yang digunakan',
                'answer_c' => 'Membuat prototipe lebih cepat',
                'answer_d' => 'Meningkatkan performa aplikasi',
                'right_answer' => 'answer_a', // Merujuk ke jawaban A
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        DB::table('quiz')->insert([
            [
                'course_id' => 3,
                'question_no' => 1,
                'question' => 'Apa yang dimaksud dengan prototipe dalam desain UI/UX?',
                'answer_a' => 'Dokumen rencana proyek',
                'answer_b' => 'Model awal dari desain yang bisa diuji',
                'answer_c' => 'Framework untuk pengembangan web',
                'answer_d' => 'Template desain final',
                'right_answer' => 'answer_b', // Merujuk ke jawaban B
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 3,
                'question_no' => 2,
                'question' => 'Elemen apa yang paling penting dalam desain UI?',
                'answer_a' => 'Penggunaan warna dan tipografi',
                'answer_b' => 'Fungsi backend',
                'answer_c' => 'Jumlah halaman web',
                'answer_d' => 'Kecepatan server',
                'right_answer' => 'answer_a', // Merujuk ke jawaban A
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 3,
                'question_no' => 3,
                'question' => 'Apa itu "User Journey" dalam UX?',
                'answer_a' => 'Jalur perjalanan pengguna di dalam aplikasi atau situs',
                'answer_b' => 'Kecepatan aplikasi dalam melayani permintaan',
                'answer_c' => 'Waktu loading halaman web',
                'answer_d' => 'Urutan tombol yang harus ditekan pengguna',
                'right_answer' => 'answer_a', // Merujuk ke jawaban A
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 3,
                'question_no' => 4,
                'question' => 'Apa peran utama dari usability testing dalam UX?',
                'answer_a' => 'Memastikan desain terlihat estetis',
                'answer_b' => 'Menguji pengalaman pengguna untuk meningkatkan kegunaan',
                'answer_c' => 'Meningkatkan performa backend',
                'answer_d' => 'Mempercepat waktu pengembangan',
                'right_answer' => 'answer_b', // Merujuk ke jawaban B
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 3,
                'question_no' => 5,
                'question' => 'Apa yang dimaksud dengan desain iteratif dalam UI/UX?',
                'answer_a' => 'Proses desain yang dilakukan secara berulang untuk perbaikan',
                'answer_b' => 'Desain yang selesai dalam satu tahap',
                'answer_c' => 'Menggunakan template yang sama di berbagai proyek',
                'answer_d' => 'Desain yang tidak membutuhkan umpan balik',
                'right_answer' => 'answer_a', // Merujuk ke jawaban A
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('quiz')->insert([
            [
                'course_id' => 4,
                'question_no' => 1,
                'question' => 'Apa fungsi dari VLOOKUP di Excel?',
                'answer_a' => 'Menggabungkan dua sel menjadi satu',
                'answer_b' => 'Mencari nilai di kolom tertentu',
                'answer_c' => 'Menjumlahkan seluruh data di kolom',
                'answer_d' => 'Membuat tabel pivot',
                'right_answer' => 'answer_b',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 4,
                'question_no' => 2,
                'question' => 'Apa itu pivot table di Excel?',
                'answer_a' => 'Fitur untuk menganalisis dan merangkum data',
                'answer_b' => 'Fungsi untuk mengubah format tanggal',
                'answer_c' => 'Cara untuk menambahkan filter',
                'answer_d' => 'Format tabel standar',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 4,
                'question_no' => 3,
                'question' => 'Fungsi apa yang digunakan untuk menghitung jumlah data?',
                'answer_a' => 'SUM',
                'answer_b' => 'AVERAGE',
                'answer_c' => 'COUNT',
                'answer_d' => 'IF',
                'right_answer' => 'answer_c',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 4,
                'question_no' => 4,
                'question' => 'Bagaimana cara membuat grafik di Excel?',
                'answer_a' => 'Pilih data lalu klik "Insert Chart"',
                'answer_b' => 'Pilih data lalu klik "Format Cells"',
                'answer_c' => 'Gunakan fungsi "GRAPH"',
                'answer_d' => 'Tekan CTRL + G',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 4,
                'question_no' => 5,
                'question' => 'Apa kegunaan conditional formatting di Excel?',
                'answer_a' => 'Untuk mengubah warna berdasarkan nilai sel',
                'answer_b' => 'Mengunci sel tertentu',
                'answer_c' => 'Membuat grafik otomatis',
                'answer_d' => 'Menambahkan formula baru',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('quiz')->insert([
            [
                'course_id' => 5,
                'question_no' => 1,
                'question' => 'Apa tujuan utama dari copywriting?',
                'answer_a' => 'Menginformasikan produk kepada pelanggan',
                'answer_b' => 'Meningkatkan penjualan melalui teks persuasif',
                'answer_c' => 'Mengelola keuangan perusahaan',
                'answer_d' => 'Mendesain logo perusahaan',
                'right_answer' => 'answer_b',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 5,
                'question_no' => 2,
                'question' => 'Apa elemen utama dalam sebuah headline yang baik?',
                'answer_a' => 'Pendek, menarik, dan relevan',
                'answer_b' => 'Panjang dan detail',
                'answer_c' => 'Hanya berisi kata kunci',
                'answer_d' => 'Menggunakan istilah teknis',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 5,
                'question_no' => 3,
                'question' => 'Apa arti "CTA" dalam copywriting?',
                'answer_a' => 'Critical Text Analysis',
                'answer_b' => 'Call to Action',
                'answer_c' => 'Copywriter Task Allocation',
                'answer_d' => 'Content Text Alignment',
                'right_answer' => 'answer_b',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 5,
                'question_no' => 4,
                'question' => 'Bagaimana cara menulis copy yang menarik?',
                'answer_a' => 'Menggunakan kata-kata rumit',
                'answer_b' => 'Berfokus pada manfaat untuk pembaca',
                'answer_c' => 'Hanya menampilkan fitur produk',
                'answer_d' => 'Menggunakan format teks acak',
                'right_answer' => 'answer_b',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 5,
                'question_no' => 5,
                'question' => 'Apa yang dimaksud dengan copywriting SEO?',
                'answer_a' => 'Penulisan teks untuk meningkatkan peringkat di mesin pencari',
                'answer_b' => 'Membuat desain situs web',
                'answer_c' => 'Mengoptimalkan kecepatan halaman',
                'answer_d' => 'Menambahkan gambar pada artikel',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        DB::table('quiz')->insert([
            [
                'course_id' => 6,
                'question_no' => 1,
                'question' => 'Apa tujuan utama dari copywriting iklan?',
                'answer_a' => 'Meningkatkan penjualan dengan teks persuasif',
                'answer_b' => 'Mengurangi biaya produksi iklan',
                'answer_c' => 'Mengukur efektivitas iklan',
                'answer_d' => 'Mendesain elemen grafis untuk iklan',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 6,
                'question_no' => 2,
                'question' => 'Apa elemen penting dalam iklan yang efektif?',
                'answer_a' => 'Headline yang menarik perhatian',
                'answer_b' => 'Penggunaan istilah teknis',
                'answer_c' => 'Deskripsi yang panjang',
                'answer_d' => 'Informasi produk secara rinci',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 6,
                'question_no' => 3,
                'question' => 'Apa arti dari "USP" dalam dunia periklanan?',
                'answer_a' => 'Unique Selling Proposition',
                'answer_b' => 'Universal Selling Point',
                'answer_c' => 'Ultimate Service Plan',
                'answer_d' => 'User Strategy Plan',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 6,
                'question_no' => 4,
                'question' => 'Apa manfaat menggunakan storytelling dalam copywriting iklan?',
                'answer_a' => 'Meningkatkan daya tarik emosional',
                'answer_b' => 'Mempercepat proses pembuatan iklan',
                'answer_c' => 'Membuat pesan lebih teknis',
                'answer_d' => 'Meningkatkan ukuran file iklan',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 6,
                'question_no' => 5,
                'question' => 'Bagaimana cara membuat CTA yang efektif untuk iklan?',
                'answer_a' => 'Menggunakan kalimat singkat dan persuasif',
                'answer_b' => 'Menghindari perintah langsung',
                'answer_c' => 'Menggunakan bahasa teknis',
                'answer_d' => 'Menyertakan deskripsi panjang',
                'right_answer' => 'answer_a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
