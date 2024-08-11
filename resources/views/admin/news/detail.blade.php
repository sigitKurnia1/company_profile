@extends('layouts.admin.main')
@section('title', 'Detail Berita | Admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Berita</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.news') }}">Berita</a></div>
                <div class="breadcrumb-item">Detail Berita</div>
            </div>
        </div>

        <a href="{{ route('admin.news') }}" class="btn btn-icon icon-left btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>

        <div class="row mt-4">
            <div class="col-12 col-md-4 col-lg-12 m-auto">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image" data-background="assets/images/news/{{ $news->image_url }}"></div>
                    </div>
                <div class="article-details">
                    <div class="article-category"><a href="#">Berita</a> <div class="bullet"></div> <a href="#">{{ $news->event_date }}</a></div>
                    <div class="article-title">
                        <h2><a href="#">{{ $news->title }}</a></h2>
                    </div>
                    <p>
                        {{ $news->content }}
                    </p>
                    <hr>
                    <div class="article-user">
                        <img alt="image" src="assets/stisla/img/avatar/avatar-3.png">
                        <div class="article-user-details">
                            <div class="user-detail-name">
                                <a href="#">{{ $news->author }}</a>
                            </div>
                            <div class="text-job">Penulis Berita</div>
                        </div>
                    </div>
                </div>
              </article>
            </div>
        </div>
    </section>
</div>
@endsection