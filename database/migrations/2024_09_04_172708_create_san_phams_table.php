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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ma_sp');
            $table->string('ten_sp');
            $table->integer('don_gia');
            $table->text('hinh_anh');
            $table->string('mo_ta');
            $table->integer('so_luong');
            $table->string('ma_loai');
            $table->integer('trang_thai');
            $table->integer('luot_danh_gia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
