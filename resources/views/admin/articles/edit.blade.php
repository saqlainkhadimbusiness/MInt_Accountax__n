@extends('layouts.admin.form')

@section('content')

  <div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Update Article</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.articles.update', $article->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group pt-2">
                  <label for="title">Slug</label>
                  <input class="form-control" id="slug" type="text" name="slug" placeholder="Enter Slug" value="{{ $article->slug }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="category">Category</label>
                  <select id="category" class="select2" name="category_id">
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="title">Title</label>
                  <input class="form-control" id="title" type="text" name="title" placeholder="Enter Title" value="{{ $article->title }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="editor1">Body</label>
                  <textarea id="editor1" name="body">{{ $article->body }}</textarea>
                </div>

                <div class="form-group pt-2">
                  <input class="inputfile" id="file-2" type="file" name="image" accept="image/*">
                  <label class="btn-primary" for="file-2"> <i class="mdi mdi-upload"></i><span>Browse Image</span></label>
                </div>

                <div class="form-group pt-2">
                  <label for="meta_description">Meta Description</label>
                  <input class="form-control" id="meta_description" type="text" name="meta_description" placeholder="Enter Meta Description"  value="{{ $article->meta_description }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="meta_keywords">Meta Keywords</label>
                  <input class="form-control" id="meta_keywords" type="text" name="meta_keywords" placeholder="Enter Meta Keywords" value="{{ $article->meta_keywords }}" required>
                </div>

                <button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection