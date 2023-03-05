<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = false;
    protected $fillable = ['price', 'description', 'acquisition_date', 'customer_id', 'employee_id'];
}
