@extends('layouts.table')

@section('content')

    <section class="section section-bredcrumbs">
      <div class="container context-dark breadcrumb-wrapper">
        <h1>Scanned Letters</h1>
      </div>
     </section>
      
    <section class="section-md bg-default">
      <div class="container">

        <table  id="dataTable" class="table table-bordered table-striped" style="width:100% !important;">
          <thead>
              <tr>
                  <th>Created At</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @foreach($letters as $letter)
                <tr>
                    <td>{{ $letter->created_at->diffForHumans() }}</td>
                    <td>
                      <a href="{{ url('uploaded/' . $letter->file) }}" style="border: none;" class="button-primary button-circle button-sm" download>
                        <i class="icon icon-md novi-icon mdi mdi-download"></i>
                      </a>&nbsp;
                      <button style="border: none;" href="javascript:void(0)" data-link="{{ route('letters.destroy', $letter->id) }}" class="button-primary button-circle button-sm delete-button">
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