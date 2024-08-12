@extends('layouts.guest.main')
@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/ebizpage/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Detail berita</h1>
            <p>Jangan lewatkan berita terbaru dari kami! Kami akan selalu memberikan kepada anda berita terupdate seputar perusahaan kami!.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="current">Detail berita</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">

                            <div class="post-img">
                                <img src="assets/images/news/{{ $news->image_url }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">{{ $news->title }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-details.html">{{ $news->author }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-details.html"><time datetime="2020-01-01">{{ \Carbon\Carbon::parse($news->event_date)->translatedFormat('l, d F Y') }}</time></a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <p>{{ $news->content }}</p>

                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article>

                    </div>
                </section><!-- /Blog Details Section -->

            </div>

        </div>
    </div>
@endsection
