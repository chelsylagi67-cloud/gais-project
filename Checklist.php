<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable = [
        'created_by',
        'activity_name',
        'activity_time',
        'type',
        'category',
        'location',
        'description',
        'status',
        'date',
        'notes',
    ];
}