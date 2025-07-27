<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepoRecord extends Model
{
    use HasFactory;
    protected $table = 'depo_cases';
    protected $fillable = [
        'type',
        'depo_provera_taken',
        'depo_provera_use',
        'diagnosis',
        'attorney',
        'injury',
        'description',
        'firstname',
        'lastname',
        'phone' ,
        'email' ,
        'zip_code',
        'user_ip',
        'xx_tf_token',
        'xx_tf_cert_url',
        'xx_tf_ping_url',
        'share_url',
        'unique_url',
        'api_status',
        'has_redirect_url',
    ];
}
