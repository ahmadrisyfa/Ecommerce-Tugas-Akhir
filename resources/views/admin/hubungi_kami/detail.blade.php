@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))        
        <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif 
<div class="card" style="padding:30px">
    <div class="row">
            <div class="col-md-12" style="margin-bottom:20px">
                <div class="card text-center">
                    <div class="card-header" style="font-weight:bold">
                    Message
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">{{ $data->user->name }}</h5>
                    <p class="card-text">{{Illuminate\Support\Str::of($data->comment)->words(20)}}</p>
                    </div>
                    <div class="card-footer text-muted" style="font-weight:bold">
                        {{ $data->created_at->diffForHumans() }}
                    </div>
                    <a href="{{url('/admin/hubungi-kami')}}" class="btn btn-info">Kembali</a>
                </div>
            </div>
    </div>     
</div>

    </div>
</div>
@endsection