<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawlogicLead extends Model
{
    protected $fillable = [
        'key',
        'code',

        'first_name',
        'last_name',
        'phone',
        'email',

        'address',
        'city',
        'state',
        'zip',

        'attorney',
        'benefit_status',
        'between_50_and_63',
        'work_history',
        'medical_condition',

        'ip_address',
        'sub_id2',
        'special_route',

        'type',

        'xx_tf_token',
        'xx_tf_cert_url',
        'xx_tf_ping_url',

        'share_url',
        'unique_url',

        'api_status',
        'lead_id',
    ];

    use HasFactory;
}
