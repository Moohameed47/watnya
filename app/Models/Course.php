<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'course_id';
    protected $fillable = ['course_name', 'term_id', 'doctor_id'];

    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
