<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGstrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gstrs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('g1_uid');
            $table->integer('g2_uid');
            $table->integer('g3_uid');
            $table->string('gstr1');
            $table->string('gstr2');
            $table->string('gstr3');
            $table->integer('ref');
            $table->integer('active');
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
        Schema::dropIfExists('gstrs');
    }
}
