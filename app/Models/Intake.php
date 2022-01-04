<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intake extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone_number',
        'company_name',
        'explanation',
        'token',
        'customer_id',
        'notes',
        'teams_link',
        'manually',
        'status'
    ];
}
