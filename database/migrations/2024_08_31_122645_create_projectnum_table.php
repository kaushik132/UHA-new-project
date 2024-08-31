<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectnumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectnum', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_num')->nullable();
            $table->string('member_num')->nullable();
            $table->string('love_us_num')->nullable();
            $table->string('happy_client_num')->nullable();
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
        Schema::dropIfExists('projectnum');
    }
}
