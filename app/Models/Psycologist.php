<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psycologist extends Model
{
    use HasFactory, HasUuids;

    protected $table = "psycologist";

    public function credentials()
    {
        return $this->belongsTo(UsersCredentials::class);
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
