<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscriber extends Model
{
    use HasFactory;

    protected $table = 'suscribers';

    protected $fillable = ['name', 'email', 'token'];
}
