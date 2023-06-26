<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        // return 'halaman Role';
        $role = Role::all();
        // return $role;
        return view('backend.data.role',compact('role'));
    }

    public function store(Request $request)
    {
        $role = $request->all();
        Role::create($role);
        return redirect()->back()->with('success','Berhasil Menambah Role');
    }

    public function update(Request $request)
    {
        $role = Role::find($request->id);
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->save();
        return redirect()->back()->with('success','Berhasil Mengganti Role');
    }

    public function destroy($id)
    {
        Role::find($id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Role');
    }
}
