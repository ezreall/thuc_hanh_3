@extends('layouts.master')
@section('content')
    <div class="card mt-2">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body col-lg-6">
            <form method="POST" action="{{route('update.producte',$productes->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input value="{{$productes->name}}" type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input value="{{$productes->price}}" type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label>type</label>
                    <input value="{{$productes->type}}" type="text" name="type" class="form-control">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input value="{{$productes->image}}" type="file" name="image" class="form-control ">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="custom-select" name="category_id">
                        <option selected>Choose...</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
