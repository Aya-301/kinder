<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id',
        'position',
        'teacherName',
        'facebook',
        'image',
        'twiter',
        'instagram',
        'image',
        'active'
        ];
}
