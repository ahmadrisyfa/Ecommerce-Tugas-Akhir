@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Users List
                    <a href="{{ url('admin/users/create') }}" class="btn btn-primary btn-sm float-end" style="font-weight: bold;color:#F2F2F2"><span class="mdi mdi-plus-circle"></span>Add Users</a>
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Peran</th>   
                          <th>Action</th>                      
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $user)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>
                                  @if ($user->role_as == '1')
                                      <span style="font-weight:bold"class="btn btn-success">Admin</span>
                                  @elseif ($user->role_as == '0')
                                  <span style="font-weight:bold"class="btn btn-info">User</span>
                                  @else
                                  <span style="font-weight:bold"class="btn btn-info">None</span>                                    
                                  @endif
                                </td>
                                  <td>
                                      <a href="{{ url('admin/users/'.$user->id.'/edit') }}"  style="font-weight:bold" class="btn btn-primary"><span class="mdi mdi-lead-pencil"></span> Edit</a>
                                      <a href="{{ url('admin/users/'.$user->id.'/delete') }}"  onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"   style="font-weight:bold" class="btn btn-danger"><span class="mdi mdi-delete-forever"></span> Hapus</a>
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