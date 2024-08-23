<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseRecord extends Model
{
    use HasFactory;
    protected $table = 'cases';
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
        'status',
        'share_url',
        'unique_url'
    ];
}
