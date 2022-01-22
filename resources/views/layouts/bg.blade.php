@extends('layouts.headfoot')

@section('bg')
<div class="intro-section" id="home-section">
    <div class="slide-1" style="background-image: url('images/books_1.jpg');">
        @yield('content')
    </div>
</div>
@endsection