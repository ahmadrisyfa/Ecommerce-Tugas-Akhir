@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Daftar Pemesan
                </h3>
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Cari Berdasarkan Tanggal</label>
                            <input type="date" name="date" value="{{ Request::get('date') ?? date('Y-m-d') }}" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Cari Berdasarkan Status</label>
                            <select name="status" class="form-select">
                                <option value="">Select All Status</option>
                                <option value="In Progress" {{ Request::get('status') == 'In Progress' ? 'selected': ''}}>In Progress</option>
                                <option value="Completed" {{ Request::get('status') == 'Completed' ? 'selected': ''}}>Completed</option>
                                <option value="Pending" {{ Request::get('status') == 'Pending' ? 'selected': ''}}>Pending</option>
                                <option value="Canceled" {{ Request::get('status') == 'Canceled' ? 'selected': ''}}>Canceled</option>
                                <option value="Out-For-Delivery" {{ Request::get('status') == 'Out-For-Delivery' ? 'selected': ''}}>Out For Delivery</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>Order Id</th>
                            <th>Tracking No</th>
                            <th>Username</th>
                            <th>Payment Mode</th>
                            <th>Orderes Date</th>
                            <th>Status Message</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($pemesan as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->tracking_no }}</td>
                                    <td>{{ $value->fullname }}</td>
                                    <td>{{ $value->payment_mode }}</td>
                                    <td>{{ $value->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $value->status_message }}</td>
                                    <td><a href="{{ url('/admin/pemesan/'.$value->id) }}" class="btn btn-primary" style="font-weight: bold;color:#2f2d2d"><span class="mdi mdi-eye"></span> View</a></td>
    
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak Ada Pesanan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div style="margin-top:10px">
                        {{ $pemesan->links() }}
                    </div>
                </div>
            </div>
            </div>
        </div>       
    </div>
</div>


@endsection