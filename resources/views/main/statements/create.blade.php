@extends('layouts.main')

@section('content')

	<section class="section section-bredcrumbs">
		<div class="container context-dark breadcrumb-wrapper">
			<h1>Add New Statement</h1>
		</div>
	</section>

	<section class="section-md bg-default">
		<div class="container">
			<form class="rd-form" method="post" action="{{ route('statements.store') }}">
				@csrf

				<input type="hidden" name="bank_id" value="{{ $bankId }}">

				<div class="row">
					<div class="col-6">
			            <div class="form-wrap">
			              <input class="form-input" id="date" type="date" name="date" data-constraints="@Required">
			            </div>
	        		</div>

					<div class="col-6">
			            <div class="form-wrap">
			              <select class="form-input" name="type" id="type" onchange="ChangeTypeList()">
			              	<option value="">-- Select --</option>
			              	<option value="Money Out">Money Out</option>
			              	<option value="Money In">Money In</option>
			              </select>
			            </div>
		            </div>
	            </div>

	            <div class="row">
	            	<div class="col-6">
			            <div class="form-wrap">
			              <label class="form-label" for="details">Details</label>
			              <select class="form-input" name="details" id="detail"></select>
			            </div>
		            </div>
	            	<div class="col-6">
			            <div class="form-wrap">
			              <input class="form-input" id="payee" type="text" name="payee">
			              <label class="form-label" for="payee">Payee</label>
			            </div>
		            </div>
	            </div>

	            <div class="row">
					<div class="col-12">
			            <div class="form-wrap">
			              <input class="form-input" id="description" type="text" name="description" data-constraints="@Required">
			              <label class="form-label" for="description">Description</label>
			            </div>
		            </div>
	            </div>

	            <div class="row">
	            	<div class="col-6">
			            <div class="form-wrap">
			              <input class="form-input" id="net" type="number" step="0.01" name="net" data-constraints="@Required">
			              <label class="form-label" for="net">Net</label>
			            </div>
		            </div>
	            	<div class="col-6">
			            <div class="form-wrap">
			              <input class="form-input" id="vat" type="number" step="0.01" name="vat" value="0" data-constraints="@Required">
			              <label class="form-label" for="vat">Vat</label>
			            </div>
		            </div>
	            </div>
	            
	            <button class="button button-primary" type="submit">Submit</button>
	        </form>

			<br><br><br>
			<div class="row">
				<div class="col-10">
	        		<h3>Upload Statement</h3>
	        	</div>

				<div class="col-2">
	        		<a href="{{ url('Template.xlsx') }}" download>Click here to download sample file</a>
	        	</div>
	        </div>

	        <form class="rd-form" method="post" action="{{ route('statement.upload') }}" enctype="multipart/form-data">
				@csrf

				<input type="hidden" name="bank_id" value="{{ $bankId }}">

	            <div class="row">
					<div class="col-12">
			            <div class="form-wrap">
			              <input class="form-input" id="file" type="file" name="file" required>
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