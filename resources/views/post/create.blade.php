@extends('layouts.index')

@section('content')
<main class="blog-post-single">
	<div class="container">
		<h1 class="post-title wow fadeInUp">Berkarya sesukamu</h1>
		<div class="row">
			<div class="col-md-8 blog-post-wrapper">
				<div class="comment-section wow fadeInUp">
					<h5 class="section-title">Mengetik....</h5>
					{{-- @if (session('success'))
							<div class="alert alert-success">Berhasil Input</div>
					@endif --}}
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
										<label>*Tags</label>
										<select class="select2" name="tag" multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
											@foreach ($tag as $item)
												<option>{{$item->tag_name}}</option>
											@endforeach
										</select>
								</div>
									<div class="form-group col-md-6">
											<label>*Category</label>
											<select class="form-control select2" name="category_id" style="width: 100%;" data-placeholder="Select a Category">
												@foreach ($category as $item)
														<option value="{{$item->id}}">{{$item->category_name}}</option>
												@endforeach
											</select>
									</div>
							</div>
							<div class="row">
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
@include('sweetalert::alert')

@endsection


@push('script')

<!-- Select2 -->
<script>
	$(function(){
		$('.select2').select2()

		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
	});
</script>
<script>

</script>
<script>
	$(document).ready(function() {
  $('#body').summernote();
});
</script>

@endpush

