<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question_text' => 'Saya marah jika pendapat saya tidak diterima dalam suatu diskusi kelompok',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat saya memberikan pendapat, teman saya menerimanya dengan baik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa diri saya berharga',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Pujian membuat saya lebih menghargai diri saya sendiri',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya tidak suka jika apa yang saya lakukan dikontrol oleh orang lain',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Secara keseluruhan, saya puas dengan diri saya sendiri',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya akan membantu teman yang membutuhkan pertolongan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya tidak tergerak membantu teman yang sedang dalam masalah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mampu melaksanakan suatu tugas dengan baik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya bisa berteman dengan siapa saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mampu menghadapi masalah di sekolah dengan baik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya akan mengerjakan tugas sekolah tanpa menundanya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya akan mengontrol perilaku teman sekelas saya agar tidak melanggar peraturan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Dalam suatu diskusi kelompok, saya akan mendengarkan pendapat dari anggota kelompok yang lain',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa lebih terkenal di sekolah jika dibandingkan dengan teman-teman lain',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa jika keluarga saya memaksakan untuk melakukan sesuatu yang tidak saya sukai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya tidak pernah mencela teman-teman yang memiliki pendapat berbeda dengan saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Teman sekolah yang mengenal saya hanya teman satu kelas saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Ketika teman saya sedang berpuasa di sekolah saya akan menghargainya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa senang karena mampu mendapatkan nilai terbaik di kelas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Ketika teman saya sedang berpuasa di sekolah saya tidak akan memperdulikannya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mampu menyelesaikan semua tugas sekolah dengan baik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya membutuhkan waktu yang lama untuk membiasakan diri dalam hal-hal tertentu',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya lebih suka menghindar dari tugas, daripada mengerjakan dan menyelesaikannya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Sebagai seorang ketua kelompok saya akan mengatur anggota kelompok saya agar menjalankan tugasnya masing-masing',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa tidak lebih pandai dari teman-teman saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Secara keseluruhan, saya kurang puas dengan diri saya sendiri',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Sebagai seorang anggota kelompok saya tidak suka jika apa yang saya kerjakan diatur oleh ketua kelompok',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa bangga jika mendapatkan pujian dari teman satu kelas saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya tidak suka jika ide saya ditertawakan oleh teman saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya tidak suka jika saya dibanding-bandingkan dengan orang lain oleh orang tua saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Jika ada teman yang meminta pertolongan saya, saya tidak tergerak menolongnya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa jika tugas yang sedang saya kerjakan sekarang tidak terlalu berat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa tidak bisa mengumpulkan PR tepat waktu',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya nyaman melaksanakan ibadah keagamaan dengan teman-teman saya di sekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa ibadah agama yang saya lakukan masih belum sempurna',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Berbakti kepada orang tua adalah suatu kewajiban bagi saya yang harus saya jalankan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya tidak suka memakai baju yang rapi saat pergi ke sekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa jika saya hanya bisa berteman dengan orang yang memiliki sifat yang sama dengan saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa kecewa karena tidak bisa mendapatkan nilai yang baik dalam mata pelajaran yang saya sukai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa tugas yang saya kerjakan sangat sulit untuk diselesaikan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat saya mengalami suatu kegagalan, sulit bagi saya untuk bangkit lagi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa senang jika teman-teman saya menghargai pendapat saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa jika teman-teman saya tidak menghargai pendapat saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya merasa tidak dapat menyelesaikan semua tugas yang diberikan kepada saya karena terlalu berat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('questions_self_esteem')->insert($questions);
    }
}
