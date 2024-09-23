<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'san_phams';

    protected $fillable = [
        'ma_sp',
        'ten_sp',
        'don_gia',
        'hinh_anh',
        'mo_ta',
        'so_luong',
        'ma_loai',
        'trang_thai',
        'luot_danh_gia',
    ];
}
