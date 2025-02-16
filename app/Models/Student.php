<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    protected $fillable = ['user_id', 'level', 'specialization'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
