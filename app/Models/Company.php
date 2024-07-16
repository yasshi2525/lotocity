<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'x',
        'y',
        'cash',
    ];

    public function owner() {
        return $this->belongsTo(Owner::class);
    }
}
