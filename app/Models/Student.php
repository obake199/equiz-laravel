<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $table = 'student';
    protected $primaryKey = 'student_id';
    protected $guarded = ['student_id'];
    protected $guard = 'student';
    protected $fillable = [
        'fullname',
        'username',
        'email',
        'password',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $hidden = ['password'];
}
