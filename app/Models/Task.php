<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userId',
        'projectId',
        'priorityId',
        'statusId',
        'sprintId',
        'taskName',
        'description',
        'summary',
        'projManager',
        'scrumMaster',
        'qualityAssurance',
        'developer',
        'deadline',
        'blnFlag'
    ];
}
