<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory, HasUuids;
    
    protected $table = "schedule";

    public function psycologist()
    {
        return $this->belongsTo(Psycologist::class);
    }

    public function consult()
    {
        return $this->hasMany(Consult::class);
    }
}
