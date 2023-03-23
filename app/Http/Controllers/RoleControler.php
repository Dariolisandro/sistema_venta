<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleControler extends Controller
{
    //
    public function index(Request $request)
    {
        $roles = Role::orderBy('id','Desc')->paginate(5);
        return view('roles.index',compact('roles'))
              ->with('i',($request->input('page',1)- 1)* 5);

    }
    public function create()
    {
        $permission = Permission::get();
        return view('roles.create',compact('permission'));
    
    }
    public function store(Request $request)
    {
        $this->validate($request, [

            'name'=>'required|unique:roles,name',            
            'permission'=>'required',


        ]);
        $role = Role::create(['name'=>$request->input('name')]);
        $role->syscPermissions($request->input('permission'));

        return redirect()->route('roles.index')
                        ->with('success','Role created successfully'); 

    } 
    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permisssions.permissions_id","rolepermissions_has_permissions",$id)
                        ->where("role_has_permissions.role_id",$id)
                        ->get();
        return view('roles.show',compact('role','rolePermissions'));                 
    }   
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id","rolespermissions_has_permissions",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('roles.edit',compact('roles','permission','rolePermissions'));

    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required',            
            'permission'=>'required', 
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permissions'));
        return redirect()->route('roles.index')
                        ->with('success','Role updated successfully');
    }

    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->rotue('roles.index')
                         ->with('success','Role updated successfully');
    }

}
