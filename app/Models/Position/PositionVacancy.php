<?php

namespace App\Models\Position;

use App\Uuids;
use Illuminate\Database\Eloquent\Model;

class PositionVacancy extends Model
{
    use Uuids;

    protected $table = 'position_vacancies';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position_title', 
        'acronym', 
        'salary_grade',
        'slot_available',
        '_isVacant',
    ];
}
