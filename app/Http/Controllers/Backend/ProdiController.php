<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prodi;
use App\Models\Jurusan;
use Illuminate\Support\Str;

class ProdiController extends Controller
{
    public function index($jurusan)
    {
        $data['prodi'] = Prodi::where('jurusan_id',$jurusan)->get();
        $data['jurusan'] = Jurusan::where('id',$jurusan)->first();
        // return $prodi;
        return view('backend.data.prodi',compact('data'));
    }

    public function store(Request $request, $jurusan)
    {
        $prodi = new Prodi;
        $prodi->jurusan_id = $jurusan;
        $prodi->nama_prodi = $request->prodi;
        $prodi->save();
        return redirect()->back()->with('success','Berhasil Menambah prodi');
    }
    
    public function update(Request $request, $jurusan)
    {
        $prodi = Prodi::find($request->id);
        $prodi->jurusan_id = $jurusan;
        $prodi->nama_prodi = $request->prodi;
        $prodi->save();
        return redirect()->back()->with('success','Berhasil Mengganti Prodi');
    }

    public function destroy($jurusan, $id)
    {
        Prodi::find($id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Prodi');
    }

    // Select box for jurusan dan prodi
    public function jurusan_prodi($jurusan)
    {
        $prodi = Prodi::where('jurusan_id',$jurusan)->get();
        return $prodi;
    }
}
