@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Add Payment</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.payments.store') }}">
              	@csrf

                <div class="form-group pt-2">
                  <label for="user_id">User</label>
                  <select class="form-control" name="user_id">
                    @foreach($users as $user)
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="service_id">Service</label>
                  <select class="form-control" name="service_id">
                    @foreach($services as $service)
                      <option value="{{ $service->id }}">{{ $service->title }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="amount">Amount</label>
                  <input class="form-control" id="amount" type="text" name="amount" placeholder="Enter Amount" value="{{ old('amount') }}" required>
                </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection