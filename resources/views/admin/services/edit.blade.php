@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Update Service</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.services.update', $service->id) }}">
                @method('PUT')
              	@csrf

                <div class="form-group pt-2">
                  <label for="title">Slug</label>
                  <input class="form-control" id="slug" type="text" name="slug" placeholder="Enter Slug" value="{{ $service->slug }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="heading">Heading</label>
                  <select id="heading" class="select2" name="heading_id">
                    @foreach($headings as $heading)
                      <option value="{{ $heading->id }}">{{ $heading->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="title">Title</label>
                  <input class="form-control" id="title" type="text" name="title" placeholder="Enter Title" value="{{ $service->title }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="editor1">Body</label>
                  <textarea id="editor1" name="body">{{ $service->body }}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="title">Package 1</label>
                  <input class="form-control" id="price" type="number" name="price" placeholder="Enter Package 1" value="{{ $service->price }}">
                </div>

                <div class="form-group pt-2">
                  <label for="title">Package 2</label>
                  <input class="form-control" id="price1" type="number" name="price1" placeholder="Enter Package 2" value="{{ $service->price1 }}">
                </div>

                <div class="form-group pt-2">
                  <label for="title">Package 3</label>
                  <input class="form-control" id="price2" type="number" name="price2" placeholder="Enter Package 3" value="{{ $service->price2 }}">
                </div>

                <div class="form-group pt-2">
                  <label for="meta_keywords">Meta Title</label>
                  <input class="form-control" id="meta_keywords" type="text" name="meta_keywords" placeholder="Enter Meta Title" value="{{ $service->meta_keywords }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="meta_description">Meta Description</label>
                  <input class="form-control" id="meta_description" type="text" name="meta_description" placeholder="Enter Meta Description"  value="{{ $service->meta_description }}" required>
                </div>
                <div class="form-group pt-2">
                  <label for="keywords_content">Focus keywords </label>
                  <input class="form-control" id="keywords_content" type="text" name="keywords_content" placeholder="Enter Focus keywords"  value="{{ $service->keywords_content }}" >
                </div>
                <div class="form-group pt-2">
                  <label for="title">Rank</label>
                  <input class="form-control" id="rank" type="number" name="rank" placeholder="Enter Rank" value="{{ $service->rank }}">
                </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection