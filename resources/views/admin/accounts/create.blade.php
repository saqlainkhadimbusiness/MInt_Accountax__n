@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Add Account</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.accounts.store') }}">
              	@csrf

                <div class="form-group pt-2">
                  <label for="user_id">User</label>
                  <select class="form-control" name="user_id" id="user_id">
                    @foreach($users as $user)
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="name">Name</label>
                  <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name" required>
                </div>

                <div class="form-group pt-2">
                  <label for="account_type">Account Type</label>
                  <select class="form-control" name="account_type" id="account_type">
                    <option value="Credit Card">Credit Card</option>
                    <option value="Current Account">Current Account</option>
                    <option value="Deposit Account">Deposit Account (Savings)</option>
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="bank_name">Bank Name</label>
                  <input class="form-control" id="bank_name" type="text" name="bank_name" placeholder="Enter Bank Name" required>
                </div>

                <div class="form-group pt-2">
                  <label for="sort_code">Sort Code</label>
                  <input class="form-control" id="sort_code" type="number" name="sort_code" placeholder="Enter Sort Code" required>
                </div>

                <div class="form-group pt-2">
                  <label for="account_number">Account Number</label>
                  <input class="form-control" id="account_number" type="number" name="account_number" placeholder="Enter Account Number" required>
                </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection