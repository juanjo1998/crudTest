@extends('layout')

@section('content')
    <div class="table">
        {{-- Info --}}
        @include('products.partials.info-delete')
        @include('products.partials.info-update')
        @include('products.partials.info-store')

        <table class="table table-hover table-striped">
            <thead class="thead-dark">
              <tr>              
                <th scope="col" class="text-center">
                  @auth
                    <a href="{{route('products.create')}}" class="btn btn-primary float-left">Create</a>Product Name
                  @endauth
                </th>      
                <th scope="col">Show</th> 
                <th scope="col">Edit</th> 
                <th scope="col">Delete</th> 
              </tr>
            </thead>          
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <th scope="row" class="text-center">{{$product->name}}</th>
                  <td><a href="{{route('products.show',$product->id)}}" class="btn btn-success">Show</a></td>
                  <td><a href="{{route('products.edit',$product->id)}}" class="btn btn-warning">Edit</a></td>
                  <td>
                    <form action="{{route('products.destroy',$product->id)}}" method="POST">
                        {{ csrf_field() }} {{method_field('DELETE')}}
                      <button class="btn btn-danger">Delete</button>
                    </form>                    
                  </td>
                </tr>   
              @endforeach                         
            </tbody>
        </table>    
        
        {{-- Pagination --}}
        <div class="container d-flex justify-content-center">        
          {!!$products->render('pagination::bootstrap-4')!!}
        </div>
    </div>
@endsection