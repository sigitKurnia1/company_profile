@extends('layouts.admin.main')
@section('title', 'Tambah Berita | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Berita</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.news') }}">Berita</a></div>
                    <div class="breadcrumb-item">Tambah Berita</div>
                </div>
            </div>

            <a href="{{ route('admin.news') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>

            <div class="card mt-4">
                <form action="{{ route('admin.store.news') }}" class="needs-validation" novalidate=""
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title">Judul Berita</label>
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="author">Penulis Berita</label>
                                    <input id="author" type="text" class="form-control" name="author" value="{{ old('author') }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category">Kategori Berita</label>
                                    <input id="category" type="text" class="form-control" name="category" value="{{ old('category') }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-group">
                                    <label for="event_date">Tanggal Terbit Berita</label>
                                    <input id="event_date" name="event_date" type="text" value="{{ old('event_date') }}" class="form-control datemask" placeholder="YYYY/MM/DD" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="image_url" id="customFile" type="file" required="">
                                        <label class="custom-file-label" for="customFile">Pilih Foto Berita</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="content">Deskripsi Berita</label>
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="20" required="">{{ old('content') }}</textarea>
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-icon icon-left btn-primary">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
