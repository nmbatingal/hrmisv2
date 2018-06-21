<?php

namespace App\Models\Applicants;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table = 'applicant_work_experiences';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position', 
        'agency', 
        'salary_grade',
        'from_date',
        'to_date',
    ];
}
