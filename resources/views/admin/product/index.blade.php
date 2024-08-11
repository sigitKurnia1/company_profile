@extends('layouts.admin.main')
@section('title', 'Product | Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Produk</div>
                </div>
            </div>

            <a href="{{ route('admin.create.product') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>
                Produk</a>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Kategori Produk</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($products as $item)
                            <tr>
                                <td>{{ $no += 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category }}</td>
                                <td>
                                    <a href="{{ route('admin.detail.product', $item->id) }}"
                                        class="badge badge-info">Detail</a>
                                    <a href="{{ route('admin.edit.product', $item->id) }}"
                                        class="badge badge-warning">Update</a>
                                    <a href="{{ route('admin.delete.product', $item->id) }}" class="badge badge-danger"
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