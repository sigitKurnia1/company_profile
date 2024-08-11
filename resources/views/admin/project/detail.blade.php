@extends('layouts.admin.main')
@section('title', 'Detail Project | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Project</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.project') }}">Project</a></div>
                    <div class="breadcrumb-item">Detail Project</div>
                </div>
            </div>

            <a href="{{ route('admin.project') }}" class="btn btn-icon icon-left btn-warning"><i
                    class="fas fa-arrow-left"></i> Kembali</a>

            <div class="row mt-4">
                <div class="col-12 col-sm-12-col-lg-12">
                    <div class="card author-box card-primary">
                        <div class="card-body">
                            <div class="author-box-left">
                                <img alt="image" style="width: 100px; height: 100px"
                                    src="assets/images/project/{{ $project->image_url }}"
                                    class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                            </div>
                            <div class="author-box-details">
                                <div class="author-box-name">
                                    <a href="#">{{ $project->title }}</a>
                                </div>
                                <div class="author-box-job">Nama Klien: {{ $project->client_name }}</div>
                                <div class="author-box-job">Tanggal Project: {{ $project->project_date }}</div>
                                <div class="author-box-description">
                                    Deskripsi Project
                                    <p>{{ $project->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
