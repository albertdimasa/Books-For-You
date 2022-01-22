@extends('layouts.dashboard')
@section('isiDashboard')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="row-cols-6">
    <h2 class="text-dark"> Detail Buku </h2>
</div>

<div class="row-cols-6">
    <form action="update" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan Judul Buku" value="{{$satuBuku -> judul}}">
                    @error('judul')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Pengarang</label>
                    <input name="pengarang" type="text" class="form-control @error('pengarang') is-invalid @enderror" placeholder="Masukkan Nama Pengarang" value="{{$satuBuku -> pengarang}}">
                    @error('pengarang')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Penerbit</label>
                    <input name="penerbit" type="text" class="form-control @error('penerbit') is-invalid @enderror" placeholder="Masukkan Nama Penerbit" value="{{$satuBuku -> penerbit}}">
                    @error('penerbit')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tahun Terbit</label>
                    <input name="tahun_terbit" type="date" class="form-control @error('tahun_terbit') is-invalid @enderror" value="{{$satuBuku -> tahun_terbit}}">
                    @error('tahun_terbit')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Sinopsis</label>
            <textarea name="sinopsis" type="text" class="form-control @error('sinopsis') is-invalid @enderror" rows="5">{{$satuBuku -> sinopsis}}</textarea>
            @error('sinopsis')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="container my-2 ">
            <a href="{{ url ('buku')}}" type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</a>
            <button type="submit" class="btn btn-info">Update</button>
        </div>
    </form>
</div>
@endsection