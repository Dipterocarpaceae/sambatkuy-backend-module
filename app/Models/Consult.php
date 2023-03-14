<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory, HasUuids;

    protected $table = "consult";

    public function user()
    {
        return $this->belongsTo(UsersProfile::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
