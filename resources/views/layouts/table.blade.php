@extends('layouts.main')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ url('assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"/>
@endsection

@section('content')

  @yield('content')
    
@endsection

@section('scripts')
  <script src="{{ url('assets/lib/datatables/datatables.net/js/jquery.dataTables.js') }}" type="text/javascript"></script>
  <script src="{{ url('assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
  <script src="{{ url('assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>

  <script>
    $(document).ready( function () {
        $('#dataTable').DataTable({
          responsive: true
        });
        $('#dataTable2').DataTable({
          responsive: true
        });
    } );

    $(".delete-button").click(function() {
          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            confirmButtonText: 'Yes, delete it!',
            showCloseButton: true,
            showCancelButton: true,
            customClass: 'colored-header colored-header-danger'
          }).then((result) => {
            if (result.value) {
              $('#dataTable').DataTable().row($(this).parent().parent())
              .remove()
              .draw();
              $('#dataTable2').DataTable().row($(this).parent().parent())
              .remove()
              .draw();

              $.ajax({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },

                  url: $(this).attr("data-link"),
                  type: 'DELETE',
                  method: 'DELETE',
                  contentType: 'application/json',
                  success: function(response) {
                      swal({
                        position: 'top-end',
                        type: 'success',
                        title: 'Record has been deleted',
                        showConfirmButton: false,
                        timer: 2000,
                        customClass: 'content-header-center'
                      });
                  }
              });
            }
          });
      }); 
  </script>
@endsection