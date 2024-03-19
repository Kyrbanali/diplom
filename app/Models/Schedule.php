<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedule';

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);

    }

    protected $fillable = [
        'class_datetime',
        'class_location',
        'teacher_id',

    ];
}
