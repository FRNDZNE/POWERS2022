<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;

class GroupController extends Controller
{
    public function index()
    {
        // return 'halaman group';
        $data = Group::all();
        return view('backend.data.group',compact('data'));
    }

    public function store(Request $req)
    {
        $data = $req->all();
        Group::create($data);
        // return $data;
        return back()->with('success','Berhasil Menambah Grup');
    }

    public function update(Request $request)
    {
        $grup = Group::find($request->id);
        $grup->nama = $request->nama;
        $grup->save();
        return redirect()->back()->with('success','Berhasil Mengganti Nama Group');
    }

    public function destroy($id)
    {
        Group::find($id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Group');
    }

    public function index_member($id)
    {
        $data['group'] = Group::with([
            'mentor','mentee'
        ])->where('id',$id)->first();

        // $mentor = User::with('mentor')->get();
        // return $mentor;
        return view('backend.data.groupuser',compact('data'));
    }

    public function store_member(Request $request, $id)
    {
        $group = Group::find($id);
        // $group->user()->attach($request->id);
        
        return $group;

    }

}
