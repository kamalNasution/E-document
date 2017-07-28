<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteTableSurats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->increments('id_surat');
            $table->integer('kepada');
            $table->integer('dari');
            $table->string('no');
            $table->date('tanggal');
            $table->text('hal');
            $table->integer('status');
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
        Schema::dropIfExists('surat');

    }
}
