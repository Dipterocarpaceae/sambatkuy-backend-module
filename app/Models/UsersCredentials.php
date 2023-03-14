<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UsersCredentials extends Authenticatable
{
    use HasApiTokens, HasFactory, HasUuids, Notifiable;

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
