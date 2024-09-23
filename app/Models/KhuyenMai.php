<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;

    protected $table = 'khuyen_mais';
    protected $fillable = [
        'ma_khuyen_mai',
        'tu_ngay',
        'den_ngay',
        'ma_sp_mua',
        'ma_sp_nhan',
        'phan_tram_giam',
        'loai_khuyen_mai',
        'trang_thai',
    ];
}
