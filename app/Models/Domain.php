<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function domain_reminders()
    {
        return $this->hasMany(DomainReminder::class);
    }

    public function hostings()
    {
        return $this->hasMany(Hosting::class);
    }
}
