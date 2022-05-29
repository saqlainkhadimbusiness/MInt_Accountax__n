@extends('layouts.main')

@section('content')

	<section class="section section-bredcrumbs">
		<div class="container context-dark breadcrumb-wrapper">
			<h1>Add New Account</h1>
		</div>
	</section>

	<section class="section-md bg-default">
		<div class="container">
			<form class="rd-form" method="post" action="{{ route('accounting.store') }}">
				@csrf

				<div class="row">
					<div class="col-6">
			            <div class="form-wrap">
			              <input class="form-input" id="name" type="text" name="name" data-constraints="@Required">
			              <label class="form-label" for="name">Account Holder Name</label>
			            </div>
	        		</div>

					<div class="col-6">
			            <div class="form-wrap">
			              <select class="form-input" name="account_type">
			              	<option value="Credit Card">Credit Card</option>
							<option value="Current Account">Current Account</option>
							<option value="Deposit Account">Deposit Account (Savings)</option>
			              </select>
			            </div>
		            </div>
	            </div>

	            <div class="row">
	            	<div class="col-6">
			            <div class="form-wrap">
			              <input class="form-input" id="bank_name" type="text" name="bank_name" data-constraints="@Required">
			              <label class="form-label" for="bank_name">Bank Name</label>
			            </div>
		            </div>
	            	<div class="col-6">
			            <div class="form-wrap">
			              <input class="form-input" id="sort_code" type="number" name="sort_code" data-constraints="@Numeric">
			              <label class="form-label" for="sort_code">Sort Code</label>
			            </div>
		            </div>
	            </div>
				
				<div class="row">
					<div class="col-12">
			            <div class="form-wrap">
			              <input class="form-input" id="account_number" type="number" name="account_number" data-constraints="@Required @Numeric">
			              <label class="form-label" for="account_number">Account Number</label>
			            </div>
		            </div>
	            </div>
	            
	            <button class="button button-primary" type="submit">Submit</button>
	        </form>
		</div>
    </section>

@endsection