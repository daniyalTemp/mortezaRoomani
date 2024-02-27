<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class config extends Model
{
    use HasFactory;
    protected $table='configs';
    protected $fillable=[
        'firstName',
        'lastName',
        'email',
        'address',
        'phone',
        'instagram',
        'telegram',
        'image',
        'about',
        'birthday',
    ];
}
