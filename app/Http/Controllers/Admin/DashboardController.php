<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $totalProducts = Product::count();
        $totalCategory = Category::count();
        $totalBrands = Brand::count();

        $totalallusers = User::count();
        $totalusers = User::where('role_as','0')->count();
        $totalAdmin = User::where('role_as','1')->count();

        $tanggalHariIni = Carbon::now()->format('d-m-y');
        $BulanIni = Carbon::now()->format('m');
        $TahunIni = Carbon::now()->format('Y');

        $totalorder = Order::count();
        $TotalOrderHariIni = Order::whereDay('created_at', $tanggalHariIni)->count();
        $TotalOrderBulanIni = Order::whereMonth('created_at', $BulanIni)->count();
        $TotalOrderTahunIni = Order::whereYear('created_at', $TahunIni)->count();
        return view('admin.dashboard',compact('totalProducts','totalCategory','totalBrands','totalallusers','totalusers','totalAdmin','totalorder','TotalOrderHariIni','TotalOrderBulanIni','TotalOrderTahunIni'));
    }
}
