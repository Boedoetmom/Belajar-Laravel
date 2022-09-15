<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
//use HasFactory;
use SoftDeletes;

public $table = 'role';

protected $date = [

    'create_at',
    'update_at',
    'delete_at',
    ];

protected $fillable = [
    'title ',
    'created_at',
    'updated_at',
    'deleted_at',
    ];

    public function role_user() {

        return $this->hasMany('App\Models\ManagementAccess\RoleUSer', 'role_id');
   }
   
   public function permission_role() {

    return $this->hasMany('App\Models\ManagementAccess\permission_role', 'role_id');
}
}
