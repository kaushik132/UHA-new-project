<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_testimonial', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('star')->nullable();
            $table->string('des')->nullable();
            $table->string('name')->nullable();
            $table->string('profession')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('student_testimonial');
    }
}
