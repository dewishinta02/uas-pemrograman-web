@extends('layouts.app')

@section('title', 'Edit Admin')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Data Admin</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_admin">Id Admin</label>
                        <input type="text" name="id_admin" class="form-control" id="id_admin" value="{{ $admin->id_admin }}" required>
                        @if($errors->has('id_admin'))
                            <div class="text-danger">
                                {{ $errors->first('id_admin') }}
                            </div>
                        @endif
                        </div>

                    <div class="form-group">
                        <label for="nama">Nama Admin</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $admin->nama }}" required>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                        </div>
                    
                    <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $admin->jenis_kelamin }}" required>
                            @if($errors->has('jenis_kelamin'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_kelamin') }}
                                </div>
                            @endif
                            </div>
                    
                    <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{ $admin->no_hp }}" required>
                            @if($errors->has('no_hp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp') }}
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
