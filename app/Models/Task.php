<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'taskname',
        'description',
        'project',
        'assigned_to',
        'priority',
        'status',
        'startdate',
        'duedate',
        'estimated_hours',
        'attachment'
    ];
}
