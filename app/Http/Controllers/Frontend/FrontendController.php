<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status','0')->get();
        $productTerbaru = Product::where('trending','1')->latest()->take(20)->get();
        $yang_mungkin_anda_suka = Product::inRandomOrder()->take(20)->get();       
        $category = Category::where('status','0')->inRandomOrder()->get();
        $tanggalHariIni = Carbon::now()->format('d-m-y');
        $productHariIni = Product::whereDay('created_at', $tanggalHariIni)->count();
        return view('frontend.index',compact('sliders','productTerbaru','yang_mungkin_anda_suka','category','productHariIni'));
    }

    public function categories()
    {
        $categories = Category::where('status','0')->get();
        return view('frontend.collections.category.index',compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug',$category_slug)->first();
        if ($category) {
            return view('frontend.collections.products.index',compact('category'));
        }else{
            return redirect()->back();
        }
    }

    public function productView(string $category_slug, string $product_slug)
    {
        $category = Category::where('slug',$category_slug)->first();
        if ($category) {
            
            $product = $category->products()->where('slug',$product_slug)->where('status','0')->first();
            if($product)
            {
            return view('frontend.collections.products.view',compact('product','category'));
        }else{
            return redirect()->back();
        }
            }else{
                return redirect()->back();
            }
    }

    public function ProductTerbaru()
    {
            $productTerbaru = Product::latest()->take(20)->get();
            return view('frontend.product-terbaru',compact('productTerbaru'));
    }

    public function thankyou()
    {
        return view('frontend.thank-you');
    }
    
    public function search(Request $request)
    {
        if ($request->search) {
                $searchProduct = Product::where('name','LIKE','%'.$request->search.'%')->latest()->paginate(15);
                return view('frontend.pages.search',compact('searchProduct'));
        } else {
          return redirect()->back()->with('message','Tidak Di Temukan produk Yang Anda cari');
        }
        
    }
}
