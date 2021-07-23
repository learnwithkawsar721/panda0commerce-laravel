@extends('layouts.app')

@section('content')
{{-- Breadcrumb Start --}}
<div class="row">
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Banner</li>
            </ol>

        </nav>
    </div>
</div>
{{-- Breadcrumb End --}}
{{-- Content Start --}}
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-header">
                Add Banner
            </div>
            <div class="card-body">
                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Banner Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="discription" class="form-label">Banner Discription</label>
                        <textarea name="discription" id="discription" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Banner price</label>
                        <input type="number" step="0.1" class="form-control" name="price" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Banner link</label>
                        <input type="url" class="form-control" name="link" id="link">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Banner image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Content End --}}
@endsection