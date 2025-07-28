<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherService extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'call_time',
        'firstname',
        'lastname',
        'phone',
        'email',
        'zip_code',
        'address',
        'xx_tf_token',
        'xx_tf_cert_url',
        'xx_tf_ping_url',
        'share_url',
        'unique_url'
    ];
}
