<?php

namespace App\Models\Applicants;

use Illuminate\Database\Eloquent\Model;

class Eligibility extends Model
{
    protected $table = 'applicant_eligibilities';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 
        'license_number', 
        'rating',
        'exam_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'license_number',
        'rating',
    ];
}
