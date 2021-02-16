@extends('layouts.index')

@section('content-md-8')
	@foreach ($post as $item)
		<article class="blog-post wow fadeInUp">
			<img src="{{$item->image}}" alt="blog post" class="post-thumbnail img-thumbnail">
			{{-- Format waktu January 29, 2020 --}}
			<p class="post-date">{{$item->created_at->format('M d, Y')}} by Sulistyo Cahyo</p> 
			<h4 class="post-title">{{$item->title}}</h4>
			<p class="post-excerpt">{{substr($item->body, 0, 50)}}</p>
			<a href="{{route('post.show', $item->id)}}" class="post-permalink">READ MORE</a>
		</article>
	@endforeach
	
	<nav class="oleez-pagination wow fadeInUp">
		<a href="#!" class="active">01</a>
		<a href="#!">02</a>
		<a href="#!">03</a>
		<a href="#!" class="next">&rarr;</a>
</nav>
@endsection

@section('content-md-4')
<div class="sidebar-widget wow fadeInUp">
		<h5 class="widget-title">Categories</h5>
		<div class="widget-content">
				<ul class="category-list">
						<li><a href="#!">Animation</a></li>
						<li><a href="#!">Branding</a></li>
						<li><a href="#!">Graphic Design</a></li>
						<li><a href="#!">Photography</a></li>
						<li><a href="#!">Web Developing</a></li>
				</ul>
		</div>
</div>
		
@endsection