@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-8 bg-light">	
	<h3>Daftar Kategori</h3>
	<a href="{{ url('/kategori/create')}}">Tambah Data</a>

	<table class="table">
		<tr>
			<td>NAMA</td>
			<td>KETERANGAN</td>
			<td>AKSI</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->kat_nama }}</td>
			<td>{{ $row->kat_teks }}</td>
			<td><form action="{{ url('kategori/' . $row->kat_id) }}" method="POST"> 
 				<input name="_method" type="hidden" value="DELETE"> 
 				@csrf 
 					<button>Hapus</button>
 					<a href="{{ url('kategori/' . $row->kat_id . '/edit')}}">Edit</a> 
				</form></td>
		</tr>
		@endforeach
	</table>
	</div>
</div>

@endsection