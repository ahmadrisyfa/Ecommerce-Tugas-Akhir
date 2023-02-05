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
                <h3>Add Category</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="slug">slug</label>
                            <input type="text" class="form-control" name="slug">
                            @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="description">description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image">image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status">status</label><br>
                            <input type="checkbox" name="status" style="width: 30px;height:30px"> Checked=Sembunyikan,UnChecked=Tampilkan
                        </div>
                        <div class="col-md-12">
                            <h4>SEO Tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="meta_title">meta title</label>
                            <input type="text" class="form-control" name="meta_title">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="meta_keyword">meta keyword</label>
                            <textarea class="form-control" name="meta_keyword" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="meta_description">meta description</label>
                            <textarea class="form-control" name="meta_description" rows="3"></textarea>
                        </div>                                               
                        <div class="py-2">
                            <a href="{{ url('admin/category') }}" style="font-weight:bold;color:#2f2d2d" class="btn btn-primary"> Back</a>
                            <button style="font-weight:bold;color:#2f2d2d" class="btn btn-success" type="submit">Submit</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection