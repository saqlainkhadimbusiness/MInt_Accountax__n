@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Update Heading</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.headings.update', $heading->id) }}">
                @method('PUT')
              	@csrf

                <div class="form-group pt-2">
                  <label for="name">Name</label>
                  <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name" value="{{ $heading->name }}" required>
                </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection