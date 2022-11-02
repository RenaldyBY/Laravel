<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->char('kode_matakuliah', 8);
            $table->char('nidn', 10);
            $table->char('kelas', 1);
            $table->string('hari', 10);
            $table->time('jam');
            $table->timestamps();

            $table->index('kode_matakuliah');
            $table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliahs')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->index('nidn');
            $table->foreign('nidn')->references('nidn')->on('dosens')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
}
