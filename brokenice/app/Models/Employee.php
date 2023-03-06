<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    protected $table = 'employees';
    public $timestamps = false;
    protected $fillable = ['name', 'surname', 'phone_number', 'email', 'salary_level'];
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)->using(EmployeeOrder::class);
    }
}
