@extends('dashboard.layouts.main')
@section('title')
    Edit Category
@endsection
@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit Category Form</h6>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('update-category', $category->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="catName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="catName" name="name"
                                value="{{$category->name }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="catDesc" class="form-label">Category Description</label>
                            <input type="text" class="form-control" id="catDesc" name="Description" value="{{$category->Description }}">
                        </div>
                        @error('Description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="imageCat" class="form-label">Image</label>
                            <input class="form-control" type="file" id="imgCat" name="image">
                        </div>
                        @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary">EDIT</button>
                        <a class="btn btn-primary" href="{{ route('CategoryView') }}">Back to View Page</a>

                    </form>
                </div>
            </div>
        @endsection
