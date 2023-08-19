@extends('template.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Create Post</h3>
                        <h6 class="font-weight-normal mb-0">Create post data
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin strecth-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('blog.categories.update', ['id' => $category->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">
                                  Category Name
                                </label>
                                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
