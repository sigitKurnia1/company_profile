@extends('layouts.admin.main')
@section('title', 'Update Project | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Update Project</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.project') }}">Project</a></div>
                    <div class="breadcrumb-item">Update Project</div>
                </div>
            </div>

            <a href="{{ route('admin.project') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>

            <div class="card mt-4">
                <form action="{{ route('admin.update.project', $project->id) }}" class="needs-validation" novalidate=""
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title">Judul Project</label>
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $project->title }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="client_name">Nama Klien</label>
                                    <input id="client_name" type="text" class="form-control" name="client_name" value="{{ $project->client_name }}" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="project_date">Tanggal Project</label>
                                    <input id="project_date" name="project_date" type="text" value="{{ $project->project_date }}" class="form-control datemask" placeholder="YYYY/MM/DD" required="">
                                    <div class="invalid-feedback">
                                        Bagian ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="image_url" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">Pilih Foto Project</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Deskripsi Project</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="20" required="">{{ $project->description }}</textarea>
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
