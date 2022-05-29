@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Message by {{ $message->name }}</div>
            <div class="card-body">
              <div class="form-group pt-2">
                <label for="name">Name</label>
                <input class="form-control" type="text" value="{{ $message->name }}" readonly>
              </div>
              <div class="form-group pt-2">
                <label for="name">Phone</label>
                <input class="form-control" type="text" value="{{ $message->number }}" readonly>
              </div>
              <div class="form-group pt-2">
                <label for="name">Email</label>
                <input class="form-control" type="text" value="{{ $message->email }}" readonly>
              </div>
              <div class="form-group pt-2">
                <label for="name">Message</label>
                <textarea class="form-control" readonly>{{ $message->name }}</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection