<?php

namespace App\Http\Livewire\Frontend\Product;
use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product, $prodColorSelectedQuantity, $quantityCount = 1, $productColorId;


    public function addToWishlists($productId)
    {
        //   dd($productId);
        if(Auth::check())
        {
            if(Wishlists::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists())
            {
                session()->flash('message','Already Added To Wishlist');
                $this->dispatchBrowserEvent('message',[
                    'text' => 'Already Added To Wishlist',
                    'type' => 'warning',
                    'status' => 409
                ]);
                return false;
            }
            else{

                $wishlist = Wishlists::create([
                    'user_id' => auth()->user()->id,
                    'product_id' =>$productId
                ]);
                $this->emit('wishlistupdate');
                session()->flash('message','Wishlist Added Successfully');
                $this->dispatchBrowserEvent('message',[
                    'text' => 'Wishlist Added Successfully',
                    'type' => 'success',
                    'status' => 200
                ]);
            }
        }
        else{
            session()->flash('message','Silahkan Login Untuk Melanjutkan');
            $this->dispatchBrowserEvent('message',[
                'text' => 'Silahkan Login Untuk Melanjutkan',
                'type' => 'info',
                'status' => 401
            ]);
            return false;
        }
    }
    public function colorSelected($productColorId)
    {
        // dd($productColorId);  
        $this->productColorId = $productColorId;
        $productColor = $this->product->productColors()->where('id',$productColorId)->first();
        $this->prodColorSelectedQuantity = $productColor->quantity;

        if($this->prodColorSelectedQuantity == 0){
            $this->prodColorSelectedQuantity = 'outOfStock';
        }
    }

    public function addToCart(int $productId)
    {
        if (Auth::check()) {
            
            if ($this->product->where('id',$productId)->where('status','0')->exists()) 
            {
                #check for product Color Quantity and add to cart
            if ($this->product->productColors()->count() > 1) {
              if ($this->prodColorSelectedQuantity != NULL) {
                if (Cart::where('user_id',auth()->user()->id)
                    ->where('product_id',$productId)
                    ->where('product_Color_id',$this->productColorId)
                    ->exists())
                    {
                        $this->dispatchBrowserEvent('message',[
                            'text' => 'Product AlReady Added',
                            'type' => 'warning',
                            'status' => 404
                        ]);
                    }
                    else{                

                $productColor = $this->product->productColors()->where('id',$this->productColorId)->first();
                if($productColor->quantity > 0)
                {
                if ($productColor->quantity > $this->quantityCount) {
                    Cart::create([
                        'user_id' => auth()->user()->id,
                        'product_id' => $productId,
                        'product_color_id' => $this->productColorId,
                        'quantity' => $this->quantityCount
                                ]);

                    $this->emit('CartAddedUpdated');
                    $this->dispatchBrowserEvent('message',[
                    'text' => 'Product Added To Cart',
                    'type' => 'success',
                    'status' => 200
                ]);
                
                } else {
                    $this->dispatchBrowserEvent('message',[
                        'text' => 'Warna Product Yang tersedia Hanya '.$productColor->quantity.'',
                        'type' => 'warning',
                        'status' => 404
                    ]);
                }
            }else{
                $this->dispatchBrowserEvent('message',[
                    'text' => 'Out Of Stock',
                    'type' => 'warning',
                    'status' => 404
                ]);
            }
            }
            } else {
                $this->dispatchBrowserEvent('message',[
                    'text' => 'Select Your Product Color',
                    'type' => 'info',
                    'status' => 401
                ]);
              }
              
            }
             else {  
                if (Cart::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists()) {
                    $this->dispatchBrowserEvent('message',[
                        'text' => 'Product AlReady Added',
                        'type' => 'warning',
                        'status' => 404
                    ]);
                } else {
                  
                        
                    if ($this->product->quantity > 0) {

                        if ($this->product->quantity > $this->quantityCount) {
                            Cart::create([
                            'user_id' => auth()->user()->id,
                            'product_id' => $productId,
                            'quantity' => $this->quantityCount
                            ]);
                            
                            $this->emit('CartAddedUpdated');
                            $this->dispatchBrowserEvent('message',[
                            'text' => 'Product Added To Cart',
                            'type' => 'success',
                            'status' => 200
                            ]);
                        } 
                        else {
                            $this->dispatchBrowserEvent('message',[
                            'text' => 'Only '.$this->product->quantity.' Quantity Available',
                            'type' => 'warning',
                            'status' => 404
                                                        ]);
                        }
                    } 
                    else {
                        $this->dispatchBrowserEvent('message',[
                                                        'text' => 'Out Of Stock',
                                                        'type' => 'warning',
                                                        'status' => 404
                                                    ]);
                    }
                }
              
            } 
        }
            else {
                $this->dispatchBrowserEvent('message',[
                                    'text' => 'Product Does Not Exists',
                                    'type' => 'warning',
                                    'status' => 404
                                ]);
            }        
        } 
        else {
            $this->dispatchBrowserEvent('message',[
                'text' => 'Silahkan Login Untuk Menambahkan Ke Keranjang',
                'type' => 'info',
                'status' => 401
            ]);
        }
        
    }
    public function incrementQuantity()
    {
        if($this->quantityCount < 200){
        $this->quantityCount++;
        }
    }

    public function decrementQuantity()
    {
        if($this->quantityCount >  1){
            $this->quantityCount--;
            }
    }

    public function mount($category,$product)
    {
        $this->category = $category;
        $this->product = $product;

    } 

    public function render()
    {
        
        $this->productspopular = Product::inRandomOrder()->where('id', '!=', $this->product->id)->take('5')->get();

        $this->ProductTerkait = Product::inRandomOrder()->where('id', '!=', $this->product->id)->take('15')->get();
        return view('livewire.frontend.product.view',[
            'category' => $this->category,
            'product' => $this->product,
        ]);
    }
}
