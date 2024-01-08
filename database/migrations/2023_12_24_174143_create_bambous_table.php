<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBambousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bambou9s', function (Blueprint $table) {
            $table->date('Honey')->nullable();
            $table->string('alexsak')->nullable();
            $table->integer('Zereno')->nullable();
            $table->float('Tot')->nullable();
            $table->text('yuyu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bambou9s');
    }
}
