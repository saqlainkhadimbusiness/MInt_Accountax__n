@extends('layouts.main')

@section('content')

	<section class="section section-bredcrumbs">
		<div class="container context-dark breadcrumb-wrapper">
			<h1>Update Profile</h1>
		</div>
	</section>

	<section class="section-md bg-default">
		<div class="container">
			<form class="rd-form" method="post" action="{{ route('user.profile.update') }}">
                @method('PUT')
				@csrf

				<div class="row">
					<div class="col-7">
			            <div class="form-wrap">
			              <label for="name">Name</label>
			              <input class="form-input" id="name" type="text" name="name" data-constraints="@Required" value="{{ $user->name }}">
			            </div>
		            </div>
        		</div>

				<div class="row">
					<div class="col-7">
			            <div class="form-wrap">
			              <label for="phone">Phone</label>
			              <input class="form-input" id="phone" type="text" name="phone" value="{{ $user->phone }}">
			            </div>
		            </div>
        		</div>

        		<div class="row">
					<div class="col-7">
			            <div class="form-wrap">
			              <label for="company">Company</label>
			              <input class="form-input" id="company" type="text" name="company" value="{{ $user->company }}">
			            </div>
		            </div>
        		</div>

        		<div class="row">
					<div class="col-7">
			            <div class="form-wrap">
			              <label for="address">Address</label>
              			  <textarea class="form-input" name="address" id="address">{{ $user->address }}</textarea>
			            </div>
		            </div>
        		</div>

        		<div class="row">
					<div class="col-7">
			            <div class="form-wrap">
			              <label for="country">Country</label>
			              <select class="form-input" name="country" id="country">
			              	@if ($user->country != '')
			              		<option value="{{ $user->country }}">{{ $user->country }}</option>
			              	@endif
		                    @include('partials.countries')
		                  </select>
			            </div>
		            </div>
        		</div>

        		<div class="row">
					<div class="col-7">
			            <div class="form-wrap">
			              <label for="city">City</label>
			              <input class="form-input" id="city" type="text" name="city" value="{{ $user->city }}">
			            </div>
		            </div>
        		</div>
	            
	            <div class="row">
	            	<div class="col-5">
		            	<button class="button button-primary" type="submit">Submit</button>
		            </div>
	            </div>
	        </form>
		</div>
    </section>

@endsection