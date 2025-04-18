<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $table = 'staff';
    protected $fillable = ['username', 'password', 'role_id'];

    protected $hidden = ['password'];

    public $timestamps = false;
        // Định nghĩa cột cho xóa mềm
        protected $dates = ['deleted_at']; 
        
        public function role()
        {
            return $this->belongsTo(Role::class, 'role_id');
        }
}


