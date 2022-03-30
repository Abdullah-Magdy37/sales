<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'product_name_ar', 'product_name_en', 'description_ar','description_en' , 'selling_price' , 'item_barcode' ,
    ];
}
