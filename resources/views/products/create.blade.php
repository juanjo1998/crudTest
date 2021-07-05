@extends('layout')

@section('content')
    <div class="container">
        <div class="row border">
            <div class="col-md-12">   
                {!!Form::open(['route' => ['products.store']])!!}   
                    @include('products.partials.form')                      
                {!!Form::close()!!}           
            </div>        
        </div>
    </div>
@endsection