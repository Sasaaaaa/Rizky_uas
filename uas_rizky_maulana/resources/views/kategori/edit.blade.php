@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3>Edit Data Kategori</h3>
	<form action="{{ url('/kategori/' . $row->kat_id)}}" method="POST">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="kat_nama" value="{{ $row->kat_nama }}"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="kat_teks" value="{{ $row->kat_teks }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</div>

@endsection