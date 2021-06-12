@extends('admin.layouts.master')

@section('page')
    Add Product
@endsection

@section('content')
<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="card">
            <div class="header">
                <h4 class="title">Add Product</h4>
            </div>
            <div class="content">
                {!! Form::open(['route' => 'products.store']) !!}
                    {{ Form::token() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('name', 'Product Name:') }}
                                {{ Form::text('product_name', '', ['class' => 'form-control border-input', 'placeholder' => 'Mackbook pro']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('price', 'Product Price:') }}
                                {{ Form::text('product_price', '', ['class' => 'form-control border-input', 'placeholder' => '$2500']) }}
                            </div>

                            <div class="form-group">

                                {{ Form::label('description', 'Product Description:') }}
                                {{ Form::textarea('product_description', '', ['class' => 'form-control border-input']) }}

                            </div>

                            <div class="form-group">
                                {{ Form::label('image', 'Product Image:') }}
                                {{ Form::file('image', ['class' => 'form-control border-input']) }}
                            </div>

                        </div>

                    </div>
                    <div class="">
                        {{ Form::submit('Add Product', ['class' => 'btn btn-info btn-fill btn-wd']) }}
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
