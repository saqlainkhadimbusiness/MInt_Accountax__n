@extends('layouts.main')

@section('content')

	<section class="section section-bredcrumbs">
		<div class="container context-dark breadcrumb-wrapper">
			<h1>Edit {{ $bank->name }}</h1>
		</div>
	</section>

	<section class="section-md bg-default">
		<div class="container">
			<form class="rd-form" method="post" action="{{ route('accounting.update', $bank->id) }}">
                @method('PUT')
				@csrf

				<div class="row">
					<div class="col-6">
			            <div class="form-wrap">
			              <label class="ml-1" for="name">Account Holder Name</label>
			              <input class="form-input" id="name" type="text" name="name" value="{{ $bank->name }}" data-constraints="@Required">
			            </div>
		            </div>

					<div class="col-6">
			            <div class="form-wrap">
			              <label class="ml-1" for="account_type">Account Type</label>
			              <select class="form-input" name="account_type">
			              	<option value="Credit Card" {{ $bank->account_type == 'Credit Card' ? 'selected' : '' }}>Credit Card</option>
							<option value="Current Account"  {{ $bank->account_type == 'Current Account' ? 'selected' : '' }}>Current Account</option>
							<option value="Deposit Account"  {{ $bank->account_type == 'Deposit Account' ? 'selected' : '' }}>Deposit Account (Savings)</option>
			              </select>
			            </div>
		            </div>
	            </div>

				<div class="row">
					<div class="col-6">
			            <div class="form-wrap">
			              <label class="ml-1" for="bank_name">Bank Name</label>
			              <input class="form-input" id="bank_name" type="text" name="bank_name" value="{{ $bank->bank_name }}" data-constraints="@Required">
			            </div>
		            </div>
				
					<div class="col-6">
			            <div class="form-wrap">
			              <label class="ml-1" for="sort_code">Sort Code</label>
			              <input class="form-input" id="sort_code" type="number" name="sort_code" value="{{ $bank->sort_code }}" data-constraints="@Numeric">
			            </div>
		        	</div>
	            </div>

	            <div class="row">
	            	<div class="col-12">
			            <div class="form-wrap">
			              <label class="ml-1" for="account_number">Account Number</label>
			              <input class="form-input" id="account_number" type="number" name="account_number" value="{{ $bank->account_number }}" data-constraints="@Required @Numeric">
			            </div>
		            </div>
	            </div>

	            <button class="button button-primary" type="submit">Submit</button>
	        </form>
		</div>
    </section>

@endsection