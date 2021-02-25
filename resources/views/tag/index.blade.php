{{-- @extends('layouts.index')
@section('content')
<form action="/store-tag" method="POST">
	@csrf
	<label for="">Title</label>
	<input type="text" name="title">
	<hr>
	<label for="">Text</label>
	<input type="text" name="body">
	<select class="select2" name="tag[]" multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
		@foreach ($tag as $item)
				<option value="{{$item->id}}">{{$item->tag_name}}</option>
		@endforeach
	</select>
	<button type="submit">Try</button>
</form>

@endsection
@push('script')
<script>
	$(function(){
		$('.select2').select2()

		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
	});
</script>
@endpush --}}

@foreach ($post as $item)
{{$item}}
@endforeach
<hr>
@foreach ($tag as $item)
{{$item->tag_name}}
@endforeach