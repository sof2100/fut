<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEliminatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eliminatorias', function (Blueprint $table) {
            $table->id();
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('e');
            $table->string('f');
            $table->string('g');
            $table->string('h');
            $table->string('avsb');
            $table->string('cvsd');
            $table->string('evsf');
            $table->string('gvsh');
            $table->string('abvscd');
            $table->string('efvsgh');
            $table->string('campeon');
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
        Schema::dropIfExists('eliminatorias');
    }
}
