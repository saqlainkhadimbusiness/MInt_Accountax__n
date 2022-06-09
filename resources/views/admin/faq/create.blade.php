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
                    <div class="card-header card-header-divider">FAQ</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.faq.store') }}">
                            @csrf
                         
                                <div class="form-group pt-2">
                                    <label for="Question">Question:</label>
                                    <input type="text" class="form-control" id="Question" type="text" name="Question"  maxlength="250" placeholder="Enter Question"
                                        required>
                                </div>
                                <div class="form-group pt-2">
                                    <label for="Answer">Answer</label>
                                    <textarea class="form-control" id="Answer" type="text" rows="5" cols="50" name="Answer" placeholder="Enter Services"
                                        required></textarea>
                                </div>

                            <div class="form-group pt-2">
                                <label for="url">Url</label>
                                <select class="form-control select2" id="keyword"  name="slug[]" placeholder="Enter Header Codes" multiple required>
                                    <option value="">Select url</option>
                                    <option value="home">Home</option>
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

                            <button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
