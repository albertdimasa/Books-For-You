@extends('layouts.dashboard')
@section('isiDashboard')
    <div class="container">
        <h2 class="mt-2">Profil</h2>
    </div>
    @if (session('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-4">
            <div class="row-md-12">
                <img src="{{ asset('images/' . $user->gambar) }}" alt="Foto Profil" class="img-thumbnail w-60 mx-auto my-2"
                    style="width:65%">
            </div>
            <div class="row-md-12">
                <a href="profil" type="button" class="btn btn-outline-info mb-2 mx-auto" style="width:65%">Edit Profil</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-info mx-auto my-2">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $user->nama }}</strong></h5>
                    <h6 class="card-subtitle mb-2 ">{{ $user->prodi }} {{ $user->nim }}</h6><br><br>
                    <h6 class="card-text text-dark mb-2 ">
                        <i class="fas fa-phone-alt"></i> {{ $user->nomorHp }}
                    </h6>
                    <h6 class="card-text text-dark mb-2 ">
                        <i class="fas fa-map-marker-alt"></i> {{ $user->alamat }}
                    </h6>
                    <h6 class="card-text text-dark mb-2 ">
                        <i class="far fa-envelope"></i> {{ $user->email }}
                    </h6>
                </div>
            </div>
        </div>
    </div>

@endsection
