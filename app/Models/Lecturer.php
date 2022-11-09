<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lecturer';
    protected $primaryKey = 'lecturer_id';
    protected $guarded = ['lecturer_id'];
    protected $guard = 'lecturer';
    protected $fillable = [
        'fullname',
        'username',
        'email',
        'password',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $hidden = ['password'];
}
