<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developermodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameEmployer');
            $table->string('nameModul');
            $table->string('nameAct');
            $table->string('client');
            $table->string('dateOn');
            $table->string('timeOn');
            $table->string('timeOf');
            $table->string('dateOf');  
            $table->string('status');  
            $table->integer('numTicket')->nullable();
            $table->float('quantitytime',6,2)->nullable();   
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
        Schema::dropIfExists('developermodels');
    }
}
