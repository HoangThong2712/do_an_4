<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dia_chis', function (Blueprint $table) {
            $table->id();
            $table->string('ma_dia_chi');
            $table->string('ma_kh');
            $table->string('so_nha');
            $table->string('phuong');
            $table->string('thanh_pho');
            $table->string('quoc_gia');
            $table->integer('so_dien_thoai_khach_hang');
            $table->integer('trang_thai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dia_chis');
    }
};
