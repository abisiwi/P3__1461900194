<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class kegiatan3 extends Controller
{
    public function index0194()
    {
       $data = Dokter::get();
       return view('index0194',compact('data'));
    }
    public function edit0194($id)
    {
       $data = Dokter::find($id);
       return view('edit0194',compact('data'));
    }
    public function update0194(Request $request, $id)
    {
       $data = Dokter::find($id);
       $data->nama = $request->nama;
       $data->jabatan = $request->jabatan;
       $data->save();
       return redirect()->route('index0194');
    }
    public function tambah0194()
    {
       return view('tambah0194');
    }
    public function store0194(Request $request)
    {
       $data = new Dokter;
       $data->nama = $request->nama;
       $data->jabatan = $request->jabatan;
       $data->save();
       return redirect()->route('index0194');
    }
    public function hapus0194($id)
    {
       $data = Dokter::find($id);
       $data->delete();
       return redirect()->route('index0194');
    }
}
