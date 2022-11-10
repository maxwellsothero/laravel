<?php
declare(strict_types=1);
namespace App\Models;

class Event
{
    protected $fillable =[
        'title',
        'date',
        'city',
        'quantity',
    ];

    protected $hidden =[
        'quantity',
    ];
}