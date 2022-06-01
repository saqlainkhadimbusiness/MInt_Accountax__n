@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Home</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.home.store') }}">
              	@csrf

                <div class="form-group pt-2">
                  <label for="home_title">Page Title</label>
                  <input class="form-control" id="home_title" type="text" rows="5" cols="50" name="home_title" placeholder="Enter Services" value="{{isset($data->home_title)?$data->home_title:""}}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="services">Our Services Content</label>
                  <textarea class="form-control" id="services" type="text" rows="5" cols="50" name="services" placeholder="Enter Services" required> {{isset($data->services_content)?$data->services_content:""}}</textarea>
                </div>


               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection