<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable=[
        'title',
        'text',
        'pic',
        'links',
        'visit',
        'type',
    ];
//    protected $casts=[
//        'visit'=>'array',
//    ];
}
