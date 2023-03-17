<?php

namespace App\Http\Controllers\Admin;

use App\Models\HubungiKami;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HubungiKamiController extends Controller
{
    public function index()
    {
        $data = HubungiKami::latest()->get();

        return view('admin.hubungi_kami.index',compact('data'));
    }
    public function HubungiKamidetail($id)
    {
        $data = HubungiKami::find($id);
        return view('admin.hubungi_kami.detail',compact('data'));

    }
}