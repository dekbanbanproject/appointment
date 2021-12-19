<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oapp extends Model
{
   protected $connection = 'mysql2';
    protected $table = 'oapp';
    protected $primaryKey = 'oapp_id';
    // public $timestamps = false;
}

