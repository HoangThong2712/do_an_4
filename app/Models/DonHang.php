<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table = 'don_hangs';

    protected $fillable = [
        'ma_don',
        'ma_kh',
        'ngay_dat',
        'ma_dia_chi',
        'email',
        'so_dien_thoai',
        'ghi_chu',
        'tinh_trang',
    ];
}
