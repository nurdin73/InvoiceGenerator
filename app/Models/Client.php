<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'code', 'name', 'email', 'phone', 'npwp', 'district', 'city', 'province', 'state', 'postal_code', 'address'];
}