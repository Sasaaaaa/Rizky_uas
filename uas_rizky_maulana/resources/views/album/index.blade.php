@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-8 bg-light">
	<h3>Daftar Album</h3>
	<a href="{{ url('/album/create')}}">Tambah Data</a>
	<table class="table">
		<tr>
			<td>ID PHOTO</td>
			<td>NAMA</td>
			<td>KETERANGAN</td>
			<td>AKSI</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->photo_id }}</td>
			<td>{{ $row->album_nama }}</td>
			<td>{{ $row->album_teks }}</td>
			<td><form action="{{ url('album/'.$row->album_id) }}" method="POST"> 
 				<input name="_method" type="hidden" value="DELETE"> 
 				@csrf 
 					<button>Hapus</button>
 					<a href="{{ url('album/' . $row->album_id . '/edit')}}">Edit</a> 
				</form></td>
		</tr>
		@endforeach
	</table>
	</div>
</div>

@endsection