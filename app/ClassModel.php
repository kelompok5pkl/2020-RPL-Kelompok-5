<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassModel extends Model
{
	use SoftDeletes;

    protected $table = 'classes';
    protected $guarded = [];
    protected $primaryKey = 'class_id';
    protected $fillable = ['class_name','id_majors'];
    protected $dates = ['deleted_at'];

}
