<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Appointment extends Model
{
    
   use SoftDeletes;

   public $table = 'appointment';
   
   protected $date = [
   
       'create_at',
       'update_at',
       'delete_at',
   ];
   
   protected $fillable = [
       'doctor_id',
       'user_id',
       'consultation_id',
       'level',
       'date',
       'time',
       'status',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

    function doctor() {

    return $this->belongsTo('App\Models\Operational\Doctor', 'doctor_id', 'id');
}


function consultation() {

    return $this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
}

function user() {

    return $this->belongsTo('App\Models\USer', 'user_id', 'id');
}

function transaction() {

    return $this->hasOne('App\Models\Operational\Transaction', 'appointment_id');
}

}
