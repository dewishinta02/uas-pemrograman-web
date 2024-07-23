@extends('layouts.app')

@section('title', 'Edit Customer')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Data Customer</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_customer">Nama Customer</label>
                        <input type="text" name="nama_customer" class="form-control" id="nama_customer" value="{{ $customer->nama_customer }}" required>
                        @if($errors->has('nama_customer'))
                            <div class="text-danger">
                                {{ $errors->first('nama_customer') }}
                            </div>
                        @endif
                        </div>

                    <div class="form-group">
                        <label for="id_transaksi">Id Transaksi</label>
                        <input type="text" name="id_transaksi" class="form-control" id="id_transaksi" value="{{ $customer->id_transaksi }}" required>
                        @if($errors->has('id_transaksi'))
                            <div class="text-danger">
                                {{ $errors->first('id_transaksi') }}
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
