<!-- menggunakan kerangka dari halaman master.blade.php --> 
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Go Artikel')
 
<!-- membuat header dan tombol tambah artikel di atas -->
@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Go Artikel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Author
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
        
   
@endsection
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
    @foreach ($articles as $article)
    <div class="col-md-4 col-sm-12 mt-4">
        <div class="card">
            <img src="https://png.pngtree.com/png-vector/20190120/ourlarge/pngtree-gallery-vector-icon-png-image_470660.jpg" class="card-img-top" alt="gambar" >
            <div class="card-body">
                <h5 class="card-title">{{ $article->judul_artikel }}</h5>
                <a href="/detail/{{ $article->id }}" class="btn btn-primary">Baca Artikel</a>
            </div>
        </div>
    </div>
   @endforeach
@endsection