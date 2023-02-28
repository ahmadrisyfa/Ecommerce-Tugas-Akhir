<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ImgBottomSlider;
use App\Http\Controllers\Controller;

class imgbottomsliderController extends Controller
{
    public function index()
    {
        $sliders = ImgBottomSlider::all();
        return view('admin.slider.index',compact('sliders'));
    }
    public function create()
    {
        return view('admin.slider.create');
    }
    public function store(ImgBottomSlider $request)
    {
        $validatedData = $request->validated();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() .'.'. $ext;
            $file->move('uploads/slider/', $filename);
            $validatedData['image']  ="uploads/slider/$filename";
        }
        $validatedData['status'] = $request->status == true ? '1':'0';
        ImgBottomSlider::create([
            'title'=> $validatedData['title'],
            'description'=> $validatedData['description'],
            'image'=> $validatedData['image'],
            'status'=> $validatedData['status'],

        ]);
        return redirect('admin/sliders')->with('message','Slider Berhasil Di Tambahkan');
    }

    public function edit(ImgBottomSlider $ImgBottomSlider)
    {
        return view('admin.slider.edit',compact('slider'));
    }

    public function update(ImgBottomSlider $request,Slider $ImgBottomSlider)
    {

        $validatedData = $request->validated();
        if($request->hasFile('image')){

            $destination = $slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() .'.'. $ext;
            $file->move('uploads/slider/', $filename);
            $validatedData['image']  ="uploads/slider/$filename";
        }
        $validatedData['status'] = $request->status == true ? '1':'0';
        ImgBottomSlider::where('id',$slider->id)->update([
            'title'=> $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'] ?? $slider->image,
            'status'=> $validatedData['status']
        ]);
        return redirect('admin/sliders')->with('message','Slider Berhasil Di Update');
    }
    
    public function destroy(ImgBottomSlider $ImgBottomSlider)
    {
            if($slider->count() > 0){
              $destination = $slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
        $slider->delete();
            return redirect('admin/sliders')->with('message',' Slider Berhasil Di Hapus');
        }
        return redirect('admin/sliders')->with('message',' Slider Berhasil Di Hapus');

    }
}
