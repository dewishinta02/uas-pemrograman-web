@extends('layouts.app')

@section('title', 'Tambah User')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ '/pengguna'}}">Costumer</a></li>
    <li class="breadcrumb-item active">Tambah</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <form action="{{ route('pengguna.index') }}" method="POST">
      @csrf
      <div class="card">
        <div class="card-body">
         <div class="form-group">
          <label for="id_costumer">id_costumer</label>
          <input type="text" name="id_costumer" class="form-control" id="id_costumer" placeholder="id_costumer" value="{{ old('id_costumer') }}" required>
          @if($errors->has('id_costumer'))
            <div class="text-danger">
              {{ $errors->first('id_costumer')}}
              </div>
          @endif
         </div>
         <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" value="{{ old('nama') }}" required>
            @if($errors->has('nama'))
              <div class="text-danger">
                {{ $errors->first('nama')}}
                </div>
            @endif
           </div>
           <div class="form-group">
            <label for="nama">No_Transaksi</label>
            <input type="no_transaksi" name="no_transaksi" class="form-control" id="no_transaksi" placeholder="No_Transaksi" value="{{ old('no_transaksi') }}" required>
            @if($errors->has('no_transaksi'))
              <div class="text-danger">
                {{ $errors->first('no_transaksi')}}
                </div>
            @endif
            {{-- <div class="form-group">
                <label>Level</label><br>
                @foreach($roles as $role)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="role{{ $role->id }}" value="{{ $role->id }}">
                        <label class="form-check-label" for="role{{ $role->id }}">{{ $role->name }}</label>
                    </div>
                @endforeach
                @if($errors->has('role'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('role') }}
                    </div>
                @endif
            </div> --}}
            {{-- <div class="form-group">
                <label for="level">Level</label>
                <select name="level" id="level" class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('level'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('level') }}
                    </div>
                @endif --}}
            {{-- </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                @if($errors->has('password'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi Password" required>
                @if($errors->has('password_confirmation'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                @endif
            </div>
        </div> --}}
        
        <div class="card-footer">
          <button type="reset" class="btn btn-dark">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection

@push('script')

@endpush