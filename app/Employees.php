<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    /*
     * @var string
     */
    protected $table = 'employees';
    protected $fillable = ['birth_date', 'first_name', 'last_name', 'gender', 'hire_date'];

    public $timestamps = false;
}
