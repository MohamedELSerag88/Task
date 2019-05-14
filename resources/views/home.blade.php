@extends('layouts.app')

@section('content')
<div class="container">
    @include('flash::message')
    <h3 class="h3">{{ __('app.products') }}</h3>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="/products/{{ $product->id }}">
                            <img style="height: -webkit-fill-available;" class="pic-1" src="/{{ $product->image??'images/default.jpg' }}">
                        </a>
                        <ul class="social">
                            <li><a href="/products/{{ $product->id }}" data-tip="View"><span class="glyphicon glyphicon-name"></span></a></li>
                            <li><a href="/orderproduct/{{ $product->id }}" data-tip="Order"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="/products/{{ $product->id }}">{{ $product[__('app.product_name')] }}</a></h3>
                        <div class="price">{{ $product->price }}$
                        </div>
                        <a class="add-to-cart" href="/orderproduct/{{ $product->id }}">+ Order Product</a>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
    {{ $products->links() }} 
</div>
@endsection
