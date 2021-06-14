@extends('admin.layouts.master')

@section('page')
Products Order
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- SESSION START -->
        @include('admin.layouts.message')
        <!-- SESSION END -->
        <div class="card">
            <div class="header">
                <h4 class="title">Orders</h4>
                <p class="category">List of all orders</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        {{-- <th>Address</th> --}}
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>
                                @foreach ($order->products as $item)
                                    {{ $item->name }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ($order->OrderItems as $item)
                                    {{ $item->quantity }}
                                @endforeach
                            </td>
                            <td>
                                @if ($order->status == 1)
                                <span class="label label-success">Confirmed</span>
                                @else
                                <span class="label label-warning">Pending</span>
                                @endif
                            </td>
                            <td>
                                {{-- <button class="btn btn-sm btn-success ti-close"
                                        title="Cancel Order"></button> --}}
                                        @if ($order->status == 1)
                                            {{ link_to_route('order.pending', '', $order->id, ['class' => 'btn btn-sm btn-warning ti-close']) }}
                                        @else
                                            {{ link_to_route('order.confirm', '', $order->id, ['class' => 'btn btn-sm btn-success ti-check']) }}
                                        @endif
                                        {{ link_to_route('orders.show', '', $order->id, ['class' => 'btn btn-sm btn-primary ti-view-list-alt']) }}

                                {{-- <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</div>
@endsection
