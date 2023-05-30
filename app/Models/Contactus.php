<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    protected $fillable = [
        'conus_name',
        'conus_email',
        'conus_phone',
        'conus_sub',
        'conus_mess',
        'conus_slug',
    ];
}
