@extends('layouts.admin.main')
@section('title', 'Update Berita | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Update Berita</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.news') }}">Berita</a></div>
                    <div class="breadcrumb-item">Update Berita</div>
                </div>
            </div>

            <a href="{{ route('admin.news') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>

            <div class="card mt-4">
                <form action="{{ route('admin.update.news', $news->id) }}" class="needs-validation" novalidate=""
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title">Judul Berita</label>
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $news->title }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="author">Penulis Berita</label>
                                    <input id="author" type="text" class="form-control" name="author" value="{{ $news->author }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category">Kategori Berita</label>
                                    <input id="category" type="text" class="form-control" name="category" value="{{ $news->category }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-group">
                                    <label for="event_date">Tanggal Terbit Berita</label>
                                    <input id="event_date" name="event_date" type="text" value="{{ $news->event_date }}" class="form-control datemask" placeholder="YYYY/MM/DD" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="image_url" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">Pilih Foto Berita</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="content">Deskripsi Berita</label>
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="20" required="">{{ $news->content }}</textarea>
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-icon icon-left btn-primary">
                            <i class="fas fa-file"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
