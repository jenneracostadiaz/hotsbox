<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainReminder extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
