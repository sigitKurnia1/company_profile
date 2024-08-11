@extends('layouts.admin.main')
@section('title', 'Detail Testimoni | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Testimoni</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.testimoni') }}">Testimoni</a></div>
                    <div class="breadcrumb-item">Detail Testimoni</div>
                </div>
            </div>

            <a href="{{ route('admin.testimoni') }}" class="btn btn-icon icon-left btn-warning"><i
                    class="fas fa-arrow-left"></i> Kembali</a>

            <div class="row mt-4">
                <div class="col-12 col-sm-12-col-lg-12">
                    <div class="card author-box card-primary">
                        <div class="card-body">
                            <div class="author-box-left">
                                <img alt="image" style="width: 100px; height: 100px"
                                    src="assets/images/testimonials/{{ $testimoni->image_url }}"
                                    class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                            </div>
                            <div class="author-box-details">
                                <div class="author-box-name">
                                    <a href="#">{{ $testimoni->client_name }}</a>
                                </div>
                                <div class="author-box-job">Organisasi Klien: {{ $testimoni->company }}</div>
                                <div class="author-box-job">Penilaian Klien: {{ $testimoni->rating }}/10</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
