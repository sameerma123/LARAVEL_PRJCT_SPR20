<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    // Table name
    protected $table = 'members';
    // Primary key 
    public $primaryKey = 'tableid';
}