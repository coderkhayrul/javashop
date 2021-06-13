@extends('admin.layouts.master')

@section('page')
View Products
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
        <!-- SESSION START -->
        @include('admin.layouts.message')
        <!-- SESSION END -->
        <div class="card">
            <div class="header">
                <h4 class="title">All Products</h4>
                <p class="category">List of all stock</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Desc</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>1</td>
                            <td>{{ $product->name }}</td>
                            <td>${{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img src="{{ asset('uploads/'.$product->image) }}" alt="" class="img-thumbnail" style="width: 50px"></td>
                            <td>
                                {{ Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE', ]) }}
                                {{ Form::button('', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm ti-trash', 'onclick' => 'return confirm("Are you sure you want to delete?")']) }}
                                {{ link_to_route('products.edit', '', $product->id, ['class' => 'btn btn-sm btn-info ti-pencil-alt']) }}
                                {{ link_to_route('products.show', '', $product->id, ['class' => 'btn btn-sm btn-info ti-view-list-alt']) }}
                                {{ Form::close() }}

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
