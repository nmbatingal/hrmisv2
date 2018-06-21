<?php

namespace App\Models\Applicants;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'applicant_trainings';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'training_title', 
        'conducted_by', 
        'hours_training',
        'from_date',
        'to_date',
    ];
}
