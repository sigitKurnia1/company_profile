@extends('layouts.admin.main')
@section('title', 'Project | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Project</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Project</div>
                </div>
            </div>

            <a href="{{ route('admin.create.project') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>
                Project</a>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Nama Klien</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($project as $item)
                            <tr>
                                <td>{{ $no += 1 }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->client_name }}</td>
                                <td>{{ $item->project_date }}</td>
                                <td>
                                    <a href="{{ route('admin.detail.project', $item->id) }}"
                                        class="badge badge-info">Detail</a>
                                    <a href="{{ route('admin.edit.project', $item->id) }}"
                                        class="badge badge-warning">Update</a>
                                    <a href="{{ route('admin.delete.project', $item->id) }}" class="badge badge-danger"
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