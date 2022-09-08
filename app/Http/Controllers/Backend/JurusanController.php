<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jurusan;


class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('backend.data.jurusan',compact('jurusan'));
    }

    public function store(Request $request)
    {
        $jurusan = new Jurusan;
        $jurusan->nama_jurusan = $request->jurusan;
        $jurusan->save();
        return redirect()->back()->with('success','Berhasil Menambah Jurusan');
    }

    public function update(Request $request)
    {
        $jurusan = Jurusan::find($request->id);
        $jurusan->nama_jurusan = $request->jurusan;
        $jurusan->save();
        return redirect()->back()->with('success','Berhasil Mengganti Jurusan');
    }

    public function destroy($id)
    {
        Jurusan::find($id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Jurusan');
    }

    
}
