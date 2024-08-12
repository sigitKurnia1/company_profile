@extends('layouts.guest.main')
@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/ebizpage/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Berita</h1>
            <p>Jangan lewatkan berita terbaru dari kami! Kami akan selalu memberikan kepada anda berita terupdate seputar perusahaan kami!.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="current">Blog</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

        <div class="container">
            <div class="row gy-4">

                @foreach ($news as $item)
                    <div class="col-lg-4">
                        <article class="d-flex flex-column">

                            <div class="post-img">
                                <img src="assets/images/news/{{ $item->image_url }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">
                                <a href="#">{{ $item->title }}</a>
                            </h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="#">{{ $item->author }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#">{{ $item->event_date }}</a></li>
                                </ul>
                            </div>

                            <div class="content">
                                <p>
                                    {{ $item->content }}
                                </p>
                            </div>

                            <div class="read-more mt-auto align-self-end">
                                <a href="{{ route('detail.news', $item->id) }}">Read More</a>
                            </div>

                        </article>
                    </div><!-- End post list item -->
                @endforeach

            </div>
        </div>

    </section><!-- /Blog Posts Section -->
@endsection
