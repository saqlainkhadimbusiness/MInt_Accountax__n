@extends('layouts.main')

@section('content')

	<section class="section section-bredcrumbs">
		<div class="container context-dark breadcrumb-wrapper">
			<h1>Update Statement</h1>
		</div>
	</section>

	<section class="section-md bg-default">
		<div class="container">
			<form method="POST" action="{{ route('statements.update', $statement->id) }}">
                @method('PUT')
                @csrf

				<div class="row">
					<div class="col-6">
			            <label class="ml-1" for="date">Date</label>
			            <div class="form-wrap">
			              <input class="form-input" id="date" type="date" name="date" value="{{ $statement->date }}" data-constraints="@Required">
			            </div>
	        		</div>

					<div class="col-6">
			            <div class="form-wrap">
			              <label class="ml-1" for="type">Type</label>
			              <select class="form-input" name="type" id="type" onchange="ChangeTypeList()">
			              	<option value="Money Out" {{ $statement->type == 'Money Out' ? 'selected' : '' }}>Money Out</option>
			              	<option value="Money In" {{ $statement->type == 'Money In' ? 'selected' : '' }}>Money In</option>
			              </select>
			            </div>
		            </div>
	            </div>

	            <div class="row">
	            	<div class="col-6">
			            <div class="form-wrap">
			              <label class="ml-1" for="type">Details</label>
			              <select class="form-input" name="details" id="detail"></select>
			            </div>
		            </div>
	            	<div class="col-6">
			            <div class="form-wrap">
			            	<label class="ml-1" for="payee">Payee</label>
			              <input class="form-input" id="payee" type="text" value="{{ $statement->payee }}" name="payee">
			            </div>
		            </div>
	            </div>

	            <div class="row">
					<div class="col-12">
			            <div class="form-wrap">
			              <label class="ml-1" for="description">Description</label>
			              <input class="form-input" id="description" type="text" name="description" value="{{ $statement->description }}" data-constraints="@Required">
			            </div>
		            </div>
	            </div>

	            <div class="row">
	            	<div class="col-4">
			            <div class="form-wrap">
			              <label class="ml-1" for="net">Net</label>
			              <input class="form-input" id="net" type="number" step="0.01" name="net" value="{{ $statement->net }}" data-constraints="@Required">
			            </div>
		            </div>
	            	<div class="col-4">
			            <div class="form-wrap">
			              <label class="ml-1" for="vat">Vat</label>
			              <input class="form-input" id="vat" type="number" step="0.01" name="vat" value="{{ $statement->vat }}" data-constraints="@Required">
			            </div>
		            </div>

		            <div class="col-4">
			            <div class="form-wrap">
			              <label class="ml-1" for="total">Total</label>
			              <input class="form-input" id="total" type="number" step="0.01" value="{{ $statement->total }}" disabled>
			            </div>
		            </div>
	            </div>
	            
	            <button class="button button-primary" type="submit">Submit</button>
	        </form>
		</div>
    </section>

@endsection


@section('scripts')

	<script>
		var details = {};
		details['Money In'] = ['Advertising and PR', 'Accountacy', 'Bank Current Account', 'Bank Deposit Account', 'Books and Publications', 'Capital - Computer Equipment', 'Car / Equipment Hire', 'Child Cost', 'Cleaning', 'Company Credit Card', 'Computer Consumables', 'Computer Equipment Additions', 'Corporation Tax Payment', 'Currency Charges', 'Directors Loan Account', 'Office Stationery', 'Other Loan Repayments', 'Pensions', 'Postage and Carriage', 'Printing', 'Repairs and Maintenance', 'Sales Receipt', 'Subcontractor Costs', 'Subscriptions', 'Subsistance', 'Sundries', 'Telephone', 'Training Costs', 'Travel Costs', 'VAT', 'Water'];
		details['Money Out'] = ['Accountacy', 'Advertising and PR', 'Bank Current Account', 'Bank Deposit Account', 'Books and Publications', 'Capital - Computer Equipment', 'Car / Equipment Hire', 'Child Cost', 'Cleaning', 'Company Credit Card', 'Computer Consumables', 'Computer Equipment Additions', 'Corporation Tax Payment', 'Currency Charges', 'Directors Loan Account', 'Dividends', 'Donations', 'Electricity', 'Entertainment', 'Expense Advance', 'Gas', 'Gifts and Samples', 'Goods Bought for Resale', 'Hire Purchase', 'Hotels', 'Insurance', 'Interest paid', 'Internet', 'Land and Building Additions', 'Legal Fees', 'Mileage', 'Net Salary', 'NIC / PAYE', 'Office Machine Maintenace', 'Office Rent', 'Office Stationary', 'Other Loan Repayments', 'Pensions', 'Postage amd Carriage', 'Pensions', 'Professional Fees', 'Repairs and Maintenance', 'Subcontractors Costs', 'Subscriptions', 'Subsistence', 'Sundries', 'Telephone', 'Training Costs', 'Travel Costs', 'VAT', 'Water'];

		function ChangeTypeList() {
		  var typeList = document.getElementById("type");
		  var detailList = document.getElementById("detail");
		  var selType = typeList.options[typeList.selectedIndex].value;

		  while (detailList.options.length) {
		    detailList.remove(0);
		  }

		  var typeDetails = details[selType];
		  if (typeDetails) {
		    var i;
		    for (i = 0; i < typeDetails.length; i++) {
		      var typeDetail = new Option(typeDetails[i], typeDetails[i]);
		      detailList.options.add(typeDetail);
		    }
		  }
		}
	</script>

@endsection