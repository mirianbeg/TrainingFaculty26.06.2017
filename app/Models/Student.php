<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use UuidModelTrait;

    protected $fillable = [
    	'firstname', 'lastname', 'personalID', 'gender',  'email', 'dateOfBirth',
    ];


    protected $casts = [

    'name'=>'string', 
    'surname'=>'string',
    'personalID'=>'integer', 
    'gender'=>'string', 
    'email'=>'string', 
    'dateOfBirth'=>'dateTime', 
    ];

}
