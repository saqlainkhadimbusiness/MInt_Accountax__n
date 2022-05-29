@extends('layouts.main')

@section('content')

    <section class="section section-bredcrumbs">
        <div class="container context-dark breadcrumb-wrapper">
          <h1>Home</h1>
        </div>
      </section>
      
      <section class="section-md bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row">
                <div class="col-4">
                  <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                      <div class="text-center">
                        <img src="{{ url('images/secretarial.svg')}}">
                        <h5 class="card-title"><b>Accounting</b></h5>
                      </div>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer bg-transparent border-dark text-center"><a href="{{ route('accounting.index') }}">View</a></div>
                  </div>
                </div>

                <div class="col-4">
                  <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                      <div class="text-center">
                        <img src="https://www.registeredaddress.co.uk/img/dashboard/dashboard-icons/scan.svg">
                        <h5 class="card-title"><b>My Services</b></h5>
                      </div>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer bg-transparent border-dark text-center"><a href="{{ route('payments.index') }}">View</a></div>
                  </div>
                </div>

                <div class="col-4">
                  <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                      <div class="text-center">
                        <img src="https://www.registeredaddress.co.uk/img/dashboard/dashboard-icons/scan.svg">
                        <h5 class="card-title"><b>Scanned Letters</b></h5>
                      </div>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer bg-transparent border-dark text-center"><a href="{{ route('letters.index') }}">View</a></div>
                  </div>
                </div>
              </div>

              <div class="rd-search-results"></div>
            </div>
          </div>
        </div>
      </section>

@endsection
