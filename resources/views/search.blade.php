@extends('home')

@section('dashboard')
    <div class="container-fluid rounded" style="background-color:white">
        <div class="col-md-9 mx-auto">
            <form action="{{ url('/search') }}" method="get" class="form-inline">
                <div class="form-group ml-auto mr-1 my-2 ">
                    <input name="cari" type="text" class="form-control @error('cari') is-invalid @enderror"
                        placeholder="Masukkan Judul Buku">
                    @error('cari')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
        <div class="row">
            @if ($buku ?? '')
                @foreach ($buku as $item)
                    <div class="col-md-4">
                        <div class="card border-info my-2">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('images/' . $item->gambarBuku) }}" alt="Cover Buku"
                                            class="img-thumbnail mx-auto" style="width:100%">
                                    </div>
                                    <div class="col-md-6">
                                        @if ($item->status == 0)
                                            <span class="badge badge-pill badge-info">Tersedia</span>
                                        @else
                                            <span class="badge badge-pill badge-danger">Sedang Dipinjam</span>
                                        @endif

                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                        <p class="card-text text-dark">{{ $item->pengarang }}</p>

                                        @if ($item->status == 0)
                                            <a href="pinjam/{{ $item->id }}" type="button" class="btn btn-warning">
                                            @else
                                                <a href="" type="button" class="btn btn-warning disabled">
                                        @endif

                                        Pinjam
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    @endsection
