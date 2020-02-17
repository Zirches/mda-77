<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMdaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mda_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameEmployer');
            $table->string('nameModul');
            $table->string('nameAct');
            $table->string('client');
            $table->date('dateOn');
            $table->text('timeOn');
            $table->time('timeOf');
            $table->date('dateOf');            
            $table->integer('numAct')->nullable();  
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
        Schema::dropIfExists('mda_models');
    }
}
