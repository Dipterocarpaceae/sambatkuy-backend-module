<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersProfile extends Model
{
    use HasFactory, HasUuids;

    protected $table = "users_profile";

    public function credentials()
    {
        return $this->belongsTo(UsersCredentials::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function consult()
    {
        return $this->hasMany(Consult::class);
    }
}
