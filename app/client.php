<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = [
        'client_name_ar', 'client_name_en', 'tax_number','address' , 'mobile' , 'email' , 
    ];
}
