@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">   
                @if(session('message'))
                <h6 class="alert alert-success">{{ session('message') }}, {{ auth()->user()->name }}</h6>
                @endif      
                <div class="me-md-3 me-xl-5">
                  <h2>Dashboard,</h2>
                  <p class="mb-md-0">Your Analytics dashboard Template.</p>
                  <hr>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3">
                      <label>Total Products</label>
                      <h1>{{ $totalProducts }}</h1>
                      <a href="{{ url('/admin/products') }}" class="text-white">View</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card card-body bg-info text-white mb-3">
                      <label>Total Category</label>
                      <h1>{{ $totalCategory }}</h1>
                      <a href="{{ url('/admin/category') }}" class="text-white">View</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card card-body bg-warning text-white mb-3">
                      <label>Total Brands</label>
                      <h1>{{ $totalBrands }}</h1>
                      <a href="{{ url('/admin/brands') }}" class="text-white">View</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card card-body bg-success text-white mb-3">
                      <label>Total Semua Users</label>
                      <h1>{{ $totalallusers }}</h1>
                      <a href="{{ url('/admin/users') }}" class="text-white">View</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3">
                      <label>Total Users</label>
                      <h1>{{ $totalusers }}</h1>
                      <a href="{{ url('/admin/users') }}" class="text-white">View</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card card-body bg-info text-white mb-3">
                      <label>Total Admin</label>
                      <h1>{{ $totalAdmin }}</h1>
                      <a href="{{ url('/admin/users') }}" class="text-white">View</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card card-body bg-warning text-white mb-3">
                      <label>Total Order</label>
                      <h1>{{ $totalorder }}</h1>
                      <a href="{{ url('/admin/pemesan') }}" class="text-white">View</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card card-body bg-success text-white mb-3">
                      <label>Total Order Hari Ini</label>
                      <h1>{{ $TotalOrderHariIni }}</h1>
                      <a href="{{ url('/admin/pemesan') }}" class="text-white">View</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3">
                      <label>Total Order Bulan Ini</label>
                      <h1>{{ $TotalOrderBulanIni }}</h1>
                      <a href="{{ url('/admin/pemesan') }}" class="text-white">View</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card card-body bg-info text-white mb-3">
                      <label>Total Order Tahun Ini</label>
                      <h1>{{ $TotalOrderTahunIni }}</h1>
                      <a href="{{ url('/admin/pemesan') }}" class="text-white">View</a>
                    </div>
                  </div>
                </div>
    </div>
</div>
@endsection