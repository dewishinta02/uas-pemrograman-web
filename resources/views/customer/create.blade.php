@extends('layouts.app')

@section('title', 'Customer')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Customer</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('customer.index') }}">Data Customer</a></li>
                <li class="active">Tambah Customer</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Customer</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Customer:</label>
                        <input type="text" name="nama_customer" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Id Transaksi:</label>
                        <input type="text" name="id_transaksi" class="form-control" required>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
