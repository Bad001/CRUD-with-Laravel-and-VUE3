<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EmployeeOrder extends Pivot
{
    protected $table = 'employee_order';
    public $timestamps = false;
    public function employees(){
        return $this->belongsTo(Employee::class);
    }
    public function orders(){
        return $this->belongsTo(Order::class);
    }
}
