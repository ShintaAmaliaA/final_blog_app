@extends('template.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Promo List</h3>
                        <h6 class="font-weight-normal mb-0">All Promo data are here!</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <div class="d-flex justify-content-between align-items-center">
                                Promo
                                <a href="{{ route('promo.postpromo.create') }}" class="btn btn-primary">Create +</a>
                            </div>
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Thumbnail</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($postpromos as $key => $postpromo)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a href="{{ route('promo.postpromo.edit', [$postpromo->id]) }}">{{ $postpromo->title }}</a></td>
                                            <td>{{ optional($postpromo->user)->name }}</td>
                                            <td>
                                                @if ($postpromo->images)
                                                    <img src="{{ asset('uploads/' . $postpromo->images) }}"
                                                        class="img-fluid" style="max-width: 100px;" alt="">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('promo.postpromo.edit', [$postpromo->id]) }}">Edit</a>
                                                <a href="{{ route('promo.postpromo.delete', [$postpromo->id]) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
