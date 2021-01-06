@extends('master')
 
@section('header')
<h2 class="text-center">List Artikel</h2>
<p class="text-center">Khusus admin</p>
@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
    </div>
    @endif
 
@endsection
 
@section('title', 'Halaman Admin')
 
@section('main')
    <div class="col-md-12 bg-white p-4 text-center">
        <a href="/add" class="btn btn-primary">Tambah Artikel</a>
        <a href="/test-dompdf-2" target="_blank" class="btn btn-danger">Export data ke PDF</a>
        <a href="/test-excel" target="_blank" class="btn btn-success">Export data ke Excel</a>
        <table class="table table-responsive table-bordered table-hover table-stripped mt-2">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tag</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $i => $article)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $article->judul }}</td>
                        <td class="text-justify">{{ $article->deskripsi }}</td>
                        <td>{{ $article->tag }}</td>
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