@foreach ($post as $row)
{{-- @php
		$photo = Storage::get('img/'.$row->image);
@endphp --}}
		<img src="{{asset('images/'. $row->image)}}" alt="">
		{{$row->image}}
		{{$row->title}}
@endforeach