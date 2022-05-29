@extends('layouts.table')

@section('content')

    <section class="section section-bredcrumbs">
      <div class="container context-dark breadcrumb-wrapper">
        <h1>Order ID: {{ $order->id }}</h1>
      </div>
     </section>
      
    <section class="section-md bg-default">
      <div class="container">
        <h3>Amount: £{{ $order->amount / 100 }}</h3>
        <h3>Currency: {{ $order->currency }}</h3>
        <h3>Description: {{ $order->description }}</h3>
      </div>
    </section>

@endsection