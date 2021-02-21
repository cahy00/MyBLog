@foreach ($post as $item)
		<ul>
			<li>{{$item->title}}</li>
			<li><b>{{$item->body}}</b></li>
		</ul>
		
		
		
@endforeach