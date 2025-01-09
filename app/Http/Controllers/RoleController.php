<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\PermissionRoleModel;
use Auth;

class RoleController extends Controller
{
    public function list()
    {
        $PermissionRole = PermissionRoleModel::getPermission('Role', Auth::user()->role_id);
        if (empty($PermissionRole))
        {
            abort(404);
        }
        $data['PermissionAdd'] = PermissionRoleModel::getPermission('Add Role', Auth::user()->role_id);
        $data['PermissionEdit'] = PermissionRoleModel::getPermission('Edit Role', Auth::user()->role_id);
        $data['PermissionDelete'] = PermissionRoleModel::getPermission('Delete Role', Auth::user()->role_id);



        $data['getRecord'] = RoleModel ::getRecord();
        return view('panel.role.list', $data);
    }

    public function add()
    {
        $getPermission = PermissionModel::getRecord();
        $data['getPermission'] = $getPermission;
        return view('panel.role.add' , $data);

    }

    public function insert(Request $request)
    {
        $save = new RoleModel;
        $save->name = $request->name;
        $save->save();

        PermissionRoleModel::InserUpdateRecord($request->permission_id, $save->id);

        return redirect('panel/role')->with ('sucess', "Role successfully created");
    }

    public function edit($id)
    {
        $data['getRecord'] = RoleModel::getSingle($id);
        $data['getPermission'] = PermissionModel::getRecord();
        $data['getRolePermission'] = PermissionRoleModel::getRolePermission($id);
        return view('panel.role.edit' , $data);

    }

    public function update($id, Request $request)
    {
        $save = RoleModel::getSingle($id);
        $save->name = $request->name;
        $save->save();

        PermissionRoleModel::InserUpdateRecord($request->permission_id, $save->id);


        return redirect('panel/role')->with ('sucess', "Role successfully updated");
    }

    public function delete($id)
    {
        $save = RoleModel::getSingle($id);
        $save->delete();

        return redirect('panel/role')->with ('sucess', "Role successfully deleted");
    }
    
}