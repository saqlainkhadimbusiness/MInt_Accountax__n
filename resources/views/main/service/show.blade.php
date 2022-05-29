@extends('layouts.main')

@section('title', $service->meta_keywords . ' | ' . config('app.name'))
@section('description', $service->meta_description)

@section('content')
  <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client') }}"></script>

  <section class="section section-bredcrumbs">
    <div class="container context-dark breadcrumb-wrapper">
      <h1>{{ $service->title }}</h1>
    </div>
  </section>

  <section class="section section-md bg-default">
    <div class="container">
      {!! $service->body !!}
      
      @auth
        <form action="{{ url('user/service') }}" method="post" id="payment-form">
          @csrf
          <input type="hidden" name="service" value="{{ $service->id }}">

          <div class="row">
            @if(!empty($service->price))
            <div class="col-md-4 col-lg-4 mt-2">
                <div class="price-box-1">
                  <div class="title" style="font-size:2.5em;">Basic</div>
                  <div class="heading-4 price">£{{ $service->price }} + VAT</div>
                  <br>
                  
                  <h5><input type="radio" name="price" value="{{ $service->price }}" required> Select this package</h5>
                </div>
             </div>
             @endif

             @if(!empty($service->price1))
               <div class="col-md-4 col-lg-4 mt-2">
                  <div class="price-box-1">
                    <div class="title" style="font-size:2.5em;">Standard</div>
                    <div class="heading-4 price">£{{ $service->price1 }} + VAT</div>
                    <br>

                    <h5><input type="radio" name="price" value="{{ $service->price1 }}" required> Select this package</h5>
                  </div>
               </div>
              @endif

             @if(!empty($service->price2))
               <div class="col-md-4 col-lg-4 mt-2">
                  <div class="price-box-1">
                    <div class="title" style="font-size:2.5em;">Premium</div>
                    <div class="heading-4 price">£{{ $service->price2 }} + VAT</div>
                    <br>

                    <h5><input type="radio" name="price" value="{{ $service->price2 }}" required> Select this package</h5>
                  </div>
               </div>
             @endif
          </div>

          @if(!empty($service->price) || !empty($service->price2) || !empty($service->price3))
          <br>

          <div class="form-row">
            <button class="btn btn-primary">Add To Cart</button>
          </div>
          @endif
        </form>
      @endauth

      @guest
          <h3 style="text-align: center;"><a href="{{ route('login') }}">Login</a> to buy this service.</h3>
      @endguest
    </div>
  </section>

@endsection