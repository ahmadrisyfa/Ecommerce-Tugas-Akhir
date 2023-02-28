<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\ProfileUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('frontend.pages.profile');
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'  =>['required','string'],
            'phone'  =>['required','string'],
            'pincode'  =>['required','string'],
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
            'pincode'=> $request->pincode,
            'address'=> $request->address,
        ]
        );
        return redirect()->back()->with('message','Berhasil Mengedit Profil Anda');
    }

    public function passwordCreate()
    {
        return view('frontend.pages.ganti-password');
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
}
