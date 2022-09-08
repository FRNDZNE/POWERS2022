<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('divisi_id')->references('id')->on('divisis')->onDelete('cascade');
            $table->string('nama');
            $table->text('desc');
            $table->string('foto');
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
        Schema::dropIfExists('progjas');
    }
};
