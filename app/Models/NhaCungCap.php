<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    use HasFactory;
    protected $table = 'nha_cung_caps';
    protected $fillable = [
        'ma_ncc',
        'ten_ncc',
        'trang_thai',
    ];
}
