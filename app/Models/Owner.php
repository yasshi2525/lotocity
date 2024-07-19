<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'display_name',
    ];

    public function company()
    {
        return $this->hasOne(Company::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
