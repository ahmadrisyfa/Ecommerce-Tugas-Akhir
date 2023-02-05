@extends('layouts.app')
@section('title','My Orders')
@section('content')
<div class="row">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
            <li class="item-link"><span>My Orders</span></li>
        </ul>
    </div>
        <div class="card-body">
            <h4 class="mb-4">My Orders</h4>
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
                        @forelse ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->tracking_no }}</td>
                                <td>{{ $order->fullname }}</td>
                                <td>{{ $order->payment_mode }}</td>
                                <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                <td>{{ $order->status_message }}</td>
                                <td><a href="{{ url('/orders/'.$order->id) }}" class="btn btn-primary">View</a></td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak Ada Riwayat Order</td>
                            </tr>
                        @endforelse
                    </tbody>
                    </table>
                <div>
                    {{ $orders->links() }}
                </div>
                </div>
            </div>
</div>

@endsection