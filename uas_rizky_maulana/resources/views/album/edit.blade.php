 @extends('layouts.app')

@section('content')

<div class="container bg-light">
<div class="container">
	<h3>Edit Data Album</h3>
		<form action="{{ url('/album/' . $row->album_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
	@csrf
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="album_nama" value="{{ $row->album_nama }}"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="album_teks" value="{{ $row->album_teks }}"></td>
		</tr>
		<tr>
			<td>ID Photo</td>	
			<td><input type="text" name="photo_id" value="{{ $row->photo_id }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</div>
@endsection 