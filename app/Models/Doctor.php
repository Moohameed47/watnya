<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $primaryKey = 'doctor_id';
    protected $fillable = ['user_id', 'department'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
