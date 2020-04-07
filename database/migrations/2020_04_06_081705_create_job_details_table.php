<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employer_id');
            $table->string('job_id');
            $table->string('job_post');
            $table->string('job_location');
            $table->string('job_type');
            $table->string('exp_needed');
            $table->string('exp_duration')->nullable();
            $table->string('skill1');
            $table->string('skill2');
            $table->string('skill3');
            $table->string('job_description');
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
        Schema::dropIfExists('job_details');
    }
}
