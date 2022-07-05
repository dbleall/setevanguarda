<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_category',
        'product_image1',
        'product_image2',
        'product_image3',
        'product_image4',
        'product_image5',
        'product_code',
        'product_price',
        'product_condition_payment',
        'product_description',
        'product_description2',
        'product_suplier',
    ];
}
