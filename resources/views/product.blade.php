@extends('layouts.app')
@section('main')       
    <div class="container">
        <div class="text-end">    
            <a href="create" class="btn btn-dark mt-2">New Product</a>
        </div>
        <h1>Products Table</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th width="50%">Description</th>
                    <th>image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $product)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><a href="{{ route('product.show',$product->id) }}" class="text-dark">{{ $product->name }}</a></td>
                    <td>{{ $product->description }}</td>
                    <td> <img src="public/products/{{ $product->image }}" class="rounded-circle" width="30px" height="30px"></td>
                    <td><a href="{{ route('product.edit',$product->id) }}" ><i class="fa fa-edit" style="font-size:20px;color:black"></i></a>&nbsp;&nbsp;&nbsp;

                    
                    <a href="{{ route('product.delete',$product->id) }}" class="btn" onclick="confirmation(event)"><i class="fa fa-trash" style="font-size:23px;color:red"></i></a>
                </td>
                    
                    
                    
                </tr>
                @endforeach
            </tbody> 
        </table>   
    </div>
    
@endsection
