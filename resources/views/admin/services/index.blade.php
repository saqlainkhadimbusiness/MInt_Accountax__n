@extends('layouts.admin.table')

@section('content')

    <div class="main-content container-fluid">
    	<div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Service
                  <div class="tools">
                    <a href="{{ route('admin.services.create') }}" class="btn btn-success"><span class="text-white icon mdi mdi-plus-circle"></span></a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover table-fw-widget" id="table4">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Package 1</th>
                        <th>Rank</th>
                        <th>Created At</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      	@foreach($services as $service)
	                      <tr class="gradeU">
                          <td>{{ $service->title }}</td>
                          <td>{{ $service->price }}</td>
                          <td>{{ $service->rank }}</td>
	                       	<td>{{ $service->created_at->diffForHumans() }}</td>
                          <td>
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-info"><span class="icon mdi mdi-edit"></span></a>
	                       	  <a href="javascript:void(0)" data-link="{{ route('admin.services.destroy', $service->id) }}" class="btn btn-danger delete-button"><span class="icon mdi mdi-delete"></span></a>
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