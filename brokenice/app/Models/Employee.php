<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $table = 'employees';
    public $timestamps = false;
    protected $fillable = ['name', 'surname', 'phone_number', 'email', 'salary_level'];
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
