<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaChi extends Model
{
    use HasFactory;

    protected $table = 'dia_chis';

    protected $fillable = [
        'ma_dia_chi',
        'ma_kh',
        'so_nha',
        'phuong',
        'thanh_pho',
        'quoc_gia',
        'so_dien_thoai_khach_hang',
        'trang_thai',
    ];
}
