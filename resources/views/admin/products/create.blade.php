@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
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
                <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color-tab-pane" type="button" role="tab" aria-controls="color-tab-pane" aria-selected="false">Product Color</button>
                    </li>               
                </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option disabled selected style="font-weight: bold;">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ (collect(old('category_id'))->contains($category->id)) ? 'selected':'' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Product Name</label>
                            <input type="text" value="{{ old('name')}}" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Product Slug</label>
                            <input type="text" name="slug" value="{{ old('slug')}}" id="slug" class="form-control">
                        </div>
                        <div class="mb-3">
                                <label style="padding-bottom: 5px;font-weight:300">Select Brand</label>
                                <select name="brand" id="brand" class="form-control">
                                    <option disabled selected style="font-weight: bold;">Select Brand</option>
                                    @foreach ($brands as $Brand)
                                        <option value="{{ $Brand->name }}" {{ (collect(old('brand'))->contains($Brand->name)) ? 'selected':'' }}>{{ $Brand->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Small Description (500 words)</label>
                            <textarea type="text" name="small_description" id="small_description" class="form-control" rows="4">{{ old('small_description')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Description</label>
                            <textarea type="text" name="description" id="description" class="form-control" rows="4">{{ old('description')}}</textarea>
                        </div>

                    </div>
                    <div class="tab-pane fade border p-3" id="seotags-tab-pane" role="tabpanel" aria-labelledby="seotags-tab" tabindex="0">

                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Meta Title</label>
                            <input type="text" autofocus name="meta_title" value="{{ old('meta_title')}}" id="meta_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Meta Description</label>
                            <textarea type="text" name="meta_description" id="meta_description" class="form-control" rows="4">{{ old('meta_description')}}</textarea>
                        </div>  <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Meta Keyword</label>
                            <textarea type="text" name="meta_keyword"  id="meta_keyword" class="form-control" rows="4">{{ old('meta_keyword')}}</textarea>
                        </div>

                    </div>
                    <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Original Price</label>
                                    <input type="text" autofocus name="original_price" value="{{ old('original_price')}}" id="original_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Selling Price</label>
                                    <input type="text" name="selling_price" value="{{ old('selling_price')}}" id="selling_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Quantity</label>
                                    <input type="number" name="quantity" value="{{ old('quantity')}}" id="quantity" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Trending</label>
                                    <input type="checkbox" name="trending" id="trending" style="width:30px;height:30px">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label style="padding-bottom: 5px;font-weight:300">Status</label>
                                    <input type="checkbox" name="status"  id="status" style="width:30px;height:30px">
                                </div>
                            </div>
                        </div>
                        
                    </div>            
                    <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <div class="mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Upload Product Images</label>
                            <input type="file" multiple name="image[]" id="image" class="form-control">
                        </div>
                    </div>
                    <div class="tab-pane fade border p-3" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">
                        <div class="mb-3">
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