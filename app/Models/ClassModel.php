<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassModel extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table =('classes');
    protected $fillable = [
        'teacherId',
        'className',
        'fromAge',
        'toAge',
        'fromTime',
        'toTime',
        'capacity',
        'price',
        'class_image',
        'active'
        ];
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
