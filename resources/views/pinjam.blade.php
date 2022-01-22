@extends('home')

@section('dashboard')
<div class="container-fluid rounded" >
    <div class="card border-success">
        <div class="card-body bg-light ">
            <div class="row my-2">
                <div class="col-md-3 mx-auto ">
                    <img src="{{ asset('images/'.$buku->gambarBuku)}}" class="img-thumbnail "  style="width:80%" alt="Cover Buku">
                </div>
                <div class="col-md-5">
                    <h5 class="card-title"><strong>{{ $buku-> judul}}</strong></h5><hr>
                    <p class="card-text text-dark"><i class="fas fa-user"> Pengarang    : {{ $buku->pengarang}}</i></a>
                    <p class="card-text text-dark"><i class="fas fa-home"> Penerbit     : {{ $buku->penerbit}}</i></a>
                    <p class="card-text text-dark">Tahun Terbit : {{ $buku->tahun_terbit}}</a>
                    <p class="card-text text-dark">Sinopsis     : {{ $buku->sinopsis}}</a>
                    <div class="row">
                        <!-- Trigger Button Modal -->
                        <button type="submit" class="btn btn-info ml-3" data-toggle="modal" data-target="#pinjamBuku">Pinjam Buku</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/'.$user->gambar)}}" alt="Foto Profil" class="img-rounded mb-1" style="width:20%">
                    <h5 class="card-title"><strong>{{$user->nama}}</strong></h5>
                    <p class="card-subtitle text-dark mb-2 ">{{$user->prodi}} {{$user->nim}}</p>
                    <p class="card-text text-dark mb-2 ">
                    <i class="fas fa-phone-alt"></i> {{$user->nomorHp}}</p>
                    <p class="card-text text-dark mb-2 ">
                    <i class="fas fa-map-marker-alt"></i> {{$user->alamat}}</p>
                    <p class="card-text text-dark mb-2 ">
                    <i class="far fa-envelope"></i> {{$user->email}}</p>
                </div>
            </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="pinjamBuku" tabindex="-1" role="dialog" aria-labelledby="pinjamBukuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pinjamBukuLabel"><strong>Form Peminjaman</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{$buku->id}}/pinjambuku" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset disabled>
                        <!-- Peminjam -->
                        <?php
                            $userPinjam= \App\User::where('id', Auth::id())->first();
                            $namaPeminjam= $userPinjam->nama;
                        ?>
                        <div class="form-group">
                            <label>Nama Peminjam</label>
                            <input type="text" class="form-control" placeholder="{{$namaPeminjam}}">
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" placeholder="{{$buku->judul}}">
                        </div>                           
                    </fieldset>
                    <div class="form-group">
                        <label>Tanggal Peminjaman</label>
                        <input name="tanggal_peminjaman" type="date" class="form-control @error('tanggal_peminjaman') is-invalid @enderror">
                        @error('tanggal_peminjaman')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input name="tanggal_pengembalian" type="date" class="form-control @error('tanggal_pengembalian') is-invalid @enderror">
                        @error('tanggal_pengembalian')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <p class="text-dark">
                        <b> Apakah anda setuju dengan <i>syarat peminjaman</i> di website ini?</b>
                    </p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-info">Setuju</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection