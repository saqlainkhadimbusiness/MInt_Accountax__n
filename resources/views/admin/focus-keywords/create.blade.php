@extends('layouts.admin.form')

@section('content')

    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">Add Keywords</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.focus-keywords.store') }}">
                            @csrf

                            <div class="form-group pt-2">
                                <label for="keyword">Keywords</label>
                                <input class="form-control"  data-role="tagsinput" id="keyword" type="text" name="keyword" placeholder="Enter Keywords" required>
                            </div>

                            <div class="form-group pt-2">
                                <label for="url">Url</label>
                                <select class="form-control"  id="keyword"  name="slug[]" placeholder="Enter Keywords" multiple required>
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