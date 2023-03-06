<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = false;
    protected $fillable = ['price', 'description', 'acquisition_date', 'customer_id', 'employee_id'];
    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class)->using(EmployeeOrder::class);
    }
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
