<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = [
        'group_name',
        'group_code',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
