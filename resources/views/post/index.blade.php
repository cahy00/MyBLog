@extends('layouts.index')

@section('content')
<main class="blog-standard">
	<div class="container">
			<div class="row">
				<div class="col-md-8">
					@foreach ($post as $item)
						<article class="blog-post wow fadeInUp">
							<img src="{{$item->image}}" alt="blog post" class="post-thumbnail img-thumbnail">
							{{-- Format waktu January 29, 2020 --}}
							<p class="post-date">{{$item->created_at->format('M d, Y')}} by Sulistyo Cahyo</p> 
							<h4 class="post-title">{{$item->title}}</h4>
							<p class="post-excerpt">{!!substr($item->body, 0, 50)!!}</p>
							<a href="/show-post/{{$item->id}}" class="post-permalink">READ MORE</a>
						</article>
					@endforeach
					<span>
						{{$post->links()}}
					</span>
				</div>


				<div class="col-md-4">
					<div class="sidebar-widget wow fadeInUp">
						<h5 class="widget-title">Categories</h5>
						<div class="widget-content">
								<ul class="category-list">
										<li><a href="#!">Animation(12)</a></li>
										<li><a href="#!">Branding(2)</a></li>
										<li><a href="#!">Graphic Design(2)</a></li>
										<li><a href="#!">Photography</a></li>
										<li><a href="#!">Web Developing</a></li>
								</ul>
						</div>
					</div>
				</div>
			</div>
	</div>
</main>
@endsection

@push('script')

@endpush

<style>
	.w-5{
		display: none;
		width: 15px;
		padding: 15px;
	}
</style>