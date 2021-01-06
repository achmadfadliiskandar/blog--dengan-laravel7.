@extends('master')

@section('title', 'Menambah Artikel')

@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/add_process">
    @csrf
        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{old('judul')}}">
            @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Isi Artikel</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="15" value="{{old('deskripsi')}}"></textarea>
            @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Tag</label>
            <input type="text" class="form-control @error('tag') is-invalid @enderror" name="tag" value="{{old('tag')}}">
            @error('tag')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
</div>
@endsection

@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class="form-group">
        <label>Upload</label>
        <input type="submit" class="form-control btn btn-primary" value="Upload">
    </div>
</div>
</form>
@endsection