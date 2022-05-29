@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Add User</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.users.store') }}">
              	@csrf

                <div class="form-group pt-2">
                  <label for="name">Name</label>
                  <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="email">Email</label>
                  <input class="form-control" id="email" type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="phone">Phone</label>
                  <input class="form-control" id="phone" type="text" name="phone" placeholder="Enter Phone" value="{{ old('phone') }}">
                </div>

                <div class="form-group pt-2">
                  <label for="phone">Company</label>
                  <input class="form-control" id="company" type="text" name="company" placeholder="Enter Company" value="{{ old('company') }}">
                </div>

                <div class="form-group pt-2">
                  <label for="address">Address</label>
                  <textarea class="form-control" name="address" id="address" placeholder="Enter Address">{{ old('address') }}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="country">Country</label>
                  <select class="form-control" name="country" id="country">
                    @include('partials.countries')
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="city">City</label>
                  <input class="form-control" id="city" type="text" name="city" placeholder="Enter City" value="{{ old('city') }}">
                </div>
                
                <div class="form-group pt-2">
                  <label for="password">Password</label>
                  <input class="form-control" id="password" type="password" name="password" placeholder="Enter Password" required>
                </div>

                <div class="form-group pt-2">
                  <label for="password_confirmation">Confirm Password</label>
                  <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" placeholder="Enter Confirm Password" required>
                </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection