@extends('layouts.app')

@section('title', 'Costumer')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-history"></i> <span class="text-semibold">Costumer</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><i class="icon-home2 position-left"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('costumer.index') }}">Data Costumer</a></li>
                <li class="active">Costumer</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Costumer</h5>
        </div>

        <div class="panel-body">
            @if(count($costumer) > 0)
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>id_costumer</th>
                            <th>Nama</th>
                            <th>No_Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($riwayat as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->costumer}}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->perubahan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center">Costumer.</p>
            @endif
        </div>
    </div>
@endsection
