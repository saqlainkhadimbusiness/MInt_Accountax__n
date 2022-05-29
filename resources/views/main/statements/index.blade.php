@extends('layouts.table')

@section('content')

    <section class="section section-bredcrumbs">
        <div class="container context-dark breadcrumb-wrapper">
          <h1>{{ $bank->name }}</h1>
        </div>
      </section>
      
      <section class="section-md bg-default">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="float-right">
                <a href="{{ url('user/statements/create/?b=' . $bank->id) }}" class="btn btn-primary btn-sm float-right">Add Statement</a>
              </div>
            </div>
          </div>
          <br>

          <table  id="dataTable" class="table table-bordered table-striped" style="width:100% !important;">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bank->statements as $statement)
                  <tr>
                      <td>{{ $statement->date }}</td>
                      <td>{{ $statement->description }}</td>
                      <td>{{ $statement->type }}</td>
                      <td>{{ $statement->total }}</td>
                      <td>
                        <a href="{{ route('statements.edit', $statement->id) }}" class="button-primary button-circle button-sm">
                          <i class="icon icon-md novi-icon mdi mdi-table-edit"></i>
                        </a>&nbsp;
                        <button style="border: none;" href="javascript:void(0)" data-link="{{ route('statements.destroy', $statement->id) }}" class="button-primary button-circle button-sm delete-button">
                          <i class="icon icon-md novi-icon mdi mdi-delete"></i>
                        </button>
                      </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

          <br><br>
          <h3>Uploaded Statements</h3>
          <br>
          <table id="dataTable2" class="table table-bordered table-striped" style="width:100% !important;">
            <thead>
                <tr>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bank->uploaded_statements as $statement)
                  <tr>
                      <td>{{ $statement->created_at->diffForHumans() }}</td>
                      <td>
                        <a href="{{ url('uploaded/' . $statement->path) }}" style="border: none;" class="button-primary button-circle button-sm" download>
                          <i class="icon icon-md novi-icon mdi mdi-download"></i>
                        </a>&nbsp;
                        <button style="border: none;" href="javascript:void(0)" data-link="{{ route('statement.upload.destroy', $statement->id) }}" class="button-primary button-circle button-sm delete-button">
                          <i class="icon icon-md novi-icon mdi mdi-delete"></i>
                        </button>
                      </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </section>

@endsection