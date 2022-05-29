@extends('layouts.main')

@section('content')

	<section class="section section-bredcrumbs">
        <div class="container context-dark breadcrumb-wrapper">
          <h1>Contact Us</h1>
        </div>
      </section>

      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 justify-content-between">
            <div class="col-md-6 col-lg-4 col-xl-3">
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">San Diego</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-1-1">
                    <ul class="contact-box">
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="hover-text" href="#">Flat 7 Pedley House, <br class="veil reveal-lg-inline">6 Ripplegate Walk, Barking, London, United Kingdom, IG11 0YB</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-2">
                    <ul class="contact-box">
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="hover-text" href="#">2130 Marshall Street, <br class="veil reveal-lg-inline">New York, NY 65432-8767 USA</a></div>
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
                          <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                          <div class="unit-body"><a class="hover-text" href="mailto:#">info@demolink.org</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-3">
                    <ul class="contact-box">
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="hover-text" href="#">5432 Central Street, <br class="veil reveal-lg-inline">Chicago, IL 43541-3243 USA</a></div>
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
                          <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                          <div class="unit-body"><a class="hover-text" href="mailto:#">info@demolink.org</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="group group-middle social-items"><a class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook" href="#"></a><a class="icon icon-md icon-gray-400 novi-icon mdi mdi-twitter" href="#"></a><a class="icon icon-md icon-gray-400 novi-icon mdi mdi-instagram" href="#"></a><a class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook-messenger" href="#"></a><a class="icon icon-md icon-gray-400 novi-icon mdi mdi-linkedin" href="#"></a><a class="icon icon-md icon-gray-400 novi-icon mdi mdi-snapchat" href="#"></a></div>
            </div>
            <div class="col-md-6 col-lg-4">
              <h4>Get in Touch</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="POST" action="{{ url('contact') }}">
              	@csrf
              	
                <div class="form-wrap">
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Name</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-number" maxlength="11" type="number" name="number"
                     data-constraints="@Number @Required">
                  <label class="form-label" for="contact-number">Phone</label>
               </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-body">Message</label>
                  <textarea class="form-input" id="contact-body" name="body" data-constraints="@Required"></textarea>
                </div>
                <button class="button button-primary" type="submit">Send</button>
              </form>
            </div>
            <div class="col-md-12 col-lg-3">
              <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="4" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;: &quot;all&quot;,&quot;elementType&quot;: &quot;labels.text.fill&quot;,&quot;stylers&quot;: [{&quot;saturation&quot;: 36},{&quot;color&quot;: &quot;#333333&quot;},{&quot;lightness&quot;: 40}]},{&quot;featureType&quot;: &quot;all&quot;,&quot;elementType&quot;: &quot;labels.text.stroke&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;},{&quot;color&quot;: &quot;#ffffff&quot;},{&quot;lightness&quot;: 16}]},{&quot;featureType&quot;: &quot;all&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]},{&quot;featureType&quot;: &quot;administrative&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#fefefe&quot;},{&quot;lightness&quot;: 20}]},{&quot;featureType&quot;: &quot;administrative&quot;,&quot;elementType&quot;: &quot;geometry.stroke&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#fefefe&quot;},{&quot;lightness&quot;: 17},{&quot;weight&quot;: 1.2}]},{&quot;featureType&quot;: &quot;landscape&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#f5f5f5&quot;},{&quot;lightness&quot;: 20}]},{&quot;featureType&quot;: &quot;landscape&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#d5d5d5&quot;}]},{&quot;featureType&quot;: &quot;landscape.man_made&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#7574c0&quot;},{&quot;saturation&quot;: &quot;-37&quot;},{&quot;lightness&quot;: &quot;75&quot;}]},{&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#f5f5f5&quot;},{&quot;lightness&quot;: 21}]},{&quot;featureType&quot;: &quot;poi.business&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#7574c0&quot;},{&quot;saturation&quot;: &quot;-2&quot;},{&quot;lightness&quot;: &quot;53&quot;}]},{&quot;featureType&quot;: &quot;poi.park&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#dedede&quot;},{&quot;lightness&quot;: 21}]},{&quot;featureType&quot;: &quot;poi.park&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#7574c0&quot;},{&quot;lightness&quot;: &quot;69&quot;}]},{&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#7574c0&quot;},{&quot;lightness&quot;: &quot;25&quot;}]},{&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;geometry.stroke&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#ffffff&quot;},{&quot;lightness&quot;: 29},{&quot;weight&quot;: 0.2}]},{&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;labels.text.fill&quot;,&quot;stylers&quot;: [{&quot;lightness&quot;: &quot;38&quot;},{&quot;color&quot;: &quot;#000000&quot;}]},{&quot;featureType&quot;: &quot;road.arterial&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#ffffff&quot;},{&quot;lightness&quot;: 18}]},{&quot;featureType&quot;: &quot;road.local&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#ffffff&quot;},{&quot;lightness&quot;: 16}]},{&quot;featureType&quot;: &quot;transit&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#f2f2f2&quot;},{&quot;lightness&quot;: 19}]},{&quot;featureType&quot;: &quot;water&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#e9e9e9&quot;},{&quot;lightness&quot;: 17}]}]">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                  <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection