<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
	use SoftDeletes;
	protected $table = 'students';
    protected $primaryKey = 'id_student';
	protected $fillable = ['nisn','name_student','class_student'];
	protected $dates = ['deleted_at'];
}

