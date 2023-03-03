<?php

namespace App\Http\Controllers\Admin;

use App\Models\TentangKami;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    public function index()
    {
        $data = TentangKami::all();
        return view('admin.tentang_kami.index',compact('data'));
    }
    public function create()
    {
        return view('admin.tentang_kami.create');
    }
    public function store(Request $request)
    {
        $image = $request->file('image')->store('img-tentang-kami');
        $data = new TentangKami;
        $data->nama = $request->nama;
        $data->image = $image;
        $data->position = $request->position;
        $data->status = $request->status == true ? '1' : '0';
        $data->description = $request->description;
        $data->save();

        return redirect('admin/tentang-kami')->with('message','Berhasil Menambahkan Data Anggota');
    }
    public function edit($id)
    {
        $data = TentangKami::find($id);
        return view('admin.tentang_kami.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validasi =[
            'nama' => 'max:255|required',
            'image' => 'image|file',
            'position' => 'required',
            'status' => 'max:2',
            'description' => 'required',
        ];
        $validated = $request->validate($validasi);

        $validated['status'] = $request->status == true ? '1' : '0';

        if($request->file('image')){
            if($request->oldImage);{
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('img-tentang-kami');
        }
        TentangKami::where('id',$id)->update($validated);

        return redirect('admin/tentang-kami')->with('message','Berhasil Edit Data Anggota');
    }
    public function destroy(TentangKami $TentangKami)
    {
        Storage::delete($TentangKami->image);
        
        TentangKami::destroy($TentangKami->id);

        return redirect('admin/tentang-kami')->with('message','Berhasil Hapus Data Anggota');

    }

}
