@extends('layouts.app')

@section('title', 'Edit Barang')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('barang.index') }}">Data Barang</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" id="kode_barang" value="{{ $barang->kode_barang }}" required>
                        @if($errors->has('kode_barang'))
                            <div class="text-danger">
                                {{ $errors->first('kode_barang') }}
                            </div>
                        @endif
                        </div>

                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}" required>
                        @if($errors->has('nama_barang'))
                            <div class="text-danger">
                                {{ $errors->first('nama_barang') }}
                            </div>
                        @endif
                        </div>

                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="text" name="jumlah_barang" class="form-control" id="jumlah_barang" value="{{ $barang->jumlah_barang }}" required>
                        @if($errors->has('jumlah_barang'))
                            <div class="text-danger">
                                {{ $errors->first('jumlah_barang') }}
                            </div>
                        @endif
                        </div>
                    
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang</label>
                        <input type="text" name="harga_barang" class="form-control" id="harga_barang" value="{{ $barang->harga_barang }}" required>
                        @if($errors->has('harga_barang'))
                            <div class="text-danger">
                                {{ $errors->first('harga_barang') }}
                            </div>
                        @endif
                        </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
@endpush
