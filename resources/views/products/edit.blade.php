@extends('layout')

@section('content')
    <div class="container">
        <div class="row border">
            <div class="col-md-12">   
                {!!Form::model($product, ['route' => ['products.update',$product->id], 'method' => 'PUT'])!!}   
                @include('products.partials.form')  
                {!!Form::close()!!}           
            </div>        
        </div>
    </div>
@endsection