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
											<input type="text" class="oleez-input" id="title" name="title" required>
											<label for="title">*Title</label>
									</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" class="oleez-input" id="category" name="id" required >
									<label for="category">*Category</label>
							</div>
								<div class="form-group col-md-6">
									<input type="file" name="image" class="oleez-input" id="image">
								</div>
							</div>
							<div class="row">
									<div class="form-group col-12">
											<label for="body">*Article</label>
											<textarea name="body" id="body" rows="10" class="oleez-textarea" required></textarea>
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


{{-- <form action="/store-post" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="title">Judul</label>
		<input type="text" name="title" id="title" class="form-control">
	</div>
	<div class="form-group">
		<label for="body">Isi</label>
		<textarea name="body" id="body" cols="30" rows="10"></textarea>
	</div>
	<div class="form-group">
		<input type="file" name="image">
	</div>
	<button type="submit">Simpan</button>
</form> --}}
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

