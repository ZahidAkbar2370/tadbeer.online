<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("father_name");
            $table->string("date_of_birth");
            $table->string("cnic_no");
            $table->string("parmanent_address");
            $table->string("madrassah_total_marks");
            $table->string("madrassah_obtained_marks");
            $table->string("madrassah_percentage");
            $table->string("madrassah_name");
            $table->string("madrassah_board");
            $table->string("bachelors_obtained_marks")->nullable();
            $table->string("bachelors_percentage")->nullable();
            $table->string("bachelors_university")->nullable();
            $table->string("master_obtained_marks")->nullable();
            $table->string("master_percentage")->nullable();
            $table->string("master_university_name")->nullable();
            $table->string("optional_skill")->nullable();
            $table->string("optional_expert")->nullable();
            $table->string("question_1");
            $table->string("question_2");
            $table->string("question_3");
            $table->string("question_4");
            $table->string("question_5");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
