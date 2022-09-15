<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{

    use SoftDeletes;

    public $table = 'transaction';
    
    protected $date = [
    
        'create_at',
        'update_at',
        'delete_at',
    ];
    
    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    function appointment() {

        return $this->belongsTo('public\App\Models\Operational\Appointment', 'appointment_id', 'id');
    }
}
