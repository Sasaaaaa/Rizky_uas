@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-8 bg-light">	
	<h3>Daftar Post</h3>
	<a href="{{ url('/post/create')}}">Tambah Data</a>
	<table class="table">
		<tr>
			<td>ID KATEGORI</td>
			<td>TANGGAL</td>
			<td>SLUG</td>
			<td>TITTLE</td>
			<td>TEKS</td>
			<td>AKSI</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->kat_id }}</td>
			<td>{{ $row->post_date }}</td>
			<td>{{ $row->post_slug }}</td>
			<td>{{ $row->post_title }}</td>
			<td>{{ $row->post_teks }}</td>
			<td><form action="{{ url('post/' . $row->post_id) }}" method="POST"> 
 				<input name="_method" type="hidden" value="DELETE"> 
 				@csrf 
 					<button>Hapus</button>
 					<a href="{{ url('post/' . $row->post_id . '/edit')}}">Edit</a> 
				</form></td>
		</tr>
		@endforeach
	</table>
	</div>
</div>

@endsection