@extends('layouts.main') 

@section('content') 

   <section class="section section-bredcrumbs">
    <div class="container context-dark breadcrumb-wrapper">
      <h1>Payment Methods</h1>
    </div>
  </section>

  <section class="section section bg-default">
    <div class="container mt-4 mb-4">
      @foreach($payments as $payment)
        <div class="row">
          <div class="col-3">
            <img src="{{ url('uploaded/' . $payment->image) }}" alt="{{ $payment->title }}">
          </div>
          <div class="col-9">
            <h3>{{ $payment->title }}</h3>
            <p>{!! $payment->body !!}</p>
          </div>
        </div>
      @endforeach
    </div>
  </section>

@endsection
