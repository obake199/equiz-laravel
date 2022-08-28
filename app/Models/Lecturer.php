<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
    use HasFactory, SoftDeletes;

    protected $guard = 'lecturer';

    protected $fillable = [
        'fullname',
        'username',
        'email',
        'password',
    ];

    protected $table = 'lecturer';

    protected $hidden = [
        'password',
    ];
}
