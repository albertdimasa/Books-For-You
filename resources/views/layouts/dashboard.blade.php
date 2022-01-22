@extends('home')
@section('dashboard')
<div class="container-fluid rounded" style="background-color:white">
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4 my-2">
      <!-- Kolom 1 -->
      <div class="col mt-2 ">
        <div class="btn-group-vertical ml-3 ">
          <a href="{{ url ('/home')}}" class="text-white">
            <button type="button" class="btn btn-info mb-2" style="width: 13.8rem;">
              <i class="nav-icon fas fa-cogs "></i>
                Profil
            </button>
          </a>

          <a href="{{ url ('/riwayat')}}" class="text-white">
            <button type="button" class="btn btn-info mb-2">
              <i class="nav-icon fas fa-tachometer-alt "></i>
                Riwayat Peminjaman
            </button>
          </a>

          <a href="{{ url ('/buku')}}" class="text-white">
            <button type="button" class="btn btn-info mb-2" style="width: 13.8rem;">
              <i class="nav-icon fab fa-airbnb"></i>
                Koleksi Buku
            </button>
          </a>
          
          <a href="{{ url ('/syarat')}}" class="text-white">
            <button type="button" class="btn btn-info mb-2" style="width: 13.8rem;">
              <i class="nav-icon fab fa-airbnb"></i>
                Syarat Peminjaman
            </button>
          </a>
          
          <button type="button" class="btn btn-warning disabled mb-2">
            Coming Soon
          </button>
        </div>
      </div>

      <!-- Kolom 2 -->
      <div class="col-md-9">
          @yield('isiDashboard')
      </div>
    </div>
  
</div>
@stop