<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'phoneNumber', 'email', 'password', 'code'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'doctor_subject');
    }
}
