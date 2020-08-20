<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    // Table name
    protected $table = 'projects';
    // Primary key 
    public $primaryKey = 'tableid';
}