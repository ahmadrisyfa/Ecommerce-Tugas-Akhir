<?php

namespace App\Http\Livewire\Admin\OnSale;

use Livewire\Component;
use App\Models\OnSale;
class Index extends Component
{
    public $sale_date;
    public $status;
    public function mount()
    {
        $sale = OnSale::find(1);
        $this->sale_date = $sale->sale_date;
        $this->status = $sale->status;

    }
    public function updateSale()
    {
        $sale = Onsale::find(1);
        $sale->sale_date = $this->sale_date;
        $sale->status = $this->status;
        $sale->save();
        session()->flash('message','On Sale Berhasil Di Tambah');


    }
     public function render()
    {
        return view('livewire.admin.on-sale.index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
