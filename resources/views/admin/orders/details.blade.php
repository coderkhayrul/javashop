@extends('admin.layouts.master')

@section('page')
Product Order Details
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Order Details</h4>
                    <p class="category">Order details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Quantity</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> {{ $order->id }} </td>
                                <td> {{ $order->date }} </td>
                                <td> {{ $order->orderItems[0]->quantity }} </td>
                                <td> {{ $order->address }} </td>
                                <td> ${{ $order->orderItems[0]->price }} </td>
                                <td>
                                    @if ($order->status == 1)
                                    <span class="label label-success">Confirmed</span>
                                    @else
                                    <span class="label label-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($order->status == 1)
                                        {{ link_to_route('order.pending', '', $order->id, ['class' => 'btn btn-sm btn-warning ti-close']) }}
                                    @else
                                        {{ link_to_route('order.confirm', '', $order->id, ['class' => 'btn btn-sm btn-success ti-check']) }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">User Details</h4>
                    <p class="category">User details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ $order->user->id }}</th>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>{{ $order->user->name }}</th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>{{ $order->user->email }}</th>
                        </tr>
                        <tr>
                            <th>Registered At</th>
                            <th>{{ $order->user->created_at->diffForHumans() }}</th>
                        </tr>
                        </thead>
                        {{-- <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dakota Rice</td>
                                <td>Samsung Galaxy</td>
                                <td>2</td>
                                <td>7/433,USA</td>
                                <td>7/433,USA</td>
                            </tr>
                        </tbody> --}}
                    </table>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">Product Details</h4>
                    <p class="category">Product details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{ $order->products[0]->id }}</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>{{ $order->products[0]->name }}</th>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <th>{{ $order->products[0]->price }}</th>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <th><a href="{{ asset('uploads/'.$order->products[0]->image) }}"><img src="{{ asset('uploads/'.$order->products[0]->image) }}" alt="" class="img-thumbnail" style="width: 100px"></a></th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dakota Rice</td>
                                <td>Samsung Galaxy</td>
                                <td>2</td>
                                <td>7/433,USA</td>
                                <td>7/433,USA</td>
                            </tr>
                        </tbody> --}}
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
