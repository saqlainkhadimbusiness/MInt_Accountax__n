@extends('layouts.table')

@section('content')

    <section class="section section-bredcrumbs">
      <div class="container context-dark breadcrumb-wrapper">
        <h1>Accounting</h1>
      </div>
     </section>
      
    <section class="section-md bg-default">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <div class="float-right">
              <a href="{{ route('accounting.create') }}" class="btn btn-primary btn-sm float-right">Add New</a>
            </div>
          </div>
        </div>
        <br>

        <table  id="dataTable" class="table table-bordered table-striped" style="width:100% !important;">
          <thead>
              <tr>
                  <th>Name Of Account</th>
                  <th>Account Type</th>
                  <th>Bank Name</th>
                  <th>Sort Code</th>
                  <th>Account Number</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @foreach($banks as $bank)
                <tr>
                    <td>{{ $bank->name }}</td>
                    <td>{{ $bank->account_type }}</td>
                    <td>{{ $bank->bank_name }}</td>
                    <td>{{ $bank->sort_code }}</td>
                    <td>{{ $bank->account_number }}</td>
                    <td>
                      <a href="{{ route('accounting.show', $bank->id) }}" class="button-primary button-circle button-sm">
                        Enter Statement
                      </a>&nbsp;
                      <a href="{{ route('accounting.edit', $bank->id) }}" class="button-primary button-circle button-sm">
                        <i class="icon icon-md novi-icon mdi mdi-table-edit"></i>
                      </a>&nbsp;
                      <button style="border: none;" href="javascript:void(0)" data-link="{{ route('accounting.destroy', $bank->id) }}" class="button-primary button-circle button-sm delete-button">
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