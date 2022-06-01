@extends('layouts.admin.form')

@section('content')
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/tags-input/tagsinput.css') }}"/>
    {{--    select2 links--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><!-- jQuery base library needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <style>
        body { background-color: #fafafa;}
        /*.container { margin: 150px auto; }*/
        h2 { margin:20px auto; font-size:14px;}
        .badge { margin: 2px 5px; }
    </style>

    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">Add Keywords</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.focus-keywords.update',$keywords[0]->group_id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group pt-2">
                                <label for="name">Unique Name</label>
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Unique Name" value="{{$keywords[0]->name}}" required>
                            </div>

                            <div class="form-group pt-2">
                                <label for="keyword">Keywords</label>
                                <input type="text" data-role="tagsinput" class="form-control"  id="keyword"  name="keyword"  value="{{$keywords[0]->keyword}}" placeholder="Enter Keywords" required>
                            </div>

                            <div class="form-group pt-2">
                                <label for="url">Url</label>
                                <select class="form-control select2" id="keyword"  name="slug[]" placeholder="Enter Keywords" multiple required>
                                    <option value="">Select url</option>
                                    <option value="home">Home</option>

                                    @foreach($keywords as $keyword)
                                    <option value="{{$keyword->slug}}"  selected>{{$keyword->slug}}</option>
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

                            <button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script src="{{ url('assets/tags-input/tagsinput.js') }}"></script>

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

@endsection