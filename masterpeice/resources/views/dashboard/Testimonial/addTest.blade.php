{{-- @extends('dashboard.layouts.main')
@section('title')
Add Testomnial
@endsection
@section('content')
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add TESTIMONIAL Form</h6>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                <form action="{{ route('ADD') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="catName" class="form-label">testmoinal Name</label>
                        <input type="text" class="form-control" id="catName" name="name">
                    </div>
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                    <div class="mb-3">
                        <label for="catDesc" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="catDesc" name="comment">
                    </div>
                    @error('comment')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>
            </div>
        </div>
        

@endsection --}}