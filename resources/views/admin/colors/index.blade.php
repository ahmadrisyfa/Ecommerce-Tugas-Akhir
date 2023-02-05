@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Colors List
                    <a href="{{ url('admin/colors/create') }}" class="btn btn-primary btn-sm float-end" style="font-weight: bold;color:#F2F2F2"><span class="mdi mdi-plus-circle"></span>Add Color</a>
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Color Name</th>
                          <th>Color Code</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($colors as $color)
                              <tr>
                                  <td>{{ $color->id }}</td>
                                  <td>{{ $color->name }}</td>
                                  <td>{{ $color->code }}</td>
                                  <td>{{ $color->status  ? 'Sembunyikan':'Tampilkan' }}</td>
                                  <td>
                                      <a href="{{ url('admin/colors/'.$color->id.'/edit') }}"  style="font-weight:bold" class="btn btn-success"><span class="mdi mdi-lead-pencil"></span> Edit</a>
                                      <a href="{{ url('admin/colors/'.$color->id.'/delete') }}"  onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"   style="font-weight:bold" class="btn btn-danger"><span class="mdi mdi-delete-forever"></span> Hapus</a>
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