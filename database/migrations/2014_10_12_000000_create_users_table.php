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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('gender',['l','p'])->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('tmp_lahir',20)->nullable();
            $table->text('alamat')->nullable();
            $table->string('kontak',15)->nullable();
            $table->string('nim',10)->nullable();
            $table->char('semester')->nullable();
            $table->foreignId('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade')->nullable();
            $table->foreignId('prodi_id')->references('id')->on('prodis')->onDelete('cascade')->nullable();
            $table->char('angkatan')->nullable();
            $table->text('reason')->nullable();
            $table->string('foto')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
