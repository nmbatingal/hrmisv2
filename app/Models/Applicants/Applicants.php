<?php

namespace App\Models\Applicants;

use App\Uuids;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use Uuids;

    protected $table = 'applicants';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 
        'middlename', 
        'lastname',
        'sex',
        'age',
        'email',
        'mobile_number',
    ];
}
