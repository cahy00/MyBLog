@extends('layouts.index')

@section('content')
<main class="blog-post-single">
	<div class="container">
			<h1 class="post-title wow fadeInUp">{{$post->title}}</h1>
			<div class="row">
					<div class="col-md-8 blog-post-wrapper">
							<div class="post-header wow fadeInUp">
									<img src="{{asset($post->image)}}" alt="blog post" class="post-featured-image">
									<p class="post-date">{{$post->created_at->format('M d, Y')}}</p>
							</div>
							<div class="post-content wow fadeInUp">
									<h4>Why you must experience design at least once</h4>
									<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
									<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
									<blockquote class="blockquote wow fadeInUp">
											<p>It’s safe to say that because of my unique professional experiences, I’ve tested out a lot of headphones.</p>
									</blockquote>
									<h5>The High-Quality Architecture Solutions from a Silicon Valley.</h4>
									<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
									<h5>Outdoor Work: a Designer’s Checklist for Every UX Project.</h4>
									<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
							</div>
							<div class="post-tags wow fadeInUp">
									<a href="#!" class="post-tag">Design Studio</a>
									<a href="#!" class="post-tag">Creative Design</a>
							</div>
							<div class="post-navigation wow fadeInUp">
									<button class="btn prev-post"> Prev Post</button>
									<button class="btn next-post"> Next Post</button>
							</div>
							<div class="comment-section wow fadeInUp">
									<h5 class="section-title">Leave a Reply</h5>
									<form action="POST" class="oleez-comment-form">
											<div class="row">
													<div class="form-group col-md-6">
															<input type="text" class="oleez-input" id="fullName" name="fullName" required>
															<label for="fullName">*Full name</label>
													</div>
													<div class="form-group col-md-6">
															<input type="email" class="oleez-input" id="fullName" name="email" required>
															<label for="email">*Email</label>
													</div>
											</div>
											<div class="row">
													<div class="form-group col-12">
															<label for="message">*Message</label>
															<textarea name="message" id="message" rows="10" class="oleez-textarea" required></textarea>
													</div>
											</div>
											<div class="row">
													<div class="col-12">
															<button type="submit" class="btn btn-submit">Send</button>
													</div>
											</div>
									</form>
							</div>
					</div>
					<div class="col-md-4">
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
					</div>
				
			</div>
	</div>
</main>
@endsection