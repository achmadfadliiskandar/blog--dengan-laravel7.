@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Blog Coding')
 
<!-- membuat header dan tombol tambah artikel di atas -->
@section('header')
	<h2 class="text-center">Coding Blog</h2>
	<strong id="wrap" class="mt-2"></strong>
@endsection

@section('main')
    @foreach ($articles as $article)
    <div class="col-md-4 col-sm-12 mt-5">
        <div class="card">
            <img src="https://www.popsci.com/resizer/vNVllkeZrC3zSV5BmEdOUCuGK48=/760x570/arc-anglerfish-arc2-prod-bonnier.s3.amazonaws.com/public/NOELZ6O34F53QNY7ITL3CYQCEY.jpg" class="card-img-top" alt="gambar" >
            <div class="card-body">
                <h5 class="card-title">{{ $article->judul }}</h5>
                <a href="/detail/{{ $article->id }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
@endforeach
@endsection

<style>
    #wrap{
	position: absolute;
	top: 20%;
	left: 50%;
	transform: translate(-50%,-50%);
}

    strong::before{
	content: '';
	animation: animate infinite 7s;
	color:orange;
	padding: 0 5px;
}
    @keyframes animate{
	0%{
		content: 'Blog Web Programmer';
	}

	25%{
		content: 'Front End Developer';
	}

	50%{
		content: 'Back End Developer';
	}

	75%{
		content: 'Database Administrator';
	}

	100%{
		content: 'Fullstack Developer';
	}
    }
</style>