@extends('layouts.main')

@section('content')

	<section class="section section-bredcrumbs">
		<div class="container context-dark breadcrumb-wrapper">
			<h1>Change Password</h1>
		</div>
	</section>

	<section class="section-md bg-default">
		<div class="container">
			<form class="rd-form" method="post" action="{{ route('user.password.update') }}">
                @method('PUT')
				@csrf

				<div class="row">
					<div class="col-7">
			            <div class="form-wrap">
			              <input class="form-input" id="current_password" type="password" name="current_password" data-constraints="@Required">
			              <label class="form-label" for="current_password">Current Password</label>
			            </div>
		            </div>
        		</div>

				<div class="row">
	        		<div class="col-7">
			            <div class="form-wrap">
			              <input class="form-input" id="password" type="password" name="password" data-constraints="@Required">
			              <label class="form-label" for="password">Password</label>
			            </div>
	        		</div>
        		</div>

				<div class="row">
	        		<div class="col-7">
			            <div class="form-wrap">
			              <input class="form-input" id="password_confirmation" type="password" name="password_confirmation" data-constraints="@Required">
			              <label class="form-label" for="password_confirmation">Confrim Password</label>
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