@foreach ($post as $row)
{{-- @php
		$photo = Storage::get('img/'.$row->image);
@endphp --}}
		<img src="{{asset($row->image)}}" alt="" width="750px" height="350px">
		{{$row->image}}
		{{$row->title}}
@endforeach

@section('content-md-4')
<div class="sidebar-widget wow fadeInUp">
	<h5 class="widget-title">Tags</h5>
	<div class="widget-content">
			<a href="#!" class="post-tag">Design Studio</a>
			<a href="#!" class="post-tag">Creative Design</a>
			<a href="#!" class="post-tag">Marketing</a>
			<a href="#!" class="post-tag">Typography</a>
			<a href="#!" class="post-tag">Team</a>
			<a href="#!" class="post-tag">Project</a>
	</div>
</div>
<div class="sidebar-widget wow fadeInUp">
	<h5 class="widget-title">Share</h5>
	<div class="widget-content">
			<nav class="social-links">
					<a href="#!">Fb</a>
					<a href="#!">Tw</a>
					<a href="#!">In</a>
					<a href="#!">Be</a>
			</nav>
	</div>
</div>
@endsection