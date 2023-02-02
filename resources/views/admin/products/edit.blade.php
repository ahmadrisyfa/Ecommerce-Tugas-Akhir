@extends('layouts.admin')
@push('css')
<style>
.img-wraps {
    position: relative;
    display: inline-block;
    
    font-size: 0;
}
.img-wraps .closes {
    position: absolute;
    top: 5px;
    right: 8px;
    z-index: 100;
    /* background-color: #FFF; */
    padding: 4px 3px;
     
    color: #000;
    font-weight: bold;
    cursor: pointer;
    
    text-align: center;
    font-size: 22px;
    line-height: 10px;
    border-radius: 50%;
    border:1px solid rgb(27, 117, 177);
}
.img-wraps:hover .closes {
    opacity: 1;
}

</style>
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">

        @if (session('message'))
            <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>                    
        @endif
        
        <div class="card">
            <div class="card-header">
                <h3>Add Products</h3>
            </div>
            <div class="card-body">               
                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('admin/products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="seotags-tab" data-bs-toggle="tab" data-bs-target="#seotags-tab-pane" type="button" role="tab" aria-controls="seotags-tab-pane" aria-selected="false">Seo Tags</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">Details</button>
                    </li>     
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">Product Image</button>
                    </li> 
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="colors-tab" data-bs-toggle="tab" data-bs-target="#colors-tab-pane" type="button" role="tab">Product Colors</button>
                    </li>               
                </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option disabled selected style="font-weight: bold;">Select Category</option>
                                        @foreach ($categories as $category)
                                            @if(old('category_id',$product->category_id) == $category->id)
                                                <option value=" {{ $category->id }}" selected>{{ $category->name }} </option>
                                            @else
                                                <option value=" {{ $category->id }} ">{{ $category->name }} </option>
                                            @endif
                                        @endforeach    
                                </select>
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Product Name</label>
                            <input type="text" value="{{ old('name', $product->name)}}" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Product Slug</label>
                            <input type="text" name="slug" value="{{ old('slug', $product->slug)}}" id="slug" class="form-control">
                        </div>
                        <div class="mb-3">
                                <label style="padding-bottom: 5px;font-weight:300">Select Brand</label>
                                <select name="brand" id="brand" class="form-control">
                                        <option disabled selected style="font-weight: bold;">Select Brand</option>
                                @foreach ($brands as $brand)
                                    @if(old('brand',$product->brand) == $brand->name)
                                        <option value="{{ $brand->name }}" selected>{{ $brand->name }}</option>
                                    @else
                                        <option value=" {{ $brand->name }} ">{{ $brand->name }}</option>
                                    @endif
                                @endforeach    
                                   
                                </select>
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Small Description (500 words)</label>
                            <textarea type="text" name="small_description" id="small_description" class="form-control" rows="4">{{ old('small_description', $product->small_description)}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Description</label>
                            <textarea type="text" name="description" id="description" class="form-control" rows="4">{{ old('description', $product->description)}}</textarea>
                        </div>

                    </div>
                    <div class="tab-pane fade border p-3" id="seotags-tab-pane" role="tabpanel" aria-labelledby="seotags-tab" tabindex="0">

                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ old('meta_title', $product->meta_title)}}" id="meta_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Meta Description</label>
                            <textarea type="text" name="meta_description" id="meta_description" class="form-control" rows="4">{{ old('meta_description', $product->meta_description)}}</textarea>
                        </div>  <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Meta Keyword</label>
                            <textarea type="text" name="meta_keyword"  id="meta_keyword" class="form-control" rows="4">{{ old('meta_keyword', $product->meta_keyword)}}</textarea>
                        </div>

                    </div>
                    <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Original Price</label>
                                    <input type="text" name="original_price" value="{{ old('original_price', $product->original_price)}}" id="original_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Selling Price</label>
                                    <input type="text" name="selling_price" value="{{ old('selling_price', $product->selling_price)}}" id="selling_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Quantity</label>
                                    <input type="number" name="quantity" value="{{ old('quantity', $product->quantity)}}" id="quantity" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Trending</label>
                                    <input type="checkbox" name="trending" id="trending" {{ $product->trending == '1' ? 'checked':'' }} style="width:30px;height:30px">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Status</label>
                                    <input type="checkbox" name="status"  {{ $product->status == '1' ? 'checked':'' }} id="status" style="width:30px;height:30px">
                                </div>
                            </div>
                        </div>
                        
                    </div>            
                    <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <div class="mb-3">
                            <div class="col-md-2">

                            </div>
                            <label style="padding-bottom: 5px;font-weight:300">Upload Product Images</label>
                            <input type="file" multiple name="image[]" id="image" class="form-control">
                        </div>
                        <div>
                            @if($product->productImages)
                            <div class="row">
                                @foreach ($product->productImages as $image)
                                <div class="col-md-2">
                                    <div class="img-wraps">
                                    <a href="{{ url('admin/product-image/'.$image->id.'/delete') }}"><span class="closes" title="Delete">×</span></a>
                                        <img class="border" src="{{ asset($image->image) }}" style="max-width:180px;max-height:180px;overlow:hidden;">
                                        </div>
                                    {{-- <img src="{{ asset($image->image) }}" alt="{{ asset($image->image) }}" style="max-width:180px;max-height:180px;overlow:hidden" class="me-4 border">
                                    <a href="{{ url('admin/product-image/'.$image->id.'/delete') }}"><i class="icon-md mdi mdi-close-circle-outline"></i></a> --}}
                                </div>
                                @endforeach
                            </div>
                            @else
                                <h5>No Image Added</h5>
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane fade border p-3" id="colors-tab-pane" role="tabpanel" tabindex="0">
                        <div class="mb-3">
                            <h4>Add Product Color</h4>
                            <label style="padding-bottom: 5px;font-weight:300">Select Color</label>
                            <hr>
                            <div class="row">
                                @forelse ($colors as $colorItem)
                                <div class="col-md-3">
                                    <div class="p-2 border mb-3">
                                        Color: <input type="checkbox" name="colors[{{ $colorItem->id }}]" id="color" style="width:18px;height:18px" value="{{ $colorItem->id }}">
                                        <span style="text-transform: capitalize">{{ $colorItem->name }}</span>
                                        <br>
                                        Quantity: <input type="number" style="width:70px;border:1px solid black" name="colorquantity[{{ $colorItem->id }}]" >
                                    </div>
                                </div>
                                @empty
                                    <div class="col-md-12">
                                        <h1>No Colors Found</h1>
                                    </div>
                                @endforelse
                            
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm table-striped">
                              <thead>
                                <tr>
                                  <th>Color Name</th>
                                  <th>Quantity</th>
                                  <th>Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($product->productColors as $productcolor)                                    
                                <tr class="prod-color-tr">
                                    <td>
                                        @if ($productcolor->color)
                                        {{ $productcolor->color->name }}
                                        @else
                                        No Color Found
                                        @endif
                                    </td>
                                    <td>
                                        <div class="input-group mb-3" style="width: 150px">
                                            <input type="text" value="{{ $productcolor->quantity }}" class="productcolorQuantity form-control form-control-sm">
                                            <button type="button" value="{{ $productcolor->id }}" class="updateProductColorbtn btn btn-sm btn-primary text-white">Update</button>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button"  value="{{ $productcolor->id }}" class="deleteProductColorbtn btn btn-sm btn-danger text-white">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>     
                    </div>
                  </div>
                 <div class="py-2">
                    <a href="{{ url('admin/products') }}" style="font-weight:bold;color:#2f2d2d" class="btn btn-primary"> Back</a>
                    <button style="font-weight:bold;color:#2f2d2d" class="btn btn-success" type="submit">Submit</button>
                  </div>
                </form>


            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                $(document).on('click','.updateProductColorbtn', function () {

                    var product_id = "{{ $product->id }}";
                    var prod_color_id = $(this).val();
                    var qty = $(this).closest('.prod-color-tr').find('.productcolorQuantity').val();

                    if(qty <= 0){
                    alert('Quantity is Required');
                    return false;
                    }
                    var data ={
                        'product_id': product_id,
                        'qty': qty
                    };
                    $.ajax({
                        type: "POST",
                        url: "/admin/product-color/"+prod_color_id,
                        data: data,
                        success: function (response){
                            alert(response.message)
                        }
                    });
                });

                $(document).on('click','.deleteProductColorbtn', function () {

                    var prod_color_id = $(this).val();
                    var thisClick = $(this);

                    $.ajax({
                        type: "GET",
                        url: "/admin/product-color/"+prod_color_id+"/delete",
                        success: function (response){
                            thisClick.closest('.prod-color-tr').remove();
                            alert(response.message);
                        }
                    });

                });

            });
    </script>
@endsection 