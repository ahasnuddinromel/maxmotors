<?php

namespace App\Traits;
use App\Models\Permission;
use App\Models\Role;


trait HasPermissionsTraits{

    //Give Parmission
    public function getAllPermissions($premission){
        return Permission::whereIn('slug', $premission)->get();
    }


    //Check Has Permission
    public  function hasPermission($premission){
        return (bool) $this -> permissions -> where('slug', $premission->slug)->count();
    }


    //Check Has Role

     public function hasRole(...$roles){
        foreach($roles as $role){
            if($this-> roles->contains('slug', $role)){
                return true;
            }
        }
        return false;
     }
     public function haspermissionThroughRole($permissions){
        foreach($permissions->roles as $role){
            if($this-> roles->contains($role)){
                return true;
            }
        }
        return false;
     }

    public function permissions(){
        return $this-> belongsToMany(Permission::class, 'users_permissions');
    }

    public function roles(){
        return $this-> belongsToMany(Role::class, 'users_roles');
    }




}
