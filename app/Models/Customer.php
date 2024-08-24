<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        "fname",
        "lname",
        "nickname",
        "address",
        "phone",
        "gender",
        "completed",
        "status",
    ];

    public function receives():HasMany
    {
        return $this->hasMany(receive::class);
    }

    public function withdrags():HasMany
    {
        return $this->hasMany(Withdraw::class);
    }



}
