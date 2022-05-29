@extends('layouts.admin.form')

@section('content')

  <div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Update Account</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.accounts.update', $bank->id) }}">
                @method('PUT')
                @csrf

                <div class="form-group pt-2">
                  <label for="user_id">User</label>
                  <select class="form-control" name="user_id" id="user_id">
                    @foreach($users as $user)
                      <option value="{{ $user->id }}" {{ $bank->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="name">Name</label>
                  <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name" value="{{ $bank->name }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="account_type">Account Type</label>
                  <select class="form-control" name="account_type" id="account_type">
                    <option value="Credit Card" {{ $bank->account_type == 'Credit Card' ? 'selected' : '' }}>Credit Card</option>
                    <option value="Current Account"  {{ $bank->account_type == 'Current Account' ? 'selected' : '' }}>Current Account</option>
                    <option value="Deposit Account"  {{ $bank->account_type == 'Deposit Account' ? 'selected' : '' }}>Deposit Account (Savings)</option>
                  </select>
                </div>

                <div class="form-group pt-2">
                  <label for="bank_name">Bank Name</label>
                  <input class="form-control" id="bank_name" type="text" name="bank_name" placeholder="Enter Bank Name" value="{{ $bank->bank_name }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="sort_code">Sort Code</label>
                  <input class="form-control" id="sort_code" type="number" name="sort_code" placeholder="Enter Sort Code" value="{{ $bank->sort_code }}" required>
                </div>

                <div class="form-group pt-2">
                  <label for="account_number">Account Number</label>
                  <input class="form-control" id="account_number" type="number" name="account_number" value="{{ $bank->account_number }}" placeholder="Enter Account Number" required>
                </div>

                <button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection