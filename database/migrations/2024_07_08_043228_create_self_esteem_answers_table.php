<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelfEsteemAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('self_esteem_answers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            for ($i = 1; $i <= 45; $i++) {
                $table->unsignedInteger('statement_' . $i);
            }
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('self_esteem_answers');
    }
}
