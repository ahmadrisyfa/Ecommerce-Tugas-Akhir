<?php

namespace App\Http\Controllers\Admin;

use App\Models\BannerTwo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BannerTwoController extends Controller
{
    public function index()
    {
        $data = BannerTwo::latest()->get();
        return view('admin.banner.two.index',compact('data'));
    }
    public function create()
    {
        return view('admin.banner.two.create');
    }
    public function store(Request $request)
    {
        $image_banner_two = $request->file('image_banner_two')->store('img-banner-two');
        $data = new BannerTwo;
        $data->image_banner_two = $image_banner_two;
        $data->status_image_banner_two = $request->status_image_banner_two == true ? '1' : '0';
        $data->save();
        return redirect('admin/banner-two')->with('message','Berhasil Menambahkan Data Banner Two');
    }
    public function edit($id)
    {
        $data = BannerTwo::find($id);
        return view('admin.banner.two.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        
        $rules=[       
            'image_banner_two'=>'image|file',
            'status_image_banner_two'=>'max:2'
        ];

        $validatedData = $request->validate($rules);
        

        $validatedData['status_image_banner_two'] = $request->status_image_banner_two == true ? '1' : '0';    
            
        if($request->file('image_banner_two')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image_banner_two'] = $request->file('image_banner_two')->store('img-banner-two');
        }      
        BannerTwo::Where('id',$id)
        ->update($validatedData);
        return redirect('admin/banner-two')->with('message','Berhasil Edit Data Banner Two');

    }
    public function destroy(BannerTwo $BannerTwo)
    {
        Storage::delete($BannerTwo->image_banner_two);
        
        BannerTwo::destroy($BannerTwo->id);

        return redirect('admin/banner-two')->with('message','Berhasil Hapus Data Banner Two');

    }
}
