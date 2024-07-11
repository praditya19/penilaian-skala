<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilySupportAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('family_support_answers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            for ($i = 1; $i <= 40; $i++) {
                $table->unsignedInteger('statement_' . $i);
            }
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('family_support_answers');
    }
}
