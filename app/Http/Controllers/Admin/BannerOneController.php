<?php

namespace App\Http\Controllers\Admin;

use App\Models\BannerOne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BannerOneController extends Controller
{
    public function index()
    {
        $data = BannerOne::latest()->get();
        return view('admin.banner.one.index',compact('data'));
    }
    public function create()
    {
        return view('admin.banner.one.create');
    }
    public function store(Request $request)
    {
        $image_banner_One_1 = $request->file('image_banner_One_1')->store('img-banner-one');
        $image_banner_One_2 = $request->file('image_banner_One_2')->store('img-banner-one');
        
        $data =  new BannerOne;
       $data->image_banner_One_1 = $image_banner_One_1;
       $data->image_banner_One_2 = $image_banner_One_2;
       $data->status_image_banner_One = $request->status_image_banner_One == true ? '1' : '0';
       $data->save();
       return redirect('admin/banner-one')->with('message','Gambar 1 Dan 2 Berhasil Di Tambahkan');

    }
    public function edit($id)
    {
        $data = BannerOne::find($id);
        return view('admin.banner.one.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $rules=[       
            'image_banner_One_1'=>'image|file',
            'image_banner_One_2'=>'image|file',
            'status_image_banner_One'=>'max:2'
        ];

        $validatedData = $request->validate($rules);
        

        $validatedData['status_image_banner_One'] = $request->status_image_banner_One == true ? '1' : '0';    
            
        if($request->file('image_banner_One_1')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image_banner_One_1'] = $request->file('image_banner_One_1')->store('img-banner-one');
        }
        if($request->file('image_banner_One_2')){
            if($request->oldImage){
                Storage::delete($request->oldImage1);
            }
            $validatedData['image_banner_One_2'] = $request->file('image_banner_One_2')->store('img-banner-one');
        }
        BannerOne::Where('id',$id)
        ->update($validatedData);

       return redirect('admin/banner-one')->with('message','Gambar 1 Dan 2 Berhasil Di Update');
    }
    public function destroy(Banner $Banner)
    {
        
        Storage::delete($Banner->image_banner_One_1);
        Storage::delete($Banner->image_banner_One_2);
        
        BannerOne::destroy($Banner->id);

        if (!$Banner = BannerOne::find($Banner)) {
            abort('404');
        }
        return redirect('admin/banner-one')->with('message','Gambar 1 Dan 2 Berhasil Di Hapus');

    }
}
