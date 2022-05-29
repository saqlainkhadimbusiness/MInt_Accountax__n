@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Update Payment</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.payments.update', $payment->id) }}">
                @method('PUT')
              	@csrf

                <div class="form-group pt-2">
                  <label for="title">Service</label>
                  <select class="form-control" name="service_id">
                    @foreach($services as $service)
                      <option value="{{ $service->id }}" {{ $service->id == $payment->service_id ? 'selected' : '' }}>{{ $service->title }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="amount">Amount</label>
                  <input class="form-control" id="amount" type="text" name="amount" placeholder="Enter Amount" value="{{ $payment->amount }}" required>
                </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection