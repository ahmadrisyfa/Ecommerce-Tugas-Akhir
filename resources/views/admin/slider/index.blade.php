@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Sliders List
                    <a href="{{ url('admin/sliders/create') }}" class="btn btn-primary btn-sm float-end" style="font-weight: bold;color:#F2F2F2"><span class="mdi mdi-plus-circle"></span>Add Slider</a>
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($sliders as $slider)
                              <tr>
                                  <td>{{ $slider->id }}</td>
                                  <td>{{ $slider->title }}</td>
                                  <td>{{ $slider->description }}</td>
                                  <td>
                                    <img src="{{ asset("$slider->image") }}" style="width:70px;height:70px" alt="Slider Img">
                                  </td>
                                  <td>{{ $slider->status  ? 'Sembunyikan':'Tampilkan' }}</td>
                                  <td>
                                      <a href="{{ url('admin/sliders/'.$slider->id.'/edit') }}"  style="font-weight:bold" class="btn btn-success"><span class="mdi mdi-lead-pencil"></span> Edit</a>
                                      <a href="{{ url('admin/sliders/'.$slider->id.'/delete') }}"  onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"   style="font-weight:bold" class="btn btn-danger"><span class="mdi mdi-delete-forever"></span> Hapus</a>
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