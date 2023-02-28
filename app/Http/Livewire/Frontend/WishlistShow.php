<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlists;

class WishlistShow extends Component
{

    public function removeWishlistItem(int $wishlistId)
    {
        // dd($wishlistId);
        $wishlist = Wishlists::where('user_id',auth()->user()->id)->where('id',$wishlistId)->delete();
        $this->emit('wishlistupdate');
        $this->dispatchBrowserEvent('message',[
            'text'=>'Wishlist Item Removed Sucessfull',
            'type' =>'warning',
            'status' =>200
        ]);
    }

    public function render()
    {
        $this->ProductTerkait = Product::inRandomOrder()->take('15')->get();
        $wishlist = Wishlists::where('user_id',auth()->user()->id)->latest()->get();
        return view('livewire.frontend.wishlist-show',[
            'wishlist' =>$wishlist
        ]);
    }
}
   