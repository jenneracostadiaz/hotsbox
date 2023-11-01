<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tenant()
    {
        return $this->hasMany(ServerTenant::class);
    }

    public function serverGroups()
    {
        return $this->belongsToMany(ServerGroup::class);
    }

    public function hostings()
    {
        return $this->hasMany(Hosting::class);
    }

}
