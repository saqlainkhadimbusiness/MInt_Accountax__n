@extends('layouts.admin.table')

@section('content')

    <div class="main-content container-fluid">
    	<div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Accounts
                  <div class="tools">
                    <a href="{{ route('admin.accounts.create') }}" class="btn btn-success"><span class="text-white icon mdi mdi-plus-circle"></span></a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover table-fw-widget" id="table4">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Name Of Account</th>
                        <th>Bank Name</th>
                        <th>Sort Code</th>
                        <th>Created At</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      	@foreach($banks as $bank)
	                      <tr class="gradeU">
                          <td>{{ $bank->owner->name }}</td>
                          <td>{{ $bank->name }}</td>
                          <td>{{ $bank->bank_name }}</td>
                          <td>{{ $bank->sort_code }}</td>
	                       	<td>{{ $bank->created_at->diffForHumans() }}</td>
                          <td>
                            <a href="{{ route('admin.accounts.edit', $bank->id) }}" class="btn btn-info"><span class="icon mdi mdi-edit"></span></a>
	                       	  <a href="javascript:void(0)" data-link="{{ route('admin.accounts.destroy', $bank->id) }}" class="btn btn-danger delete-button"><span class="icon mdi mdi-delete"></span></a>
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