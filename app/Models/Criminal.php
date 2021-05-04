<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criminal extends Model
{
    use HasFactory;

    protected $fillable = [
        'criminal_name',
        'criminal_address',
        'criminal_age',
        'criminal_gender'
    ];
}
