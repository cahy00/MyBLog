@extends('layouts.index')

@section('content')
{{-- <main class="blog-standard">
	<div class="container">
			<div class="row">
				<div class="col-md-8">
						<article class="blog-post wow fadeInUp">
							<img src="{{asset($category->posts->image)}}" alt="blog post" class="post-thumbnail img-thumbnail" height="1640" width="924" style="height: 1640px">
							Format waktu January 29, 2020
							<p class="post-date">{{$category->posts->created_at->format('M d, Y')}} by Sulistyo Cahyo</p>
							<h4 class="post-title"><a href="/show-post/{{$category->posts->id}}" style="text-decoration: none; color:black">{{$category->posts->title}}</a></h4>
							<p class="post-excerpt">{!!substr($category->posts->body, 0, 150)!!} <span>....</span></p>
							<a href="/show-post/{{$category->posts->id}}" class="post-permalink">READ MORE</a>
						</article> 
					<span>
						{{$category->links('vendor.pagination.simple-bootstrap-4')}}
					</span>
				</div>

				@if ($category->count() == 0)
				<main class="error-page">
					<div class="container">
							<h1 class="error-code wow fadeInUp">404</h1>
							<p class="error-description wow fadeInUp">Oops! The page you are looking for does not exist. It might have been removed or deleted.Go back to home page now, or stay, it is quiet out here.</p>
					</div>
				</main>
				@endif
			</div>
	</div>
</main> --}}
@endsection

{{-- @foreach ($category as $item)
		{{$item->posts}}
@endforeach --}}
{{$category->title}}

