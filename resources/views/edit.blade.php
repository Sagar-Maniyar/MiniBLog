@extends('layouts.app')
@section('main')        
    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                <h3 class="text-muted">Update Product {{ $product->name }}</h3>
                <form method="POST" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                        <!-- Add your action endpoint in the 'action' attribute above -->
                        <!-- CSRF token for security -->
                        @csrf
                        @method('PUT');
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name',$product->name) }}" />
                            <span style="color: red">@error('name'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" rows="5">{{ old('description',$product->description) }}</textarea>
                            <span style="color: red">@error('description'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" />
                            <span style="color: red">@error('image'){{ $message }}@enderror</span>
                        </div>

                        <!-- Add more form fields as needed -->
                        <a href="/crud" class="btn btn-dark">Cancel</a>
                        <button type="submit" class="btn btn-dark">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

