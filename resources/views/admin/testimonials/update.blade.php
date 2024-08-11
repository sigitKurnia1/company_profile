@extends('layouts.admin.main')
@section('title', 'Update Testimoni | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Update Testimoni</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.testimoni') }}">Testimoni</a></div>
                    <div class="breadcrumb-item">Update Testimoni</div>
                </div>
            </div>

            <a href="{{ route('admin.testimoni') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>

            <div class="card mt-4">
                <form action="{{ route('admin.update.testimoni', $testimoni->id) }}" class="needs-validation" novalidate=""
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="client_name">Nama Klien</label>
                                    <input id="client_name" type="text" class="form-control" name="client_name" value="{{ $testimoni->client_name }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="rating">Rating Dari Klien (1 sd/ 10)</label>
                                    <input id="rating" type="number" class="form-control" name="rating" value="{{ $testimoni->rating }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="company">Organisasi Klien</label>
                                    <input id="company" type="text" class="form-control" name="company" value="{{ $testimoni->company }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="image_url" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">Pilih Foto Klien</label>
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
