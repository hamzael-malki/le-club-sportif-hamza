<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'Subs_name',
        'Subs_price',
        'Subs_period',
    ];
}
