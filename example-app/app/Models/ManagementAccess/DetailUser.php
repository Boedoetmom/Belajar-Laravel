<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
   //use HasFactory;
    use SoftDeletes;

    public $table = 'detal_user';

    protected $date = [

        'create_at',
        'update_at',
        'delete_at',
    ];

    protected $fillable = [
        'user_id',
        'type_userid',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


}
