@extends('layouts.app')

@section('title', 'Barang')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Barang</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('barang.index') }}">Data Barang</a></li>
                <li class="active">Tambah Barang</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Barang</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Kode Barang:</label>
                        <input type="text" name="kode_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Barang:</label>
                        <input type="text" name="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Barang:</label>
                        <input type="text" name="jumlah_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Barang:</label>
                        <input type="text" name="harga_barang" class="form-control" required>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
