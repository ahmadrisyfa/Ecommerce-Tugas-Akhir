@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">

        @if (session('message'))        
            <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif 
        <div class="card">
            <div class="card-header">
                <h3>Profile Anda        
                </h3>
            </div>               
         @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li class="text-danger" style="margin-left: 10px">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
            <div class="card-body">            
                <div class="col-md-12">
                    <form action="{{ url('ganti-password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">                    
                            <div class="col-md-12 mb-3">
                                    <label for="name">Old Password</label>
                                    <input type="text" required style="margin-top:5px" class="form-control" name="password_lama">
                                    @error('password_lama')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>       
                            <div class="col-md-12 mb-3">
                                <label for="name">New Password</label>
                                <input type="text" required style="margin-top:5px" class="form-control" name="password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>         
                            <div class="col-md-12 mb-3">
                                <label for="name">Confirm Password</label>
                                <input type="text" required style="margin-top:5px" class="form-control" name="password_confirmation">
                                @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>      
                                                    
                            <div class="py-2">
                                <a href="{{ url('admin/setting') }}" style="font-weight:bold;color:#2f2d2d" class="btn btn-primary"> Back</a>
                                <button style="font-weight:bold;color:#2f2d2d" class="btn btn-success" type="submit">Submit</button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection