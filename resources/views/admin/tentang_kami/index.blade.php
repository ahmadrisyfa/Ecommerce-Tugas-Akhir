@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))        
        <p class="alert alert-success text-center">{{ session('message') }}</p>
        @endif 
        <div class="card">
            <div class="card-header">
                <h3>Anggota List
                    <a href="{{ url('admin/tentang-kami/create') }}" class="btn btn-primary btn-sm float-end" style="font-weight: bold;color:#F2F2F2"><span class="mdi mdi-plus-circle"></span>Add Anggota</a>
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Position</th>
                          <th>status</th>
                          <th>Action</th>                      
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $value)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>   
                                  <td>{{ $value->nama }}</td>                 
                                  <td>
                                  <img src="{{ asset('storage/'.$value->image) }}" alt="">  
                                  </td>                                 
                                  <td>{{ $value->position }}</td>                                  
                                  <td>{{ $value->status  == '1' ? 'Sembunyikan' : 'Tampilkan' }}</td>

                                  <td>
                                      <a href="{{ url('admin/tentang-kami/'.$value->id.'/edit') }}"  style="font-weight:bold" class="btn btn-primary"><span class="mdi mdi-lead-pencil"></span> Edit</a>
                                      <a href="{{ url('admin/tentang-kami/'.$value->id.'/delete') }}"  onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"   style="font-weight:bold" class="btn btn-danger"><span class="mdi mdi-delete-forever"></span> Hapus</a>
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