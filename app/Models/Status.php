<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Bắt buộc thêm

class Status extends Model
{
    use HasFactory, SoftDeletes; 

    protected $table = 'status'; 
    protected $fillable = ['status_name']; 
    public $timestamps = false;

    // Định nghĩa cột cho xóa mềm
    protected $dates = ['deleted_at']; 
}


