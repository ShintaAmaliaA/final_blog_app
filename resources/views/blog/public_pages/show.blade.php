@extends('blog.public_pages.template')

@section('content')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!! $post->body !!}

                    <div class="d-flex justify-content mb-4">
                      @foreach ($categories as $category)
                        <a class="btn btn-lg btn-primary mx-2" style="font-size: 15px" href="#!">{{ $category->name }}</a>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
