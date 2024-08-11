@extends('layouts.admin.main')
@section('title', 'Testimoni | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Testimoni</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Testimoni</div>
                </div>
            </div>

            <a href="{{ route('admin.create.testimoni') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>
                Testimoni</a>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Nama Klien</th>
                            <th>Organisasi</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($testimoni as $item)
                            <tr>
                                <td>{{ $no += 1 }}</td>
                                <td>{{ $item->client_name }}</td>
                                <td>{{ $item->company }}</td>
                                <td>{{ $item->rating }}</td>
                                <td>
                                    <a href="{{ route('admin.detail.testimoni', $item->id) }}"
                                        class="badge badge-info">Detail</a>
                                    <a href="{{ route('admin.edit.testimoni', $item->id) }}"
                                        class="badge badge-warning">Update</a>
                                    <a href="{{ route('admin.delete.testimoni', $item->id) }}" class="badge badge-danger"
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