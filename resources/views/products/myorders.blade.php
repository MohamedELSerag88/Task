@extends('layouts.app')

@section('content')
<div class="container">
    @include('flash::message')
    <h3 class="h3">{{ __('app.orders') }}</h3>
    <div class="row">
        @if ($orders->count())
            @foreach ($orders as $order)
                <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#">
                                <img style="height: -webkit-fill-available;" class="pic-1" src="/{{ $order->product->image??'images/default.jpg' }}">
                            </a>
                            <ul class="social">
                                <li><a href="/products/{{ $order->product->id }}" data-tip="{{ __('app.view') }}"><span class="glyphicon glyphicon-name"></span></a></li>
                                <li><a href="/orderdelete/{{ $order->id }}" data-tip="{{ __('app.delete') }}"><i class="fa fa-shopping-bag"></i></a></li>
                                
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{ $order->product[__('app.product_name')] }}</a></h3>
                            <div class="price">{{ $order->product->price }}$
                            </div>
                            <a class="add-to-cart" href="">+ {{ __('app.OrderProduct') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h2>No Orders</h2>    
        @endif
        
        
    </div>
</div>
@endsection
