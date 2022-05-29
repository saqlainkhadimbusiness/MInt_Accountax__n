@extends('layouts.main')

@section('title', $resource->title . ' | ' . config('app.name'))
@section('description', $resource->meta_description)
@section('keywords', $resource->meta_keywords)

@section('content')

  <section class="section section-bredcrumbs">
    <div class="container context-dark breadcrumb-wrapper">
      <h1>{{ $resource->title }}</h1>
    </div>
  </section>

  <section class="section section-md bg-default">
    <div class="container">
      {!! $resource->body !!}
    </div>
  </section>

@endsection