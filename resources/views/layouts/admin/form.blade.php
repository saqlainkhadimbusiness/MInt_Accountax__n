@extends('layouts.admin.main')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ url('assets/lib/summernote/summernote-bs4.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets/lib/select2/css/select2.min.css') }}"/>
@endsection

@section('content')

  @yield('content')

@endsection

@section('init')
	$('form').parsley();
	App.textEditors();
	App.formElements();
@endsection

@section('scripts')
    <script src="{{ url('assets/lib/parsley/parsley.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/lib/summernote/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/lib/summernote/summernote-ext-beagle.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/app-form-wysiwyg.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/lib/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/app-form-elements.js') }}" type="text/javascript"></script>
@endsection