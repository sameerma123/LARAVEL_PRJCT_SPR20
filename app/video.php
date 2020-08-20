<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    // Table name
    protected $table = 'videos';
    // Primary key 
    public $primaryKey = 'tableid';
}