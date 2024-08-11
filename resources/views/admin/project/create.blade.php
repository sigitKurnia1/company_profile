@extends('layouts.admin.main')
@section('title', 'Tambah Project | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Project</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.project') }}">Project</a></div>
                    <div class="breadcrumb-item">Tambah Project</div>
                </div>
            </div>

            <a href="{{ route('admin.project') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>

            <div class="card mt-4">
                <form action="{{ route('admin.store.project') }}" class="needs-validation" novalidate=""
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title">Judul Project</label>
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="client_name">Nama Klien</label>
                                    <input id="client_name" type="text" class="form-control" name="client_name" value="{{ old('client_name') }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="project_date">Tanggal Project</label>
                                    <input id="project_date" name="project_date" type="text" value="{{ old('project_date') }}" class="form-control datemask" placeholder="YYYY/MM/DD" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="image_url" id="customFile" type="file" required="">
                                        <label class="custom-file-label" for="customFile">Pilih Foto Project</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Deskripsi Project</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="20" required="">{{ old('description') }}</textarea>
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
