@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Add Manual Payment</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.manual-payments.store') }}" enctype="multipart/form-data">
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
                  <input class="inputfile" id="file-2" type="file" name="image" accept="image/*">
                  <label class="btn-primary" for="file-2"> <i class="mdi mdi-upload"></i><span>Browse Image</span></label>
                </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection