@foreach ($post as $row)
{{-- @php
		$photo = Storage::get('img/'.$row->image);
@endphp --}}
		<img src="{{asset($row->image)}}" alt="" width="750px" height="350px">
		{{$row->image}}
		{{$row->title}}
@endforeach