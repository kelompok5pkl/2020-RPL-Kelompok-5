<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'id_student';
	protected $fillable = ['nisn','name_student','class_student'];
}

