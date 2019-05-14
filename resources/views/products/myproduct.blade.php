@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')
        <h3 class="h3">{{ __('app.products') }}</h3>
        <a href="/products/create" type="button" class="btn btn-primary" style="margin-bottom: 20px;">{{ __('app.addnew') }}</a>
        <div class="row">
            @if ($products->count())
                @foreach ($products as $product)
                    <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="/products/{{ $product->id }}">
                                    <img style="height: -webkit-fill-available;" class="pic-1" src="/{{ $product->image??'images/default.jpg' }}">
                                </a>
                                <ul class="social">
                                    <li><a href="/products/{{ $product->id }}" data-tip="View"><span class="glyphicon glyphicon-name"></span></a></li>
                                    <li><a href="productdelete/{{ $product->id }}" data-tip="{{ __('app.delete') }}"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="/products/{{ $product->id }}/edit" data-tip="{{ __('app.edit') }}"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="/products/{{ $product->id }}">{{ $product[__('app.product_name')] }}</a></h3>
                                <div class="price">{{ $product->price }}$
                                </div>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <h2>No Products</h2>
            @endif    
            
        </div>
    </div>
@endsection
