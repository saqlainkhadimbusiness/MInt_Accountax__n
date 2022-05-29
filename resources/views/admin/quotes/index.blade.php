@extends('layouts.admin.table')

@section('content')

    <div class="main-content container-fluid">
    	<div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Quotations
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover table-fw-widget" id="table4">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Turnover</th>
                        <th>Email</th>
                        <th>VAT Returns</th>
                        <th>Number</th>
                        <th>Payroll</th>
                        <th>Business</th>
                        <th>Bookkeeping</th>
                        <th>Employees</th>
                        <th>Transactions</th>
                        <th>Partners</th>
                        <th>Dormant</th>
                        <th>Trading</th>
                        <th>Created At</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      	@foreach($quotes as $quote)
	                      <tr class="gradeU">
                          <td>{{ $quote->name }}</td>
                          <td>{{ $quote->turnover }}</td>
                          <td>{{ $quote->email }}</td>
                          <td>{{ $quote->vat_returns ? 'Yes' : 'No' }}</td>
                          <td>{{ $quote->number }}</td>
                          <td>{{ $quote->payroll }}</td>
                          <td>{{ $quote->business_type }}</td>
                          <td>{{ $quote->bookkeeping ? 'Yes' : 'No' }}</td>
                          <td>{{ $quote->employees }}</td>
                          <td>{{ $quote->transactions }}</td>
                          <td>{{ $quote->partners }}</td>
                          <td>{{ $quote->dormant ? 'Yes' : 'No' }}</td>
                          <td>{{ $quote->not_trading ? 'No' : 'Yes' }}</td>
	                       	<td>{{ $quote->created_at->diffForHumans() }}</td>
                          <td>
	                       	  <a href="javascript:void(0)" data-link="{{ route('admin.quotes.destroy', $quote->id) }}" class="btn btn-danger delete-button"><span class="icon mdi mdi-delete"></span></a>
                          </td>
	                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>

@endsection