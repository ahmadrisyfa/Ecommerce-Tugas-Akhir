<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                'max:255',
                'email',
                'unique:users'
            ],
            'password' => [
                'required',
                'string',
                'min:6'
            ],
            'role_as' => [
                'required',
                'integer',
            ],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as,
        ]);
        return redirect('/admin/users')->with('message','Berhasil Menambah Data Users');
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.users.edit',compact('users'));
    }
    public function update(Request $request,$id)
    {
        $validasi = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255'
            ],        
            'password' => [
                'required',
                'string',
                'min:6'
            ],
            'role_as' => [
                'required',
                'integer',
            ],
        ]);

        User::findOrFail($id)->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as,
        ]);
        return redirect('/admin/users')->with('message','Berhasil Mengedit Data Users');
    }
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect('admin/users')->with('message','Berhasil Menghapus Data user');
    }
}
