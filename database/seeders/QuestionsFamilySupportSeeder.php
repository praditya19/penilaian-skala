<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsFamilySupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'question_text' => 'Orang tua mengingatkan saya tentang tugas – tugas sekolah yang belum saya selesaikan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua ikut sedih saat saya mendapatkan nilai yang jelek',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat lelah mengerjakan tugas, ibu menyuruh saya untuk istirahat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua menyediakan keperluan pelajaran yang saya butuhkan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat alat tulis saya hilang, saudara meminjamkan alat tulisnya kepada saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Ayah menyarankan saya untuk mengerjakan tugas sesegera mungkin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat bingung memahami tugas, Ibu mengarahkan untuk mengerjakan tugas yang lebih mudah dahulu',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saudara mengajarkan saya untuk membaca dahulu sebelum mengerjakan tugas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Keluarga menghargai usaha belajar saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saudara memberikan masukan saat saya salah dalam mengerjakan tugas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua mengabaikan kesulitan belajar yang saya alami',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat sedih karena gagal mengerjakan tugas dengan benar, orang tua tidak peduli',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua acuh saat saya sedang kesulitan mengerjakan tugas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua mengacuhkan saat saya sampaikan buku pelajaran saya tidak lengkap',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saudara jarang membantu mengerjakan tugas sekolah saya yang sulit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat bingung dalam mengerjakan tugas, saudara saya diam saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mencari jalan keluar sendiri saat kesulitan mengerjakan tugas sekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat salah dalam mengerjakan tugas, orang tua mengabaikan saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Keluarga diam saja saat saya mampu mengerjakan tugas dengan tepat waktu',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua membentak saya saat saya tidak bisa mengerjakan tugas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua selalu menanyakan kesulitan belajar saya di sekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat saya sedang sedih karena gagal mengerjakan tugas, orang tua menghibur saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua selalu prihatin ketika saya gagal dalam mengerjakan tugas sekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua memberikan hadiah saat saya mampu mengerjakan tugas dengan benar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua membantu saya untuk menemukan jawaban atas tugas yang saya kerjakan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua menegur saya saat saya kelelahan mengerjakan tugas sekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat bosan mengerjakan tugas sekolah, orang tua memberikan semangat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Keluarga memberikan penjelasan tentang tugas sekolah yang saya kerjakan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Ibu memberikan pujian di saat saya mampu mengerjakan tugas dengan benar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Keluarga memberikan saran di saat saya keliru dalam mengerjakan tugas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua saya abai di saat saya kebingungan mengerjakan tugas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua diam saja saat tahu saya mengerjakan tugas sekolah sampai larut malam',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat kesulitan mengerjakan tugas, saudara enggan membantu saya menyelesaikannya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya jarang mendapatkan hadiah dari orang tua atas prestasi yang saya dapatkan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua saya sibuk bekerja sehingga jarang memberikan perhatian untuk perkembangan sekolah saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saat jenuh mengerjakan tugas, orang tua membiarkan sikap saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua enggan memberikan saran saat saya salah dalam mengerjakan tugas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Karena sibuk, kakak / saudara tidak pernah mengajari saya saat mengerjakan tugas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua memarahi saya saat saya tidak mampu mengerjakan tugas sekolah dengan benar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Orang tua saya berkomentar buruk di saat saya kesulitan mengerjakan tugas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('questions_family_support')->insert($data);
    }
}
