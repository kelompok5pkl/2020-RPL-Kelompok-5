<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'class';
    protected $guarded = [];
    protected $fillable = ['class_name','id_majors'];

}
