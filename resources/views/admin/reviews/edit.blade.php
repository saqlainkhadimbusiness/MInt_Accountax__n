@extends('layouts.admin.form')

@section('content')

    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">Edit Review</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.reviews.update', $review->review_id) }}">
                            @method('PUT')
                            @csrf

                            <div class="form-group pt-2">
                                <label for="person_name">Person name</label>
                                <input class="form-control" id="person_name" type="text" name="person_name" placeholder="Enter Name" value="{{$review->person_name}}" required>
                            </div>

                            <div class="form-group pt-2">
                                <label for="company_name">Company Name</label>
                                <input class="form-control" id="company_name" type="text" name="company_name" placeholder="Enter Company Name" value="{{$review->company_name}}"  required>
                            </div>

                            <div class="form-group pt-2">
                                <label for="position_in_company">Position  in  Company</label>
                                <input class="form-control" id="position_in_company" type="text" name="position_in_company" placeholder="Enter Position  in  Company" value="{{$review->position_in_company}}"  required>
                            </div>

                            <div class="form-group pt-2">
                                <label for="review_message">Review description</label>
                                <textarea class="form-control" id="review_message"  rows="5" type="text" name="review_message" placeholder="Enter Review description"   required>{{$review->review_message}}</textarea>

                            </div>


                            <button class="btn btn-space btn-primary btn-lg" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection