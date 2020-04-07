<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employe_id');
            $table->string('emailid');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('imgsrc');
            $table->string('gender');
            $table->string('degreename');
            $table->string('sc1type');
            $table->string('sc1');
            $table->string('sc2type');
            $table->string('sc2');
            $table->string('sc3type');
            $table->string('sc3');
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
        Schema::dropIfExists('employes');
    }
}
