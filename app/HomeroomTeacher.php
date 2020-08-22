<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeroomTeacher extends Model
{
	protected $table = 'homeroom_teacher';
    protected $primaryKey = 'id_homeroom_teacher';
	protected $fillable = ['id_teacher','id_class'];
}
