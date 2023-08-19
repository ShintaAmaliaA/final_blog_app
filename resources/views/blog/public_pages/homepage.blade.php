@extends('blog.public_pages.template')

@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="{{ route('show', ['slug' => $post->slug]) }}">

                            <!-- Tampilkan gambar -->
                            @if ($post->banner_image)
                                <img src="{{ asset('uploads/' . $post->banner_image) }}" class="img-fluid" style="width: 500px;" alt="">
                            @endif

                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{!! Str::substr($post->body, 0, 60) !!}</h3>
                        </a>
                        <p class="post-meta">z
                            Posted by
                            <a href="#!">{{ $post->user->name }}</a>
                            on {{ date('F d, Y', strtotime($post->created_at)) }}
                        </p>
                    </div>

                    <hr class="my-4" />
                @endforeach

                <!-- Pager-->
                {{-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> --}}
            </div>
        </div>
    </div>
@endsection
