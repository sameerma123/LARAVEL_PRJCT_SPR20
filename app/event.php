<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    // Table name
    protected $table = 'events';
    // Primary key 
    public $primaryKey = 'tableid';
}
