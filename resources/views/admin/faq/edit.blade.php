@extends('layouts.admin.form')

@section('content')

	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Update FAQ</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.faq.update', $faq->id) }}">
                @method('PUT')
              	@csrf

                <div class="form-group pt-2">
                  <label for="name">Question</label>
                  <input class="form-control" id="name" type="text" name="Question"   maxlength="250" placeholder="Enter Name" value="{{ $faq->Question }}" required>
                </div>
                <div class="form-group pt-2">
                    <label for="name">Answer</label>
                    <textarea class="form-control" id="Answer" type="text" rows="5" cols="50" name="Answer" placeholder="Enter Services"
                              required>{{ $faq->Answer }}</textarea>
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
                      @foreach($slugs as $slug)
                              <option value="{{$slug}}"  selected>{{$slug}}</option>
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