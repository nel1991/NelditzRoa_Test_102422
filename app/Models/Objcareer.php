<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objcareer extends Model
{
    use HasFactory;

      protected $table = 'objcareer';
      protected $primaryKey = 'id';

      protected $fillable = [
        
    'objname',
    'descrip',
    'targetdate',
    'compldate',

    ];
}
