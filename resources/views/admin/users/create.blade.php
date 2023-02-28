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
                <h3>Add Users</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/users/create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>  
                        <div class="col-md-12 mb-3">
                            <label for="description">Email</label>
                            <input type="email" class="form-control" value="{{ old('email') }}" name="email">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>   
                        <div class="col-md-12 mb-3">
                            <label for="title">Password</label>
                            <input type="password" class="form-control" value="{{ old('password') }}" name="password">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> 
                        <div class="col-md-12 mb-3">
                            <label style="padding-bottom: 5px;font-weight:300">Select Peran</label>
                            <select name="role_as" id="role_as" class="form-select">
                                <option disabled selected style="font-weight: bold;text-align:center">Select Peran</option>
                                <option value="0" @if (old('role_as') == "0") {{ 'selected' }} @endif>User</option>
                                <option value="1" @if (old('role_as') == "1") {{ 'selected' }} @endif>Admin</option>
                            </select>
                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>  
                                                                                      
                        <div class="py-2">
                            <a href="{{ url('admin/users') }}" style="font-weight:bold;color:#2f2d2d" class="btn btn-primary"> Back</a>
                            <button style="font-weight:bold;color:#2f2d2d" class="btn btn-success" type="submit">Submit</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection