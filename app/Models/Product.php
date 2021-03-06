<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'unitBuyingCost',
        'unitSellingCost',
        'quantity',
        'taxRate',
        'soldOutFlag',
        'user_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
