<!-- menggunakan kerangka dari master.blade.php -->
@extends('master')
 
@section('header')
<h2><center>List Artikel</center></h2>
@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
    </div>
    @endif
 
@endsection
 
@section('title', 'Halaman Khusus Penulis')
 
@section('main')
    <div class="col-md-12 bg-white p-4">
        <a href="/add"><button class="btn btn-primary mb-3">Tambah Artikel</button></a>
        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>isi</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($article as $i => $article)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $article->judul_artikel }}</td>
                        <td>{{ $article->isi_artikel }}</td>
                        <td>
                            <a href="/edit/{{ $article->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/delete/{{ $article->id }}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection