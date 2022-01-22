@extends('layouts.dashboard')
@section('isiDashboard')
<div class="col mt-1">
    <h2>Edit Profil</h2><hr>
    <div class="row-md-12">
        <form action="{{url('profil')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label">Nama Lengkap</label>
                        <input id="nama" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Lengkap" value="{{$user -> nama}}">
                        @error('nama')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIM</label>
                        <input id="nim" name="nim" type="number" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan NIM" value="{{$user -> nim}}" >
                        @error('nim')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Prodi</label>
                        <select name="prodi" id="prodi"  class="form-control @error('prodi') is-invalid @enderror" >
                            <option value="">{{$user->prodi}}</option>
                            <option value="Ekonomi Syariah">Ekonomi Syariah</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Manajemen Rekayasa">Manajemen Rekayasa</option>
                            <option value="Akutansi">Akutansi</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Teknik Logistik">Teknik Logistik</option>
                            <option value="eknik Kimia<">Teknik Kimia</option>
                            <option value="Teknologi Industri Pertanian">Teknologi Industri Pertanian</option>
                        </select>
                        @error('prodi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input id="nomorHp" name="nomorHp" type="number" class="form-control @error('nomorHp') is-invalid @enderror" placeholder="Masukkan Nomor HP" value="{{$user -> nomorHp}}">
                        @error('nomorHp')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        
                    </div>
                </div>    
            </div>
            <div class="row-md-12">
                <div class="form-group">
                    <label>Email</label>
                    <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email" value="{{$user -> email}}">
                    @error('email')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3">{{$user -> alamat}}</textarea>
                @error('alamat')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Upload Foto Profil</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{$user -> gambar}}">
                @error('gambar')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="row-md-12 mb-2">
                <a href="home" type="button" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-info">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection