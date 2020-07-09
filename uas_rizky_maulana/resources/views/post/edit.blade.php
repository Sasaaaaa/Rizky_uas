 @extends('layouts.app')

@section('content')

<div class="container">
	<h3>Edit Data Post</h3>
		<form action="{{ url('/post/' . $row->post_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
	@csrf
	<table>
		<tr>
			<td>Date</td>
			<td><input type="text" name="post_date" value="{{ $row->post_date }}"></td>
		</tr>
		<tr>
			<td>Slug</td>
			<td><input type="text" name="post_slug" value="{{ $row->post_slug }}"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="post_title" value="{{ $row->post_title }}"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="post_teks" value="{{ $row->post_teks }}"></td>
		</tr>
		<tr>
			<td>ID Category</td>
			<td><input type="text" name="kat_id" value="{{ $row->kat_id }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</div>
@endsection 