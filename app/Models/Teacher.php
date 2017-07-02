<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use UuidModelTrait;

    protected $fillable = [
        'firstname', 'lastname',  'email', 'dateOfBirth',
    ];


    protected $casts = [

    'name'=>'string', 
    'surname'=>'string',  
    'email'=>'string', 
    'dateOfBirth'=>'dateTime', 
    ];

}
