<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saving extends Model
{
    protected $table = 'savings';
    protected $guarded = [];
    protected $primaryKey = 'id_saving';
    protected $fillable = ['class_id','id_hoomeroom_teacher','id_student'];
    protected $dates = ['deleted_at'];

}
