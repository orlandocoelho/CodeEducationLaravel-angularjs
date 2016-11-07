<?php

namespace CodeEducation;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'responsible',
        'phone',
        'address',
        'obs'
    ];
}
