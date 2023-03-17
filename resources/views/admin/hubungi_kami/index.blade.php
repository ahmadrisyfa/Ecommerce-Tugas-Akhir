@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))        
        <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif 
<div class="card" style="padding:30px">
    <div class="row">
        @foreach ($data as $value)            
            <div class="col-md-6" style="margin-bottom:20px">
                <div class="card text-center">
                    <div class="card-header" style="font-weight:bold">
                    Message
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">{{ $value->user->name }}</h5>
                    <p class="card-text">{{Illuminate\Support\Str::of($value->comment)->words(20)}}</p>
                    <a href="{{url('admin/hubungi-kami/'.$value->id)}}" class="btn btn-primary">View</a>
                    </div>
                    <div class="card-footer text-muted" style="font-weight:bold">
                        {{ $value->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>     
</div>

    </div>
</div>
@endsection