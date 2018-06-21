<?php

namespace App\Models\Position;

use Illuminate\Database\Eloquent\Model;

class VacancyApplication extends Model
{
    protected $table = 'position_vacancy_application';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position_id', 
        'applicant_id', 
        'interview_on',
        'interviewed_at',
    ];
}
