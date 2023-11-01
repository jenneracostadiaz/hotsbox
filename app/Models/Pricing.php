<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
