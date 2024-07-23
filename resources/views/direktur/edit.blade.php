@extends('layouts.app')

@section('title', 'Edit Direktur')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('direktur.index') }}">Data Direktur</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('direktur.update', $direktur->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_direktur">Id Direktur</label>
                        <input type="text" name="id_direktur" class="form-control" id="id_direktur" value="{{ $direktur->id_direktur }}" required>
                        @if($errors->has('id_direktur'))
                            <div class="text-danger">
                                {{ $errors->first('id_direktur') }}
                            </div>
                        @endif
                        </div>

                    <div class="form-group">
                        <label for="nama">Nama Direktur</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $direktur->nama }}" required>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                        </div>
                    
                    <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $direktur->jenis_kelamin }}" required>
                                <option value="Laki-laki" @if ($direktur->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                                <option value="Perempuan" @if ($direktur->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                            @if($errors->has('jenis_kelamin'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_kelamin') }}
                                </div>
                            @endif
                            </div>
                    
                    <div class="form-group">
                            <label for="alamat">Alamat Hp</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $direktur->alamat }}" required>
                            @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat') }}
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
