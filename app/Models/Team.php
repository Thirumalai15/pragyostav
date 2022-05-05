<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'reg_id',
        'event_name',
        'team_lead',
        'team_lead_email',
        'team_lead_phone',
        'team_lead_year',
        'team_lead_department',
        'team_lead_college',
        'member_1',
        'member_1_phone',
        'member_1_year',
        'member_1_department',
        'member_1_college',
        'member_2',
        'member_2_phone',
        'member_2_year',
        'member_2_department',
        'member_2_college',
        'attendance', // 0 => for absent , 1 => present
        'image'
    ];
}
