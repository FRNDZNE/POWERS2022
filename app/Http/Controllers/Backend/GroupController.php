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
        
        $data['mentoredu'] = User::with('role')->whereHas(
            'role', fn($q) => $q->where('name','edu')
        )->get();

        $data['mentorpr'] = User::with('role')->whereHas(
            'role', fn($q) => $q->where('name','pr')
        )->get();

        $data['mentoreo'] = User::with('role')->whereHas(
            'role', fn($q) => $q->where('name','eo')
        )->get();

        $data['mentormdd'] = User::with('role')->whereHas(
            'role', fn($q) => $q->where('name','mdd')
        )->get();

        $data['mentorranger'] = User::with('role')->whereHas(
            'role', fn($q) => $q->where('name','ranger')
        )->get();

        // $data['mentee'] = User::with('role')->whereHas
        // return $data['mentor'];
        // $mentor = User::with('mentor')->get();
        // return $mentor;
        return view('backend.data.groupuser',compact('data'));
    }

    public function store_member(Request $request, $id)
    {
        $group = Group::find($id);

        foreach ($group->user as $user) {
            # code...
            $user->attach($request->id);
        }
        

        return back();

    }

}
