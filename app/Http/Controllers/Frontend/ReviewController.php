<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function review(Request $request)
    {
       $data = new Review;
       $data->user_id = auth()->user()->id;
       $data->product_id = $request->product_id;
       $data->ranting = $request->ranting;
       $data->comment = $request->comment;
       $data->save();
       return redirect()->back()->with('message','Berhasil Menambahkan Review Anda');
    }
}
