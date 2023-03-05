<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    public $timestamps = false;
    protected $fillable = ['name', 'surname', 'phone_number', 'email', 'salary_level'];
}
