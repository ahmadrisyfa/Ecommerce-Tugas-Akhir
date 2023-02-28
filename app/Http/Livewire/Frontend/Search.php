<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Category;
class Search extends Component
{ 
    public function render()
    {
        $halo = Category::all();
        $data = Category::all();
        return view('livewire.frontend.search',compact('data'));
    }
}
