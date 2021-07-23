@extends('layouts.app')

@section('content')

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
<div class="row">
    <div class="col-lg-12">
        <a href="{{ route('banner.create') }}" class="btn btn-sm btn-success my-3">Add New</a>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Discrip</th>
                        <th>Price</th>
                        <th>Link</th>
                        <th>Images</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor sit.</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellat?</td>
                        <td>$120</td>
                        <td><a href="www.facebook.com">www.facebook.com</a></td>
                        <td>img</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">Left</button>
                                <button type="button" class="btn btn-warning">Middle</button>
                                <button type="button" class="btn btn-success">Right</button>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection