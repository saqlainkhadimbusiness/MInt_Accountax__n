@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Add Resource</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.resources.store') }}">
              	@csrf

                <div class="form-group pt-2">
                  <label for="title">Title</label>
                  <input class="form-control" id="title" type="text" name="title" placeholder="Enter Title" value="{{ old('title') }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="editor1">Body</label>
                  <textarea id="editor1" name="body">{{ old('body') }}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="meta_description">Meta Description</label>
                  <input class="form-control" id="meta_description" type="text" name="meta_description" placeholder="Enter Meta Description"  value="{{ old('meta_description') }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="meta_keywords">Meta Keywords</label>
                  <input class="form-control" id="meta_keywords" type="text" name="meta_keywords" placeholder="Enter Meta Keywords" value="{{ old('meta_keywords') }}" required>
                </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection