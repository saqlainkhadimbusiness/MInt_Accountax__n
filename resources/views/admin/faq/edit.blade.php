@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Update FAQ</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.faq.update', $faq->id) }}">
                @method('PUT')
              	@csrf

                <div class="form-group pt-2">
                  <label for="name">Question</label>
                  <input class="form-control" id="name" type="text" name="name1"   maxlength="250" placeholder="Enter Name" value="{{ $faq->Question }}" required>
                </div>
                <div class="form-group pt-2">
                    <label for="name">Answer</label>
                    <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name" value="{{ $faq->Answer }}" required>
                  </div>

               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>

@endsection