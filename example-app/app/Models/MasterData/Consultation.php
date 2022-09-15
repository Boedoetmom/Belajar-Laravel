<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    //use HasFactory;
    use SoftDeletes;

public $table = 'consultation';

protected $date = [

    'create_at',
    'update_at',
    'delete_at',
];

protected $fillable = [
    'name',
    'created_at',
    'updated_at',
    'deleted_at',
];


public function appointment() {

    return $this->hasMany('App\Models\Operational\Appointment', 'consultation_id');
    }


}
