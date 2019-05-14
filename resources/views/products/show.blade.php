@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
           <div class="col-xs-4 item-photo">
                <img style="max-width:100%;" src="/{{ $product->image??'defult.jpg' }}" />
            </div>
            <div class="col-xs-5" style="border:0px solid gray">
                <!-- Datos del vendedor y titulo del producto -->
                <h3>{{ $product[__('app.product_name')] }}</h3>    
                
                <!-- Precios -->
                <h3 style="margin-top:0px;">{{ $product->price }}$</h3>
    
                <!-- Detalles especificos del producto -->
                
                <!-- Botones de compra -->
                <div class="section" style="padding-bottom:20px;">
                    <a href="/orderproduct/{{ $product->id }}"><button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Order the product</button></a>
                </div>                                        
            </div>                              
    
            <div class="col-xs-9">
                <ul class="menu-items">
                    
                </ul>
                <div style="width:100%;border-top:1px solid silver">
                    <p style="padding:15px;">
                        <small>
                       {{ $product->description }}
                        </small>
                    </p>
                    
                </div>
            </div>		
        </div>
    </div>  
@endsection