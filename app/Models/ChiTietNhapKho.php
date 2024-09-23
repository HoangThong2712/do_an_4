<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietNhapKho extends Model
{
    use HasFactory;

    protected $table = 'chi_tiet_nhap_khos';
    protected $fillable = [
        'ma_chi_tiet',
        'ma_hd',
        'ma_sp',
        'thanh_tien',
        'don_gia',
        'so_luong',
        'trang_thai',
    ];
}
