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
                <h3>Edit Category</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/colors/'.$color->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" value="{{ $color->name }}" name="name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>  
                        <div class="col-md-12 mb-3">
                            <label for="code">code</label>
                            <input type="text" class="form-control" value="{{ $color->code }}" name="code">
                            @error('code')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>   
                        <div class="col-md-12 mb-3">
                            <label for="status">status</label><br>
                            <input type="checkbox" style="width: 30px;height:30px"  {{ $color->status ? 'checked':'' }} name="status"> Checked=Sembunyikan,UnChecked=Tampilkan
                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>  
                                                                                      
                        <div class="py-2">
                            <a href="{{ url('admin/colors') }}" style="font-weight:bold;color:#2f2d2d" class="btn btn-primary"> Back</a>
                            <button style="font-weight:bold;color:#2f2d2d" class="btn btn-success" type="submit">Submit</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection