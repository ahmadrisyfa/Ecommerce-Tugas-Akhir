@extends('layouts.admin')
@section('css')
<style>
    label{
        text-transform: capitalize;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Sliders</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/sliders/create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" value="{{ old('title') }}" name="title">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>  
                        <div class="col-md-12 mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" rows="3" class="form-control"></textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>   
                        <div class="col-md-12 mb-3">
                            <label for="title">Image</label>
                            <input type="file" class="form-control" value="{{ old('image') }}" name="image">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> 
                        <div class="col-md-12 mb-3">
                            <label for="status">status</label><br>
                            <input type="checkbox" style="width: 30px;height:30px" name="status"> Checked=Sembunyikan,UnChecked=Tampilkan
                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>  
                                                                                      
                        <div class="py-2">
                            <a href="{{ url('admin/sliders') }}" style="font-weight:bold;color:#2f2d2d" class="btn btn-primary"> Back</a>
                            <button style="font-weight:bold;color:#2f2d2d" class="btn btn-success" type="submit">Submit</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection