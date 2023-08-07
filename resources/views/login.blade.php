@extends('layouts.app')
@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card mt-3 p-3">
                
                <form action="{{ route('product.admin')}}" method="POST">
                @csrf       
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password1">
                    </div>
                    <div> <!-- Add this div for centering the button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
