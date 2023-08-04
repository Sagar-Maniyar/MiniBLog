@extends('layouts.app')
@section('main')

<div class="container">
<div class="justify-content-center">
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-12 mt-4">
                <h2>Name: <b>{{$product->name}}</b></h2>
                <div class="card-flex">
                    <div class="row">
                        <div class="col-xl-6" >
                            <div class="des-para">
                                 <h3>Description:</h3>
                                 <p>{{$product->description}}</p> 
                            </div> 
                        </div>
                        <div class="col-xl-6">
                        <div class="image-box">
                                <img src="{{ asset('/public/products/' . $product->image) }}" class="rounded" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
