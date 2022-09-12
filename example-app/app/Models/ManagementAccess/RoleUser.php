<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
//use HasFactory;
use SoftDeletes;

public $table = 'role_user';

protected $date = [

    'create_at',
    'update_at',
    'delete_at',
];

protected $fillable = [
    'role_id',
    'user_id',
    'created_at',
    'updated_at',
    'deleted_at',
];

}
