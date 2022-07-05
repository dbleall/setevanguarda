<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'info_name',
        'info_logo',
        'info_email',
        'info_phone',
        'info_phone2',
        'info_facebook',
        'info_instagram',
        'info_description',
        'info_address_street',
        'info_address_number',
        'info_address_city',
        'info_address_state',
        'info_address_country',
        'info_address_cep',
    ];
}
