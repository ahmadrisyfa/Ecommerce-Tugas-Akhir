<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #{{ $pemesan->id }}</title>

    <style>
        *{
            color: black
        }
        .bg-blue * {
            color: inherit;
        }
        
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff !important;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Yukoding</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: #yukoding-{{ $pemesan->id }}</span> <br>
                    <span>Date: {{ date('d / m / Y') }}</span> <br>
                    <span>Zip code : 8801</span> <br>
                    <span>Address: Jl. Sagan No.1, Terban, Gondokusuman, Kota Yogyakarta, DI Yogyakarta </span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td>{{ $pemesan->id }}</td>

                <td>Full Name:</td>
                <td>{{ $pemesan->fullname }}</td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td>{{ $pemesan->tracking_no }}</td>

                <td>Email Id:</td>
                <td>{{ $pemesan->email }}</td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td>{{ $pemesan->created_at->format('d-m-Y h:i A') }}</td>

                <td>Phone:</td>
                <td>{{ $pemesan->phone }}</td>
            </tr>
            <tr>
                <td>Payment Mode:</td>
                <td>{{ $pemesan->payment_mode }}</td>

                <td>Address:</td>
                <td>{{ $pemesan->address }}</td>
            </tr>
            <tr>
                <td colspan="2">Order Status:</td>
                <td colspan="2">{{ $pemesan->status_message }}</td>

                {{-- <td>Pin code:</td> --}}
                {{-- <td>{{ $pemesan->pincode }}</td> --}}
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalsemuanya = 0;
            @endphp
            @foreach ($pemesan->OrderItem as $value)
                <tr>
                    <td width="10%">{{ $value->id }}</td>                   
                    <td>
                        {{ $value->product->name }}
                        @if ($value->productColor)
                            @if ($value->productColor->color)
                                -<span style="color:#FF2832"> With Color: {{ $value->productColor->color->name }}</span>
                            @endif  
                        @endif
                    </td>
                    <td width="10%">@currency($value->price)</td>
                    <td width="10%">{{ $value->quantity }}</td>
                    <td width="15%"style="font-weight: bold">@currency($value->quantity * $value->price)</td>
                    @php
                    $totalsemuanya += $value->quantity * $value->price;
                @endphp
                </tr>                      
            @endforeach 
            <tr>
                <td colspan="4" style="font-weight: bold" class="total-heading">Total Semuanya - <small>Inc. All Vat/tax</small>:</td>
                <td colspan="1" style="font-weight: bold" class="total-heading">@currency($totalsemuanya)</td>
                            
            </tr>                
            
        </tbody> 
    </table>

    <br>
    <p class="text-center">
        Thank your for shopping with Yukoding Store
    </p>

</body>
</html>