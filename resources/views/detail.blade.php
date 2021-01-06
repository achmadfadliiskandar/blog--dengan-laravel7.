@extends('master')
 
<!-- memberikan judul di tab sesuai dengan judul artikel yang sedang dibaca -->
@section('title')
{{ $article->judul }}
@endsection
 
<!-- menampilkan gambar, judul, dan isi artikel -->
@section('main')
<div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
    <img src="https://blog.sribu.com/wp-content/uploads/2018/07/Kode-Pemrograman.jpg" class="card-img-top" alt="gambar" >
    <div class="p-4 bg-light">
        <h2>{{ $article->judul }}</h2>
        <p>{{ $article->deskripsi }}</p>
        <strong>tag</strong>
        <p>{{$article->tag}}</p>
    </div>
</div>
@endsection
 
<!-- menampilkan tombol kembali ke halaman utama -->
@section('sidebar')
<div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
   <center> 
    <div class="card m-3">
        <h3>Blog lainya</h3>
        <div class="card-body">
          <a href="/detail/4" class="btn btn-primary mb-3">Apa perbedaan RPL dan TKJ</a>
          <a href="/detail/3" class="btn btn-primary mb-3">Apa itu Programmer</a>
          <a href="/detail/2" class="btn btn-primary mb-3">Apa itu Database Administrator</a>
          <a href="/detail/1" class="btn btn-primary mb-3">Apa itu Rpl</a>
        </div>
      </div>
        <a href="/"> 
            <button class="btn btn-info text-white w-100">Kembali</button> 
        </a>
    </center>
</div>
@endsection