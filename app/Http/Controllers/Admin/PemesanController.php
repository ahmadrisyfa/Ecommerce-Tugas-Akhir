<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class PemesanController extends Controller
{
    public function index(Request $request)
    {
        $tanggal_hari_ini = Carbon::now()->format('y-m-d');
        $pemesan = Order::when($request->date != null, function ($q) use ($request){
            return $q->whereDate('created_at', $request->date);
        },function ($q) use ($tanggal_hari_ini){
            return $q->whereDate('created_at', $tanggal_hari_ini);
        })
        ->when($request->status != null, function ($q) use ($request){
            return $q->where('status_message', $request->status);
        })
        ->paginate(10);
        $pemesan->appends($request->all());
               return view('admin.pemesan.index',compact('pemesan'));
    }
    public function show($id_pemesan)
    {
        $pemesan = Order::where('id',$id_pemesan)->first();
        if ($pemesan) {
            return view('admin.pemesan.view',compact('pemesan'));
        }
        else {
            return redirect('admin/orders')->with('message','Tidak Ada Pesanan Id tersebut');
        }
        
    }
    public function update(int $id_pemesan, Request $request)
    {
        $pemesan = Order::where('id',$id_pemesan)->first();
        if ($pemesan) {
            $pemesan->update([
                'status_message' => $request->order_status
            ]);
            return redirect('admin/pemesan/'.$id_pemesan)->with('message','Status Pesanan Berhasil Di Update');

        } else {
            return redirect('admin/pemesan/'.$id_pemesan)->with('message','Tidak Ada Pesanan Id tersebut');
        }
    }
}
