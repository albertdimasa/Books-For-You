@extends('layouts.dashboard')
@section('isiDashboard')

<div class="row my-2">
    <div class="col-md-9">
        <h2>Koleksi Buku</h2><hr>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
    </div>
    <div class="col-md-3 ml-auto">
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary ml-auto mr-3" data-toggle="modal" data-target="#modalTambahBuku">
                Tambah Buku
        </button>

        <!-- Modal Tambah Buku-->
        <div class="modal fade bd-example-modal-lg" id="modalTambahBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url ('buku')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan Judul Buku" value="{{ old ('judul')}}">
                                @error('judul')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pengarang</label>
                                <input name="pengarang" type="text" class="form-control @error('pengarang') is-invalid @enderror" placeholder="Masukkan Pengarang" value="{{ old ('pengarang')}}">
                                @error('pengarang')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Penerbit</label>
                                <input name="penerbit" type="text" class="form-control @error('penerbit') is-invalid @enderror" placeholder="Masukkan Penerbit" value="{{ old ('penerbit')}}">
                                @error('penerbit')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tahun Terbit</label>
                                <input name="tahun_terbit" type="date" class="form-control @error('tahun_terbit') is-invalid @enderror" value="{{ old ('tahun_terbit')}}">
                                @error('tahun_terbit')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Sinopsis</label>
                                <textarea name="sinopsis" class="form-control @error('sinopsis') is-invalid @enderror" rows="5">{{ old ('sinopsis')}}</textarea>
                                @error('sinopsis')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Cover Buku</label>
                                <input type="file" class="form-control @error('gambarBuku') is-invalid @enderror" id="gambarBuku" name="gambarBuku" value="{{old ('gambarBuku')}}">
                                @error('gambarBuku')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    </div>
</div>

<div class="row my-2">
    <!-- Tampilkan Koleksi Buku -->
    @foreach ($buku as $item)
    <div class="col-md-6">
        <div class="card" >
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('images/'.$item->gambarBuku)}}" alt="Cover Buku" class="img-thumbnail mx-auto" style="width:85%">
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">{{ $item->judul}}</h5>
                        <p class="card-text text-dark">{{ $item->pengarang}}</p>
                        <a href="buku/{{$item ->id}}/edit" type="button" class="btn btn-primary">
                            Detail Buku
                        </a>
                        <form action="{{url ('buku')}}/{{$item->id}}/delete" method="post" class="d-inline">
                            @method('delete')
                            {{csrf_field()}}
                        <button type="submit" class="btn btn-danger mt-1">Hapus</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    @endforeach
    <span>
        {{$buku -> links() }}
    </span>
</div>
@endsection