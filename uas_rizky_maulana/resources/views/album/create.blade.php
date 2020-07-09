@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3>Tambah Data Album</h3>
	<form action="{{ url('/album')}}" method="post">
		@csrf
		<table>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="album_nama"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="album_teks"></td>
			</tr>
			<tr>
				<td>ID POST</td>
				<td><input type="text" name="photo_id"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>

@endsection