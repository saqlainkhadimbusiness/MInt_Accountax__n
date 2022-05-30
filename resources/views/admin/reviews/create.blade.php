@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Add Review</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.reviews.store') }}" enctype="multipart/form-data">
              	@csrf

                <div class="form-group pt-2">
                  <label for="person_name">Person name</label>
                  <input class="form-control" id="person_name" type="text" name="person_name" placeholder="Enter Name" required>
                </div>

                <div class="form-group pt-2">
                  <label for="company_name">Company Name</label>
                  <input class="form-control" id="company_name" type="text" name="company_name" placeholder="Enter Company Name" required>
                </div>

                <div class="form-group pt-2">
                  <label for="position_in_company">Position  in  Company</label>
                  <input class="form-control" id="position_in_company" type="text" name="position_in_company" placeholder="Enter Position  in  Company" required>
                </div>
                <div class="form-group pt-2">
                  <label for="rating">Rating  (between 1-5)</label>
                  <input class="form-control" id="position_in_company" type="number" name="rating" min="1" max="5" placeholder="Enter Rating " required>
                </div>

                <div class="form-group pt-2">
                  <label for="review_message">Review description</label>
                  <textarea class="form-control" id="review_message"  rows="5" {{--maxlength="250"--}} type="text" name="review_message" placeholder="Enter Review description" required></textarea>
                </div>
                <div class="form-group pt-2">
                  <input class="inputfile" id="file-2" type="file" name="image" accept="image/*">
                  <label class="btn-primary" for="file-2"> <i class="mdi mdi-upload"></i><span>Browse Image</span></label>
                </div>
                <div class="form-group pt-2">
                  <label for="user_image_alt">image Alt Keyword</label>
                  <input type="text" class="form-control" id="user_image_alt"  rows="5" type="text" name="user_image_alt" placeholder="Enter Alt Keyword  Here" >
                </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection