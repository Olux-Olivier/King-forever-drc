<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = [
        'event',
        'ip_address',
        'user_agent',
    ];
}
