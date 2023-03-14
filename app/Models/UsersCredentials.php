<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersCredentials extends Model
{
    use HasFactory, HasUuids;

    protected $table = "users_credentials";

    public function profile()
    {
        return $this->hasOne(UsersProfile::class);
    }

    public function psycologist()
    {
        return $this->hasOne(Psycologist::class);
    }
}
