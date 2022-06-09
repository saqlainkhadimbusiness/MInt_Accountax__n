@extends('layouts.main')

@section('title', home_title())
@section('description',home_title_desc())

@section('content')

    <section class="section swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="5000"
        data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
            <div class="swiper-slide context-dark" data-slide-bg="images/slider-1-1920x879.jpg">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-8">{!! isset($data->slider_text_1)?$data->slider_text_1:"" !!}
{{--                                <h1 data-caption-animate="fadeInUp" data-caption-delay="100"><span
                                        class="font-weight-medium">Professional Accounting</span> <br> & Taxation Services
                                </h1>
                                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250"
                                    style="max-width: 600px">
                                    Mint Accountax is a leading comapny providing high quality accounting & tax services in
                                    UK.</p>
                                <br><br>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="images/slider-2-1920x879.jpg"
                style="background-position: 50% 50%">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-6">{!! isset($data->slider_text_2)?$data->slider_text_2:'' !!}
                                {{--<h1 data-caption-animate="fadeInUp" data-caption-delay="100"><span
                                        class="font-weight-medium">Quality Tax Help </span> for Your Business</h1>
                                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">Our team
                                    is ready to offer
                                    you consulting & any necessary help with your company’s taxation.</p>
                                <br><br>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="images/slider-3-1920x879.jpg"
                style="background-position: 50% 50%">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-8">{!! isset($data->slider_text_3)?$data->slider_text_3:'' !!}
                                {{--<h1 data-caption-animate="fadeInUp" data-caption-delay="100"><span
                                        class="font-weight-medium">Helping You Manage </span> Your Business Finance</h1>
                                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250"
                                    style="max-width: 700px">
                                    Since its establishment, Mint Accountax provides accounting assistance to companies of
                                    any size
                                    all over the UK.</p>
                                <br><br>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="container swiper-pagination-wrap">
            <div class="swiper-pagination"></div>
        </div>
    </section>


    <!-- Call to action-->
    <section class="section section-xs bg-primary">
        <div class="container">
            <div class="box-cta">
                <div class="box-cta-inner">
                    <h3>We will Improve <span class="font-weight-bold">Your Business</span> Efficiency</h3>
                </div>
                <div class="box-cta-inner">
                    <button class="button button-lg button-white" data-toggle="modal" data-target="#quote"
                        data-caption-animate="fadeInUp" data-caption-delay="450">Get a Quotation</button>
                </div>
            </div>
        </div>
    </section>

    @include('partials.quote_modal')

<!-- The Best Banking Choise-->
<section class="section section-lg">
   <div class="container">
      <div class="block-lg text-center">
         <h2>{{--Our Services--}}{{ isset($data->services_heading)?$data->services_heading:'' }}</h2>
         <p>{{isset($data->services_desc)?$data->services_desc:''}}</p>
       
      </div>
    
      <div class="row row-50 row-xxl-73">
         <div class="col-sm-6 col-md-4 wow fadeInLeft">
            <div class="blurb-image">
               <div class="icon {{isset($data->services_icon_1)?$data->services_icon_1:''}}"></div>
               <h6 class="title"><a href="https://www.mintaccountax.co.uk/{{isset($data->services_slug_1)?$data->services_slug_1:''}}">{{isset($data->services_heading_1)?$data->services_heading_1:''}}<!--Bookkeeping--></a></h6>
               <p class="exeption">{{isset($data->services_desc_1)?$data->services_desc_1:''}}{{--Your accounts are handled and you are provided financial details--}}.</p>
            </div>
         </div>
         <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="blurb-image">
               <div class="icon  {{isset($data->services_icon_2)?$data->services_icon_2:''}}"></div>
               <h6 class="title"><a href="https://www.mintaccountax.co.uk/{{isset($data->services_slug_2)?$data->services_slug_2:''}}">{{isset($data->services_heading_2)?$data->services_heading_2:''}}</a></h6>
               <p class="exeption">{{isset($data->services_desc_2)?$data->services_desc_2:''}}</p>
            </div>
         </div>
         <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="blurb-image">
                <div class="icon  {{isset($data->services_icon_3)?$data->services_icon_3:''}}"></div>
                <h6 class="title"><a href="https://www.mintaccountax.co.uk/{{isset($data->services_slug_3)?$data->services_slug_3:''}}">{{isset($data->services_heading_3)?$data->services_heading_3:''}}</a></h6>
                <p class="exeption">{{isset($data->services_desc_3)?$data->services_desc_3:''}}</p>
            </div>
         </div>
         <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="blurb-image">
                <div class="icon  {{isset($data->services_icon_4)?$data->services_icon_4:''}}"></div>
                <h6 class="title"><a href="https://www.mintaccountax.co.uk/{{isset($data->services_slug_4)?$data->services_slug_4:''}}">{{isset($data->services_heading_4)?$data->services_heading_4:''}}</a></h6>
                <p class="exeption">{{isset($data->services_desc_4)?$data->services_desc_4:''}}</p>
            </div>
         </div>
         <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="blurb-image">
                <div class="icon  {{isset($data->services_icon_5)?$data->services_icon_5:''}}"></div>
                <h6 class="title"><a href="https://www.mintaccountax.co.uk/{{isset($data->services_slug_5)?$data->services_slug_5:''}}">{{isset($data->services_heading_5)?$data->services_heading_5:''}}</a></h6>
                <p class="exeption">{{isset($data->services_desc_5)?$data->services_desc_5:''}}</p>
            </div>
         </div>
         <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="0.3s">
            <div class="blurb-image">
                <div class="icon  {{isset($data->services_icon_6)?$data->services_icon_6:''}}"></div>
                <h6 class="title"><a href="https://www.mintaccountax.co.uk/{{isset($data->services_slug_6)?$data->services_slug_6:''}}">{{isset($data->services_heading_6)?$data->services_heading_6:''}}</a></h6>
                <p class="exeption">{{isset($data->services_desc_6)?$data->services_desc_6:''}}</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- A Few Words About Our Bank-->
<section class="section section-lg bg-gray-100">
   <div class="container">
      <div class="block-lg text-center">
         <h2>A Few Words About Our Company</h2>
         <p>Mint Accountax was originated in 2019 and introducing you to the next level of accounting assistances and
            other advisories related to the financial system. Our main aim is the success of our clients including both
            individual and company.</p>
      </div>
      <div class="row row-20 justify-content-center justify-content-lg-between">
         <div class="col-md-10 col-lg-6 wow fadeIn"><img class="img-bordered" src="images/index-1-2-570x352.jpg" alt=""
               width="570" height="352" />
         </div>
         <div class="col-md-10 col-lg-6 col-xl-5">
            <div class="text-block-2">
               <p>The value-based personal services are offering by us with almost all the proficiency for which a
                  client expects from an accounting firm. We work with clients on all their personal and business
                  aspects or portfolios. The business is precise and tenacious in meeting the prompt needs of customers
                  and exercise premonition in anticipating any future assessment or other finance-related ramifications.
               </p>
               <div class="progress-linear-wrap">
                  <!-- Linear progress bar-->
                  <article class="progress-linear">
                     <div class="progress-header">
                        <p>Accounting</p>
                        <span class="progress-value">75</span>
                     </div>
                     <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear"></div>
                     </div>
                  </article>
                  <!-- Linear progress bar-->
                  <article class="progress-linear">
                     <div class="progress-header">
                        <p>Tax Advisory</p>
                        <span class="progress-value">50</span>
                     </div>
                     <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear"></div>
                     </div>
                  </article>
               </div>
               <a class="button button-lg button-primary" href="{{ url('about') }}">Read More</a>
            </div>
         </div>
      </div>
   </div>
</section>
@if( isset($reviews) && count($reviews) >  0)
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



    <section class="section section-lg">
        <div class="container">
            <h2 class="text-center">How We Work</h2>

            <div class="row">
                @if (!empty($services[4]))
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('images/LLP.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $services[4]->title }}</h5>
                                <p class="card-text">
                                    {{ str_limit($services[4]->meta_description, $limit = 100, $end = '...') }}</p>
                                <br>
                                <a href="{{ url('/' . $services[4]->slug) }}" class="button">View Details</a>
                                <button data-toggle="modal" data-target="#quote" data-caption-animate="fadeInUp"
                                    data-caption-delay="450" class="btn btn-primary">Get a Quotation</button>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($services[3]))
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('images/Companies.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $services[3]->title }}</h5>
                                <p class="card-text">
                                    {{ str_limit($services[3]->meta_description, $limit = 100, $end = '...') }}</p>
                                <br>
                                <a href="{{ url('/' . $services[3]->slug) }}" class="button">View Details</a>
                                <button data-toggle="modal" data-target="#quote" data-caption-animate="fadeInUp"
                                    data-caption-delay="450" class="btn btn-primary">Get a Quotation</button>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($services[1]))
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('images/Partnerships.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $services[1]->title }}</h5>
                                <p class="card-text">
                                    {{ str_limit($services[1]->meta_description, $limit = 100, $end = '...') }}</p>
                                <br>
                                <a href="{{ url('/' . $services[1]->slug) }}" class="button">View Details</a>
                                <button data-toggle="modal" data-target="#quote" data-caption-animate="fadeInUp"
                                    data-caption-delay="450" class="btn btn-primary">Get a Quotation</button>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($services[0]))
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('images/Sole Traders.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $services[0]->title }}</h5>
                                <p class="card-text">
                                    {{ str_limit($services[0]->meta_description, $limit = 100, $end = '...') }}</p>
                                <br>
                                <a href="{{ url('/' . $services[0]->slug) }}" class="button">View Details</a>
                                <button data-toggle="modal" data-target="#quote" data-caption-animate="fadeInUp"
                                    data-caption-delay="450" class="btn btn-primary">Get a Quotation</button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="section section-lg" id="what-we-do">
        <div class="container">
            <h2 class="text-center">The New Way to <span class="button button-primary">SUCCESS.</span></h2>
            <p class="text-center text-muted h5">Success through timely management reports.</p>
            <p class="text-center text-muted h5">Progress through better control on cash flows</p>
            <p class="text-center text-muted h5">Protective from tax authorities through exceptional tax planning</p>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-1">
                            <h3 class="card-title">Fixed Fee</h3>
                            <ul>
                                <li> We charge monthly with no hidden or surprise payments.</li>
                                <li> Possible to increase over a period of one year.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-2">
                            <h3 class="card-title">Fast Support</h3>
                            <ul>
                                <li> Get instant support when you need</li>
                                <li> Quick chat and call back availability</li>
                                <li> Designated account of your own</li>
                                <li> Support through a direct and friendly approach</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-3">
                            <h3 class="card-title">Cloud-Based Accounting</h3>
                            <ul>
                                <li> Online accounts with 24/7 accessibility</li>
                                <li> Easy to use software</li>
                                <li> Inclusive training conferences</li>
                                <li> Xero, Saga</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-4">
                            <h3 class="card-title">Real Time Pricing</h3>
                            <ul>
                                <li> Fast calculation of fee</li>
                                <li> Quick reply by email</li>
                                <li> Fee negotiation competence with 24/7 accessibility</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-5">
                            <h3 class="card-title">Trade Mark Registration</h3>
                            <ul>
                                <li> Absolute application procedure handling</li>
                                <li> Communication through IPO</li>
                                <li> Business standard recognition</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-6">
                            <h3 class="card-title">Company Address Service</h3>
                            <ul>
                                <li> Implicit Office Address</li>
                                <li> Mail Sending Address</li>
                                <li> Indexed Office Address</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Posts-->
    <section class="section section-lg bg-gray-100">
        <div class="container text-center">
            <h2>Latest Blog Posts</h2>
            <div class="row row-30 row-offset-4 text-left">

                @foreach ($articles as $article)
                    <div class="col-md-6 col-lg-4">
                        <article class="post-boxed">
                            <div class="post-meta">
                                <div class="post-meta-item">
                                    <div class="post-author"><span>by</span> <a href="javascript:void(0)">Mint
                                            Accountax</a>
                                    </div>
                                </div>
                                <div class="post-meta-item">
                                    <div class="post-date">{{ $article->created_at->diffForHumans() }}</div>
                                </div>
                            </div><a class="media-wrapper" href="{{ url('blog/' . $article->slug) }}"><img
                                    src="{{ url('uploaded/' . $article->image) }}" alt="{{ $article->title }}"
                                    width="370" height="272" /></a>
                            <div class="post-body">
                                <h6 class="post-title"><a
                                        href="{{ url('blog/' . $article->slug) }}">{{ $article->title }}</a></h6>
                                <p class="post-exeption">{{ $article->meta_description }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach



            </div>
            <div class="button-wrap-md"><a class="button button-lg button-primary" href="{{ url('blog') }}">View All
                    Blog
                    Posts</a></div>

    </section>


    {{-- rffend --}}
    <section class="section section-lg bg-default">
        <div class="container">
            <h2 class="text-center">Get in Touch</h2>
            <div class="row row-50 justify-content-between">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                    data-toggle="tab">Find Us</a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <ul class="contact-box">
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon mdi mdi-map-marker"></span>
                                            </div>
                                            <div class="unit-body"><a class="hover-text" href="#">Flat 7 Pedley
                                                    House, <br class="veil reveal-lg-inline">6 Ripplegate Walk, Barking,
                                                    London, United Kingdom,
                                                    IG11 0YB</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <ul class="contact-box">
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon mdi mdi-map-marker"></span>
                                            </div>
                                            <div class="unit-body"><a class="hover-text" href="#">Flat 7 Pedley
                                                    House, <br class="veil reveal-lg-inline">6 Ripplegate Walk, Barking,
                                                    London, United Kingdom,
                                                    IG11 0YB</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                            <div class="unit-body">
                                                <ul class="list-phones">
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon mdi mdi-email-outline"></span>
                                            </div>
                                            <div class="unit-body"><a class="hover-text"
                                                    href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <ul class="contact-box">
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon mdi mdi-map-marker"></span>
                                            </div>
                                            <div class="unit-body"><a class="hover-text" href="#">5432 Central
                                                    Street, <br class="veil reveal-lg-inline">Chicago, IL 43541-3243
                                                    USA</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                            <div class="unit-body">
                                                <ul class="list-phones">
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon mdi mdi-email-outline"></span>
                                            </div>
                                            <div class="unit-body"><a class="hover-text"
                                                    href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="group group-middle social-items"><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-twitter" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-instagram" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook-messenger" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-linkedin" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-snapchat" href="#"></a></div>
                </div>
                <div class="col-md-6">
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                        method="POST" action="{{ url('contact') }}">
                        @csrf
                        <input type="hidden" name="index" value="1">

                        <div class="form-wrap">
                            <input class="form-input form-control" id="contact-name" type="text" name="name"
                                data-constraints="@Required">
                            <label class="form-label" for="contact-name">Name</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-number" maxlength="11" type="number" name="number"
                                data-constraints="@Number @Required">
                            <label class="form-label" for="contact-number">Phone</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email"
                                data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email">E-mail</label>
                        </div>
                        <div class="form-wrap">
                            <label class="form-label" for="contact-body">Message</label>
                            <textarea class="form-input" id="contact-body" name="body" data-constraints="@Required"></textarea>
                        </div>
                        <button class="button button-primary" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
