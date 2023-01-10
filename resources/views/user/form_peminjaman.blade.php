@extends('layouts.app')

@section('content')
    <div class="container">
        @include('components.user.sidebar')

        <div class="card">
            <div class="card-header">
                <h4>Form Peminjaman</h4>
            </div>
            <div class="card-body">
                <form class="form-group" method="POST" action="{{ route('user.submit_peminjaman') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tgl_peminjaman" id="">
                    </div>
                    <div class="mb-3">
                        <label>Pilih Buku</label>
                        <select class="form-select" name="buku_id" id="">
                            <option value="" disabled selected>--PILIH OPSI--</option>
                            @foreach ($bukus as $b)
                                <option value="{{ $b->id }}" {{ isset($buku_id) ? 
                                $buku_id == $b->id ? "selected" : "" : "" }}>{{ 
                                $b->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Buku</label>
                        <select class="form-select" name="kondisi_buku_saat_dipinjam" id="">
                            <option value="" disabled selected>--PILIH OPSI--</option>
                            <option value="baik">Baik</option>
                            <option value="rusak">Rusak</option>
                        </select>
                    </div>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                    <button class="btn btn-primary" type="submit">SUBMIT</button>
            </div>
        </div>
    @endsection
