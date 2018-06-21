<?php

namespace App\Models\Applicants;

use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    protected $table = 'applicant_educations';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'program', 
        'acronym', 
        'institution',
        'year',
    ];
}
