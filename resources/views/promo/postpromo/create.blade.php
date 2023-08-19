@extends('template.master')

@section('css-content')
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Create Promo</h3>
                        <h6 class="font-weight-normal mb-0">Create promo data</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin strecth-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('promo.postpromo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" id="title" class="form-control" name="title">
                            </div>
                            <div class="form-group" data-select2-id="7">
                                <label>Categories</label>
                                <select class="js-example-basic-multiple form-control" name="category_ids[]"
                                    multiple="multiple">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" id="start_date" class="form-control" name="start_date">
                            </div>
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" id="end_date" class="form-control" name="end_date">
                            </div>
                            <div class="form-group">
                                <label for="images">Thumbnail</label>
                                <input type="file" id="images" class="form-control" name="images">
                            </div>
                            <div class="form-group">
                                <label for="description">Body</label>
                                <textarea class="form-control" name="description" id="body" cols="30" rows="10"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-content')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
    <script>
        (function($) {
            'use strict';

            $(".js-example-basic-multiple").select2();
        })(jQuery);
    </script>
@endsection
