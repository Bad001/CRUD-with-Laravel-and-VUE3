<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $table = 'customers';
    public $timestamps = false;
    protected $fillable = ['name', 'surname', 'phone_number', 'email'];
    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
