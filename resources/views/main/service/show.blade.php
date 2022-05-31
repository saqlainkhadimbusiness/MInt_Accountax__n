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
        @if(isset($faqs) && count($faqs)> 0 )
            <section id="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h1 class="text-center"><b>FAQ</b></h1>

                            <div class="accordion mt-5" id="accordionExample">

                                <div class="card">
                                    @php
                                        $a=1;
                                    @endphp
                                    @foreach ($faqs as $key =>$show)
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="heading{{$key}}">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed"  style="word-wrap: break-word;white-space: normal;font-weight:bolder;" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                                                          <b>  {{$show->Question}}</b>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordion">
                                                    <div class="card-body">
                                                        {{$show->Answer}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>
        @endif
        @if( isset($reviews) && count($reviews)>0)
            <section class="section section-lg bg-gray-100">
                <div class="container text-center">
                    <h2>Testimonials</h2>
                    <!-- Owl Carousel-->
                    <div class="owl-carousel text-left" data-items="1" data-md-items="2" data-dots="true" data-nav="false"
                         data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="true">
                        @foreach($reviews as  $review)
                            <blockquote class="quote quote-boxed">
                                <div class="quote-meta">
                                    <ul class="list-icons">
                                        @for($i=$review->rating;$i<=5;$i++)
                                            <li>
                                                <div class="icon mdi mdi-star"></div>
                                            </li>
                                        @endfor
                                    </ul>
                                    <div class="time">{{ $review->created_at->diffForHumans() }}</div>
                                </div>
                                <q>“{{substr($review->review_message, 0, 250) .  ((count_chars($review->review_message)  > 250)?'....':'') }}”</q>
                                <div class="quote-author">
                                    <div class="author-media"><img src="review_images/{{ $review->user_image }}" alt="{{ $review->user_image_alt }}" width="64" height="64" />
                                    </div>
                                    <div class="author-body">
                                        <div class="author">
                                            <cite>{{ $review->person_name }}</cite>
                                        </div>
                                        <div class="position">{{ $review->position_in_company }}, “”</div>
                                    </div>
                                </div>
                            </blockquote>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif


      @guest
          <h3 style="text-align: center;"><a href="{{ route('login') }}">Login</a> to buy this service.</h3>
      @endguest
    </div>
  </section>

@endsection