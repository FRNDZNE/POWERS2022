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
use File;
use Auth;

class UserController extends Controller
{
    // Show Ranger
    public function index_ranger()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->whereHas(
            'role', fn($q) => $q->where('name','ranger')
        )->whereHas(
            'permission', fn($q) => $q->where('name','yes')
        )->get();
        return view('backend.user.index',compact('user'));
    }
    // Show New Ranger No Have Permission
    public function index_new_no()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->whereHas(
            'role', fn($q) => $q->where('name','new')
        )->whereHas(
            'permission', fn($q) => $q->where('name','no')
        )->get();
        return view('backend.user.index',compact('user'));

    }

    // Show New Ranger Have Permission
    public function index_new_yes()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->whereHas(
            'role', fn($q) => $q->where('name','new')
        )->whereHas(
            'permission', fn($q) => $q->where('name','yes')
        )->get();
        return view('backend.user.index',compact('user'));

    }

    // Show Public Relation Division
    public function index_pr()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->whereHas(
            'role', fn($q) => $q->where('name','pr')
        )->whereHas(
            'permission', fn($q) => $q->where('name','yes')
        )->get();

        // return $user;
        return view('backend.user.index',compact('user'));

    }

    // Show Education Division
    public function index_edu()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->whereHas(
            'role', fn($q) => $q->where('name','edu')
        )->whereHas(
            'permission', fn($q) => $q->where('name','yes')
        )->get();
        return view('backend.user.index',compact('user'));


    }

    // Show Member Development Division
    public function index_mdd()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->whereHas(
            'role', fn($q) => $q->where('name','mdd')
        )->whereHas(
            'permission', fn($q) => $q->where('name','yes')
        )->get();
        return view('backend.user.index',compact('user'));


    }

    // Show Event Organizer Division
    public function index_eo()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->whereHas(
            'role', fn($q) => $q->where('name','eo')
        )->whereHas(
            'permission', fn($q) => $q->where('name','yes')
        )->get();
        return view('backend.user.index',compact('user'));


    }

    // Show Core
    public function index_core()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->whereHas(
            'role', fn($q) => $q->where('name','core')
        )->whereHas(
            'permission', fn($q) => $q->where('name','yes')
        )->get();
        return view('backend.user.index',compact('user'));
    }

    // Show All User
    public function index()
    {
        $user = User::with([
            'jurusan','prodi','role','permission'
        ])->get();
        // ->whereHas('permission', fn($q) => $q->where('name','no'))
        return view('backend.user.index',compact('user'));
    }

    // Page Create User
    public function create()
    {
        $data['jurusan'] = Jurusan::all();
        $data['prodi'] = Prodi::all();
        $data['role'] = Role::all();
        $data['permission'] = Permission::all();
        // return $jurusan;
        return view('backend.user.create',compact('data'));
    }

    // function to Store User
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
        return redirect()->route('index.user')->with('success','Berhasil Menambah Akun');
    }

    // Show Profile User
    public function detail($id)
    {
        $user = User::with([
            'jurusan', 'prodi','role','Permission'
        ])->where('id',$id)->first();

        return view('backend.user.detail',compact('user'));
    }

    // Page Edit User
    public function edit($id)
    {
        $data['jurusan'] = Jurusan::all();
        $data['prodi'] = Prodi::all();
        $data['role'] = Role::all();
        $data['permission'] = Permission::all();
        $data['user'] = User::with([
            'jurusan','prodi','role','permission'
        ])->where('id',$id)->first();

        return view('backend.user.edit',compact('data'));
    }

    // function to update user
    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->with(['role','permission'])->first();
        $data = $request->all();
        // return $user->permission;
        
        // set password
        if ($request->password != null) {
            # code...
            // return 'password diubah';
            $data['password'] = bcrypt($request->password);
        } else {
            // return 'password sama dengan sebelumnya';
            unset($data['password']);
        }

        // set foto profile
        if ($request->foto) {
            # code...
            $foto = "uploads/profiles/" . md5(date('dmyhis')) . '.jpg';
            $data['foto'] = $foto;
            $success = Image::make($request->foto)->encode('jpg',100)->orientate()->resize(1024, null, function ($constraint){
                $constraint->upsize();
                $constraint->aspectRatio();
            })->save($foto);
            
            if ($success) {
                # code...
                // return 'berhasil upload';
                if (file_exists($user->foto)) {
                    # code...
                    unlink($user->foto);
                }
            }
        }

        // menghapus permission yang sebelumnya
        $user->update($data);
        foreach ($user->permission as $permission) {
            $user->detachPermission($permission);
        }
        // Menambah permission baru yang telah di ubah
        $user->attachPermission($request->permission);

        foreach ($user->role as $roleLama) {
            # code...
            $user->detachRole($roleLama);
        }

        foreach ($request->role as $roleBaru) {
            # code...
            $user->attachRole($roleBaru);
        }
        
        return redirect()->route('index.user')->with('success','Data Berhasil Di Ubah');
       
        

    }

    // function to delete user
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->foto) {
            # code...
            File::delete(public_path($user->foto));
        }
        $user->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Akun');
    }

    // Mengaktifkan dan menonaktifkan akun
    public function aktifkan($id)
    {
        $user = User::where('id',$id)->with(['permission'])->first();
        foreach ($user->permission as $permission) {
            # code...
            $user->detachPermission($permission);
        }
        $user->attachPermission('yes');
        return redirect()->back()->with('success','Berhasil Mengaktifkan Akun');
    }

    public function nonaktifkan($id)
    {
        $user = User::where('id',$id)->with(['permission'])->first();
        foreach ($user->permission as $permission) {
            # code...
            $user->detachPermission($permission->name);
        }
        $user->attachPermission('no');
        return redirect()->back()->with('success','Berhasil Menonaktifkan Akun');

    }

    // Another user who can change profile
    public function update_profile(Request $request, $id)
    {
        $user = User::where('id',$id)->with(['role','permission'])->first();
        $data = $request->all();
        // return $user->permission;
        
        // set password
        if ($request->password != null) {
            # code...
            // return 'password diubah';
            $data['password'] = bcrypt($request->password);
        } else {
            // return 'password sama dengan sebelumnya';
            unset($data['password']);
        }

        // set foto profile
        if ($request->foto) {
            # code...
            $foto = "uploads/profiles/" . md5(date('dmyhis')) . '.jpg';
            $data['foto'] = $foto;
            $success = Image::make($request->foto)->encode('jpg',100)->orientate()->resize(1024, null, function ($constraint){
                $constraint->upsize();
                $constraint->aspectRatio();
            })->save($foto);
            
            if ($success) {
                # code...
                // return 'berhasil upload';
                if (file_exists($user->foto)) {
                    # code...
                    unlink($user->foto);
                }
            }
        }
        
        $user->update($data);
        return redirect()->back()->with('success','Data Berhasil Di Ubah');

    }

    
}
