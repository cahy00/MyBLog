@extends('layouts.index')

@push('name')
		
@endpush

@section('content')
<main class="blog-post-single">
	<div class="container">
		<h1 class="post-title wow fadeInUp">Berkarya sesukamu</h1>
		<div class="row">
			<div class="col-md-8 blog-post-wrapper">
				<div class="comment-section wow fadeInUp">
					<h5 class="section-title">Mengetik....</h5>
					@if (session('success'))
							<div class="alert alert-success">Berhasil Input</div>
					@endif
					<form action="/store-post" class="oleez-comment-form" method="POST" enctype="multipart/form-data">
						@csrf
							<div class="row">
									<div class="form-group col-md-6">
											<input type="text" class="oleez-input" id="title" name="title" required autocomplete="off" autofocus>
											<label for="title">*Title</label>
									</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" class="oleez-input" id="category" name="id" required autocomplete="off">
									<label for="category">*Category</label>
							</div>
								<div class="form-group col-md-6">
									<input type="file" name="image" class="oleez-input" id="image" required autocomplete="off">
								</div>
							</div>
							<div class="row">
									<div class="form-group col-12">
											<label for="body">*Article</label>
											<textarea name="body" id="body" rows="10" class="oleez-textarea" required autocomplete="off"></textarea>
									</div>
							</div>
							<div class="row">
									<div class="col-12">
											<button type="submit" class="btn btn-submit">Input</button>
									</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection

@push('script')


<script>
	$(document).ready(function() {
  $('#body').summernote();
});
</script>
@endpush

@push('script')
<script>
	new WOW().init();
</script>
@endpush

