<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Product;
use App\Models\ProfileUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {

        $product = Product::inRandomOrder()->take('15')->get();
        return view('frontend.pages.profile',compact('product'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'  =>['required','string'],
            'phone'  =>['required','string'],
            // 'pincode'  =>['required','string'],
            'address'  =>['required','string','max:499'],

        ]);
      $user = User::findOrFail(Auth::user()->id);
      $user->update([
        'name' => $request->name
      ]);
      $user->userDetail()->updateOrCreate(
        [
            'user_id' => $user->id,
        ],
        [
            'phone'=> $request->phone,
            // 'pincode'=> $request->pincode,
            'address'=> $request->address,
        ]
        );
        return redirect()->back()->with('message','Berhasil Mengedit Profil Anda');
    }

    public function passwordCreate()
    {
        $product = Product::inRandomOrder()->take('15')->get();

        return view('frontend.pages.ganti-password',compact('product'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password_lama' => ['required','string','min:8'],
            'password' => ['required','string','min:8','confirmed']
        ]);

        $currentpasswordstatus = Hash::check($request->password_lama, auth()->user()->password);
        if($currentpasswordstatus){

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('message','Password Berhasil Di Update');
        }else{
            return redirect()->back()->with('message','Password Lama Anda Salah');
        }
    }
    public function changeProfilePicture(Request $request){
        $user = User::find(auth('web')->id());
        $path = 'fotoprofil/';
        $file = $request->file('file');
        $old_picture = $user->getAttributes()['picture'];
        $file_path = $path.$old_picture;
        $new_picture_name = 'AIMG'.$user->id.time().rand(1,100000).'.jpg';

        if ($old_picture != null && File::exists(public_path($file_path))){
            File::delete(public_path($file_path));
        }
        $upload = $file->move(public_path($path), $new_picture_name);
        if($upload){
            $user->update([
                'picture'=>$new_picture_name
            ]);
            return response()->json(['status'=>1, 'msg'=>'Foto Profil Berhasil Di Update! Refresh Untuk melihat Hasil!']);
        }else{
            return response()->json(['status'=>0,'Foto Profil Gagal Diperbarui!']);
        }
    }
}
