<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsAdjustmentSeeder extends Seeder
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
                'question_text' => 'Selalu optimis dengan kemampuan saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya kurang memahami dengan potensi dan minat yang saya miliki',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mampu mengatasi setiap masalah dengan kemampuan saya sendiri',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mudah stress jika menghadapi masalah yang tidak kunjung selesai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya memahami setiap kekurangan yang saya miliki',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mudah tersinggung jika dikritik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Kekurangan saya tidak menghalangi saya dalam mengejar cita-cita',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya ingin menjadi orang lain',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya bersyukur dengan apa yang saya miliki sekarang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mencari beberapa alasan untuk menutupi kesalahan saya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Jika saya mempunyai masalah dengan teman, saya akan mengakuinya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya selalu diterima oleh teman-teman di lingkungan tempat saya berada',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya kesusahan dalam hal mencari teman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya memiliki banyak teman di kelas maupun di luar kelas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mengalami kesulitan dalam berinteraksi dengan guru',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya tetap tegar ketika teman-teman mengejek',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya mampu tetap tenang dalam mengatasi masalah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya langsung emosi ketika ada teman yang mengganggu',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Ketika saya marah, saya mengeluarkan kata-kata kasar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya setiap hari menggunakan seragam sekolah secara lengkap dan sesuai ketentuan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya cuek dengan aturan yang berlaku disekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Saya menolak ketika ada teman yang mengajak membolos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_text' => 'Peraturan yang ada disekolah, tidak penting untuk saya ikuti',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('questions_adjustment')->insert($data);
    }
}
