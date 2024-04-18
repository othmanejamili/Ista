<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIstasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('niveau_form');
            $table->string('filier');
            $table->string('type_form');
            $table->string('mode_form');
            $table->string('group');
            $table->string('annee_form');
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
        Schema::dropIfExists('istas');
    }
}
