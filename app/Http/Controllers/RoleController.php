<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function show_list_role()
    {
        $role = Role::all();
        $roleCount = Role::count();

        return view('page.role.list',['role'=>$role,'roleCount'=>$roleCount]);
    }
    public function show_add_role()
    {
        return view('page.role.add');
    }
    public function show_edit_role()
    {
        return view('page.role.edit');
    }
    public function add(Request $request){
        $role = new Role();
        $role->role_name = $request->input('role_name');

        $role->permisson = $request->input('permisson');
        $role->save();
        return redirect()->route('show_list_role.index');
    }
    public function destroy($id)
    {
        $role = Role::find($id);
        if (!$role) {
            return redirect()->route('show_list_role.index')->with('error', 'Không tìm thấy danh mục!');
        }
        $role->delete();
        return redirect()->route('show_list_role.index')->with('success', 'Danh mục đã được xóa thành công!');
    }
}
