@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3>Tambah Data Kategori</h3>
	<form action="{{ url('/kategori')}}" method="post">
		@csrf
		<table>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="kat_nama"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="kat_teks"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>

@endsection