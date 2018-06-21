<?php

namespace App\Models\Applicants;

use App\Uuids;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    use Uuids;

    protected $table = 'applicant_attachments';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filename', 
        'filesize', 
        'remarks',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'filename',
        'filesize',
    ];
}
