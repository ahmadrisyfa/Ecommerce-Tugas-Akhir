<?php

namespace App\Http\Controllers\Admin;

use App\Models\BannerThree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BannerThreeController extends Controller
{
    public function index()
    {
        $data = BannerThree::latest()->get();
        return view('admin.banner.three.index',compact('data'));
    }
    public function create()
    {
        return view('admin.banner.three.create');
    }
    public function store(Request $request) 
    {
        $image_banner_three = $request->file('image_banner_three')->store('img-banner-three');
        $data = new BannerThree;
        $data->image_banner_three = $image_banner_three;
        $data->status_image_banner_three =  $request->status_image_banner_three == true ? '1' : '0';
        $data->save();

        return redirect('admin/banner-three')->with('message','Berhasil menambah Data Banner Three');
    }
    public function edit($id)
    {
        $data = BannerThree::find($id);
        return view('admin.banner.three.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $rules=[       
            'image_banner_three'=>'image|file',
            'status_image_banner_three'=>'max:2'
        ];

        $validatedData = $request->validate($rules);
        

        $validatedData['status_image_banner_three'] = $request->status_image_banner_three == true ? '1' : '0';    
            
        if($request->file('image_banner_three')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image_banner_three'] = $request->file('image_banner_three')->store('img-banner-three');
        }      
        BannerThree::Where('id',$id)
        ->update($validatedData);
        return redirect('admin/banner-three')->with('message','Berhasil menambah Data Banner Three');

    }
    public function destroy(BannerThree $BannerThree)
    {
        Storage::delete($BannerThree->image_banner_three);
        
        BannerThree::destroy($BannerThree->id);
        return redirect('admin/banner-three')->with('message','Berhasil Hapus Data Banner Three');

    }
}
