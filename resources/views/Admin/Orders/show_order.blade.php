
@extends('Admin.admin_dashboard')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Order Details</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <th>User ID</th>
                            <td>{{ $order->user_id }}</td>
                        </tr>
                        <tr>
                            <th>Employee ID</th>
                            <td>{{ $order->employee_id }}</td>
                        </tr>
                        <tr>
                            <th>Total Amount</th>
                            <td>{{ $order->total_amount }}</td>
                        </tr>
                        {{-- Add other order details as needed --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
