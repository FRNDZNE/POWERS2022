<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\Role;
use App\Models\Permission;
use Image;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->get();
        return view('backend.user.index',compact('user'));
    }

    public function create()
    {
        $data['jurusan'] = Jurusan::all();
        $data['prodi'] = Prodi::all();
        $data['role'] = Role::all();
        $data['permission'] = Permission::all();
        // return $jurusan;
        return view('backend.user.create',compact('data'));
    }

    public function store(Request $request)
    {
        // dd($request->role);
        $foto = "uploads/profiles/" . md5(date('dmyhis')) . '.jpg';
        Image::make($request->foto)->encode('jpg',100)->orientate()->resize(1024, null, function ($constraint){
            $constraint->upsize();
            $constraint->aspectRatio();
        })->save($foto);

        $data = $request->all();
        $data['foto'] = $foto;
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        // $user->attachRole(explode("",$request->role));
        foreach ($request->role as $role) {
            $user->attachRole($role);
        }
        $user->attachPermission($request->permission);
        return redirect()->route('index.user');
    }

    public function detail($id)
    {
        $user = User::with([
            'jurusan', 'prodi','role'
        ])->where('id',$id)->first();

        return view('backend.user.detail',compact('user'));
    }
}
