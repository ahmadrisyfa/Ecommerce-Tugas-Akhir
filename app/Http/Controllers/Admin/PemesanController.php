<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Mail\InvoiceOrderMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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
    public function ViewInvoice(int $id_pemesan)
    {
     $pemesan = Order::findOrFail($id_pemesan);
     return view('admin.invoice.generate-invoice',compact('pemesan'));
    }
    public function generateInvoice(int $id_pemesan)
    {
        $pemesan = Order::findOrFail($id_pemesan);
        $data = ['pemesan' => $pemesan];
        $pdf = Pdf::loadView('admin.invoice.generate-invoice', $data);
        $todayDate = Carbon::now()->format('d-m-Y');
        return $pdf->download('invoice-'.$pemesan->id.'-'.$todayDate.'.pdf');
    }

    
    public function InvoiceEmail(int $id_pemesan)
    {
        try {
            // Ambil data pemesan
            $pemesan = Order::findOrFail($id_pemesan);

            // Ambil data pesanan (contoh: detail order terkait)
            $order = $pemesan->OrderItem;  // Sesuaikan dengan relasi model Anda

            // Kirim email dengan pemesan dan order
            Mail::to($pemesan->email)->send(new InvoiceOrderMailable($pemesan, $order));

            return redirect('admin/pemesan/'.$id_pemesan)->with('message', 'Invoice Mail has been sent to ' . $pemesan->email);
        } catch (\Exception $e) {
            return redirect('admin/pemesan/'.$id_pemesan)->with('message', 'Silakan coba lagi');
        }
    }

}  
