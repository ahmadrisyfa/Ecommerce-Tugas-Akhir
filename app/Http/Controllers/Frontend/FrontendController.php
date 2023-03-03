<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\BannerOne;
use App\Models\BannerTwo;
use App\Models\BannerThree;
use App\Models\TentangKami;
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
        $banner_one = BannerOne::where('status_image_banner_One','0')->take(1)->latest()->get();
        $banner_two = BannerTwo::where('status_image_banner_two','0')->take(1)->latest()->get();
        $banner_three = BannerThree::where('status_image_banner_three','0')->take(1)->latest()->get();

        return view('frontend.index',compact('sliders','productTerbaru','yang_mungkin_anda_suka','category','productHariIni','banner_one','banner_two','banner_three'));
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

    public function TentangKami()
    {
        $data = TentangKami::all();
        return view('frontend.tentang_kami.index',compact('data'));
    }
}
