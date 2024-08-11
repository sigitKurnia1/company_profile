@extends('layouts.admin.main')
@section('title', 'Berita | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Berita</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Berita</div>
                </div>
            </div>

            <a href="{{ route('admin.create.news') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>
                Berita</a>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Judul Berita</th>
                            <th>Tanggal Berita</th>
                            <th>Kategori Berita</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($news as $item)
                            <tr>
                                <td>{{ $no += 1 }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->event_date }}</td>
                                <td>{{ $item->category }}</td>
                                <td>
                                    <a href="{{ route('admin.detail.news', $item->id) }}"
                                        class="badge badge-info">Detail</a>
                                    <a href="{{ route('admin.edit.news', $item->id) }}"
                                        class="badge badge-warning">Update</a>
                                    <a href="{{ route('admin.delete.news', $item->id) }}" class="badge badge-danger"
                                        data-confirm-delete="true">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection