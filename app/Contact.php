<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $tableName = 'contacts';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
        'job_title'
    ];
}
