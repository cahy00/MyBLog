@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Input Data</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form action="/processpost" method="POST" class="form-horizontal form-label-left">
					@csrf
					
					<div class="form-group row ">
						<label class="control-label col-md-6 col-sm-6 ">Title <span class="required">*</span></label>
						<div class="col-md-8 col-sm-8 ">
							<input type="text" name="title" autofocus class="form-control @error('title') is-invalid @enderror" placeholder="Insert Title " value="{{old('title')}}">
							@error('title')
								<div class="invalid-feedback">{{$errors->first('title')}}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-6 col-sm-6 ">Category <span class="required">*</span></label>
						<div class="col-md-8 col-sm-8 ">
							<input type="text" name="category" class="form-control @error('category') is-invalid @enderror" placeholder="Category Type" value="{{old('category')}}">
							@error('category')
							<div class="invalid-feedback">{{$errors->first('category')}}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-6 col-sm-6">Input Tags <span class="required">*</span></label>
						<div class="col-md-8 col-sm-8 ">
							<input id="tags_1" name="tag[]" type="text" class="tags form-control @error('tag[]') is-invalid @enderror"  value="{{old('tag[]')}}"/>
							<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;" ></div>
							@error('tag[]')
							<div class="invalid-feedback">{{$errors->first('tag[]')}}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-6 col-sm-6 ">Image Thumbnail<span class="required">*</span></label>
						<div class="col-md-8 col-sm-8 ">
							<input type="file" name="image" class="form-control" value="" placeholder="Category Type">
							@error('image')
							<div class="invalid-feedback">{{$errors->first('image')}}</div>
							@enderror
						</div>
					</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Silahkan Menulis<small></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x-content">
				<div class="form-group col-12">
					<label for="body">*Article</label>
					<textarea name="body" id="body" rows="10" required autocomplete="off"></textarea>
				</div>
				<div class="form-group col-6">
					<button class="btn btn-primary" type="submit">Try</button>
				</div>
			</div>

			</form>
		</div>
	</div>
</div>
@endsection

@push('script')
<script>
	CKEDITOR.replace( 'body' );
</script>
@endpush