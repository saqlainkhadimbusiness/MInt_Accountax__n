@extends('layouts.admin.form')

@section('content')
    {{--    select2 links--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><!-- jQuery base library needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">Add Header Codes</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.header-code.update',$header_codes[0]->group_id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group pt-2">
                                <label for="name">Unique Name</label>
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Unique Name"  value="{{$header_codes[0]->name}}" required>
                            </div>

                            <div class="form-group pt-2">
                                <label for="url">Url</label>
                                <select class="form-control select2" id="keyword"  name="slug[]" placeholder="Enter Header Codes" multiple required>
                                    <option value="">Select url</option>
                                    <option value="home">Home</option>
                                    @foreach($header_codes as $header_code)
                                        <option value="{{$header_code->slug}}"  selected>{{$header_code->slug}}</option>
                                    @endforeach
                                    @foreach($services as $slug)
                                        <option value="{{$slug->slug}}">{{$slug->slug}}</option>
                                    @endforeach
                                    @foreach($resources as $slug)
                                        <option value="{{$slug->slug}}">{{$slug->slug}}</option>
                                    @endforeach
                                    @foreach($careers as $slug)
                                        <option value="{{$slug->slug}}">{{$slug->slug}}</option>
                                    @endforeach
                                    @foreach($sectors as $slug)
                                        <option value="{{$slug->slug}}">{{$slug->slug}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group pt-2">
                                <label for="header_code">Header Code</label>
                                <textarea type="text"  class="form-control" rows="5" id="header_code"  name="header_code" placeholder="Enter header code  here" required> {!! $header_codes[0]->header_code !!}</textarea>
                            </div>
                            <button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

@endsection