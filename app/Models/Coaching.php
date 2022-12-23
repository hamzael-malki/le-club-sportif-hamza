<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coaching extends Model
{
    use HasFactory;

    protected $fillable = [
        'coaching_name',
        'coaching_date',
        'start_hour',
        'end_hour',
    ];
}
