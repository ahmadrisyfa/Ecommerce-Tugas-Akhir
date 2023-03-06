@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))        
        <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif 
        <div class="card">
            <div class="card-header">
                <h3>Banner Two List
                    <a href="{{ url('admin/banner-two/create') }}" class="btn btn-primary btn-sm float-end" style="font-weight: bold;color:#F2F2F2"><span class="mdi mdi-plus-circle"></span>Add Banner Two</a>
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Image</th>
                          <th>Status</th>
                          <th>Action</th>                      
                        </tr>
                      </thead>
                      <tbody>                    
                          @foreach ($data as $value)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>                    
                                  <td>
                                  <img src="{{ asset('storage/'.$value->image_banner_two) }}" alt="">  
                                  </td>                                
                                  <td>{{ $value->status_image_banner_two  == '1' ? 'Sembunyikan' : 'Tampilkan' }}</td>

                                  <td>
                                      <a href="{{ url('admin/banner-two/'.$value->id.'/edit') }}"  style="font-weight:bold" class="btn btn-primary"><span class="mdi mdi-lead-pencil"></span> Edit</a>
                                      <a href="{{ url('admin/banner-two/'.$value->id.'/delete') }}"  onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"   style="font-weight:bold" class="btn btn-danger"><span class="mdi mdi-delete-forever"></span> Hapus</a>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection