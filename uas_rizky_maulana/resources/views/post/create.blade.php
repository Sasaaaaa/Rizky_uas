@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3>Tambah Data Post</h3>
	<form action="{{ url('/post')}}" method="post">
		@csrf
		<table>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="post_date"></td>
			</tr>
			<tr>
				<td>Slug</td>
				<td><input type="text" name="post_slug"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="post_title"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td><input type="text" name="post_teks"></td>
			</tr>
			<tr>
				<td>Id Kategori</td>
				<td><input type="text" name="kat_id"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>

@endsection