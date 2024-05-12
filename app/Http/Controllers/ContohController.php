<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contoh;
class ContohController extends Controller
{
    public function index()
    {
        $data = Contoh::all();
        return view('contoh',compact('data'));
    }
    public function create()
    {
        return view('contoh_create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);
        Contoh::create($validasi);
        return redirect('contoh')->with('message', 'Data Telah Berhasil Di Tamnbahkan');
    }
}
