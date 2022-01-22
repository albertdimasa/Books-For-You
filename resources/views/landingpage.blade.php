@extends('layouts.headfoot')

@section('lp')
    
    <div class="intro-section" id="home-section">
      <div class="slide-1" style="background-image: url('images/books_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-content-center justify-content-center">
            <div class="col-lg-6 mb-4">
              <h1  data-aos="fade-up" data-aos-delay="300">Buku adalah Jendela Dunia</h1>
              <p class="mb-4"  data-aos="fade-up" data-aos-delay="300">Saat ini kita tengah mengalami kegalauan dimana para remaja lebih banyak menghabiskan waktunya untuk bermain gawai.</p>
              <p >
                <form action="{{url('/search')}}" method="get" data-aos="fade-up" data-aos-delay="300">
                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group">
                          <input name="cari" type="text" class="form-control @error('cari') is-invalid @enderror" placeholder="Masukkan Judul Buku">
                          @error('cari')
                              <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-3">
                      <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                  </div>              
                </form>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Keuntungan</h2>
            <p>Website ini menawarkan sejumlah kemudahan untuk teman - teman apabila ingin meminjam buku. Kalian tentu juga bisa membagikan buku - buku kalian. Seperti sistem perpustakaan yang begitu familiar.</p>
          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
          </div>
        
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Peminjaman Buku</h2>
            <p class="mb-4">Tidak hanya meminjam, tapi kalian juga bisa membagikan buku. Daripada tidak dibaca lagi, mending dipinjamkan saja.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2020, Informatika</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">Universitas Internasional Semen Indonesia</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Mendapat Teman Baru</h2>
            <p class="mb-4">Kali ini kalian bisa mendapat teman baru dengan perantara buku. Eits, jangan lupa bukunya juga dibaca.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2020, Informatika</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">Universitas Internasional Semen Indonesia</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Ilmu Yang Bermanfaat</h2>
            <p class="mb-4">Dengan membaca buku tentu saja kalian akan mendapatkan ilmu baru dan bermanfaat. Entah sekarang atau nanti pasti kalian membutuhkannya.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2020, Informatika</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">Universitas Internasional Semen Indonesia</h3></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Penyusun</h2>
            <p class="mb-5">Website ini disusun oleh mahasiswa Informatika UISI angkatan 2018 dengan framework laravel dan boostrap bertujuan untuk memudahkan peminjaman buku secara digital.</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/person_1a.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Dimas Albert Abraham</h3>
                <p class="position">Tukang Coding</p>
                <p>Ngoding website yang bergantung pada tutorial youtube dan stackoverflow.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/person_2f.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Firdatus Sholichah</h3>
                <p class="position">Database dan Fitur</p>
                <p>Merancang database, mengusulkan fitur web, pembuatan video, dan tugas lainnya</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/person_3f.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Taris Rafiqi Izatri</h3>
                <p class="position">Designer</p>
                <p>Mencari template untuk website sekaligus membuat poster yang menarik.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/books_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/logo.png" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Books For You</h3>
            <blockquote>
              <p>&ldquo; Membeli buku adalah suatu support kepada penulis buku. Tapi tidak semua orang dapat membelinya. Kami bisa membantu kalian untuk meminjam buku.&rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

</div>
@endsection