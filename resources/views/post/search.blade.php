@extends('layouts.index')

@section('content')
<main class="blog-standard">
	<div class="container">
			<div class="row">
				<div class="col-md-8">
					@foreach ($result as $item)
						<article class="blog-post wow fadeInUp">
							<img src="{{asset($item->image)}}" alt="blog post" class="post-thumbnail img-thumbnail" height="1640" width="924" style="height: 1640px">
							{{-- Format waktu January 29, 2020 --}}
							<p class="post-date">{{$item->created_at}} by Sulistyo Cahyo</p> 
							<h4 class="post-title"><a href="/show-post/{{$item->id}}" style="text-decoration: none; color:black">{{$item->title}}</a></h4>
							<p class="post-excerpt">{!!substr($item->body, 0, 150)!!}</p>
							<a href="/show-post/{{$item->id}}" class="post-permalink">READ MORE......</a>
						</article>
					@endforeach
					<span>
						{{-- {{$post->links('vendor.pagination.simple-bootstrap-4')}} --}}
					</span>
				</div>
				
				@if ($result->count() == 0)
				<main class="error-page">
					<div class="container">
							<h1 class="error-code wow fadeInUp">404</h1>
							<p class="error-description wow fadeInUp">Oops! The page you are looking for does not exist. 
								It might have been removed or deleted.Go back to home page now, or stay, it is quiet out <a href="/">Here</a>.</p>
					</div>
				</main>
				@endif

				<div class="col-md-4">
					<div class="sidebar-widget wow fadeInUp">
						<h5 class="widget-title">Categories</h5>
						<div class="widget-content">
								<ul class="category-list">
									@foreach ($category as $item)
										<li><a href="/get-category/{{$item->id}}">{{$item->category_name}}</a></li>
									@endforeach
								</ul>
						</div>
					</div>
				</div> 

			</div>
	</div>
</main>		
@endsection