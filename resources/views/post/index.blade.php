@extends('layouts.index')

@section('content-md-8')
	@foreach ($post as $item)
		<article class="blog-post wow fadeInUp">
			<img src="assets/images/Standard_list_blog/Standard_1@2x.jpg" alt="blog post" class="post-thumbnail">
			{{-- Format waktu January 29, 2020 --}}
			<p class="post-date">{{$item->created_at->format('M d, Y')}}</p> 
			<h4 class="post-title">{{$item->title}}</h4>
			<p class="post-excerpt">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
			<a href="#!" class="post-permalink">READ MORE</a>
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