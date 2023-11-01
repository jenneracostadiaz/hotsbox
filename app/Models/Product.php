<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function server_groups()
    {
        return $this->belongsTo(ServerGroup::class);
    }

    public function pricing()
    {
        return $this->hasMany(Pricing::class);
    }

    public function cancel_requests()
    {
        return $this->hasMany(CancelRequest::class);
    }

    public function invoice_items()
    {
        return $this->hasMany(InvoiceItem::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function hostings()
    {
        return $this->hasMany(Hosting::class);
    }
}
