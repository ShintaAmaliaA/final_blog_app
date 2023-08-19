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
                        <h3 class="font-weight-bold">Edit Promo</h3>
                        <h6 class="font-weight-normal mb-0">Edit promo data</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('promo.postpromo.update', [$postprom->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') {{-- Add this line for PUT method --}}
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                    value="{{ $postprom->title }}">
                            </div>
                            <div class="form-group">
                                <label for="images">Thumbnail</label>
                                <div class="d-flex">
                                    <img class="img-fluid" style="max-width: 200px"
                                        src="{{ asset('uploads/' . $postprom->images) }}" alt="">
                                </div>
                                <input type="file" id="images" class="form-control" name="images">
                            </div>
                            <div class="form-group">
                                <label for="description">Body</label>
                                <textarea class="form-control" name="description" id="body" cols="30"
                                    rows="10">{{ $postprom->body }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="datetime-local" id="start_date" class="form-control" name="start_date"
                                    value="{{ date('Y-m-d\TH:i:s', strtotime($postprom->start_date)) }}">
                            </div>
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="datetime-local" id="end_date" class="form-control" name="end_date"
                                    value="{{ date('Y-m-d\TH:i:s', strtotime($postprom->end_date)) }}">
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
            var selectedCategories = {!! $postprom->categories ? json_encode($postprom->categories->pluck('id')) : 'null' !!};

            if (selectedCategories) {
                $(".js-example-basic-multiple").val(selectedCategories).trigger("change");
            }
        })(jQuery);

    </script>
@endsection
