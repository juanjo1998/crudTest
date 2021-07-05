@extends('layout')

@section('content')
    <div class="container">
        <div class="row border">
            <div class="col-md-12">   
                {{-- name and short --}}
                <div class="name-short mt-4 mb-3">
                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-warning">Edit</a> 
                    <strong> {{$product->name}}</strong> | {{$product->short}}  
                    <a href="{{route('products.index')}}" class="btn btn-primary float-right">Show list</a>                    
                </div>  
                <hr>         
                <div class="body">
                 
                {{-- body --}}

                <p>{{$product->body}}</p>
                </div>
            </div>        
        </div>
    </div>
@endsection