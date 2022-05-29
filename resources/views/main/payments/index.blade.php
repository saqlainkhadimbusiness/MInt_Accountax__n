@extends('layouts.table')

@section('content')

    <section class="section section-bredcrumbs">
      <div class="container context-dark breadcrumb-wrapper">
        <h1>My Services</h1>
      </div>
     </section>
      
    <section class="section-md bg-default">
      <div class="container">

        <table  id="dataTable" class="table table-bordered table-striped" style="width:100% !important;">
          <thead>
              <tr>
                  <th>Order ID</th>
                  <th>Service Name</th>
                  <th>Amount</th>
                  <th>Created At</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->order_id }}</td>
                    <td>{{ $payment->service->title }}</td>
                    <td>£{{ $payment->amount }}</td>
                    <td>{{ $payment->created_at->diffForHumans() }}</td>
                    <td>
                      @if(strcmp($payment->order_id, 'Manual'))
                        <a href="{{ route('payments.show', $payment->id) }}" style="border: none;" class="button-primary button-circle button-sm">
                          <i class="icon icon-md novi-icon mdi mdi-eye"></i>
                        </a>
                      @endif
                    </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </section>

@endsection