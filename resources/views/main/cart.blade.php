@extends('layouts.main')

@section('styles')
  <link rel="stylesheet" href="{{ url('css/stripe.css') }}">
  <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content') 

   <section class="section section-bredcrumbs">
    <div class="container context-dark breadcrumb-wrapper">
      <h1>Checkout</h1>
    </div>
  </section>

  <section class="section section bg-default">
    <div class="container mt-4 mb-4">

      {{-- <div class="row">
        {{ var_dump(session()->get('cart.items')) }}
      </div> --}}

      @empty($items)
        <br>
        <h4 class="text-center">Your cart is empty</h4>
        <br>
      @else
        <table id="cart" class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Services</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
                
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item[0] }}</td>
                        <td>£{{ $item[1] }}</td>
                        <td>
                            <a href="javascript:void(0)" data-link="{{ route('cart.remove', $loop->index) }}" class="btn btn-danger btn-sm delete-button"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <h4 class="float-right"><b>Services: </b>£{{ $services_price }}</h4><br><br>
        <h4 class="float-right"><b>VAT (20%): </b>£{{ $vat }}</h4><br><br>
        <h4 class="float-right"><b>Total: </b>£{{ $total }}</h4>

        <br><br>

        <form method="POST" action="{{ route('user.checkout.proceed') }}" id="payment-form">
            @csrf
            <div class="form-row">
                <label for="card-element">
                Credit or Debit Card
                </label>
                <div id="card-element"></div>
                
                <div id="card-errors" role="alert"></div>
            </div>

            <br>
            <div class="form-row">
                <button class="btn btn-primary">Checkout</button>
            </div>
        </form>
      @endempty
    </div>
  </section>

@endsection

@section('scripts')
  <script src="{{ url('js/stripe.js') }}"></script>

  <script>
    $(".delete-button").click(function(e) {
        e.preventDefault();
        $(this).closest("tr").remove();
     
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $(this).attr("data-link"),
            type: 'DELETE',
            method: 'DELETE',
            contentType: 'application/json',
            success: function(response) {
                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: 'Item removed from cart',
                    showConfirmButton: false,
                    timer: 2000,
                    customClass: 'content-header-center'
                });
            }
        });
    });
</script>
@endsection