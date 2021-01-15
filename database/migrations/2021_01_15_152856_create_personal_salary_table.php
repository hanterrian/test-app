<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalSalaryTable extends Migration
{
    public function up()
    {
        Schema::create('personal_salary', function (Blueprint $table) {
            $table->foreignId('personal_id')->constrained('personals');
            $table->foreignId('salary_id')->constrained('salaries');
        });
    }

    public function down()
    {
        Schema::dropIfExists('personal_salary');
    }
}
