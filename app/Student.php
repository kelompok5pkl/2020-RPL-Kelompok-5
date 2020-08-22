<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   	protected $table = 'students';
    protected $primaryKey = 'id_student';
	protected $fillable = ['nisn','name_student'];
}

