@extends('layouts.main')

@section('title', $sector->meta_keywords . ' | ' . config('app.name'))
@section('description', $sector->meta_description)

@section('content')

  <section class="section section-bredcrumbs">
    <div class="container context-dark breadcrumb-wrapper">
      <h1>{{ $sector->title }}</h1>
    </div>
  </section>

  <section class="section section-md bg-default">
    <div class="container">
      {!! $sector->body !!}
    </div>
  </section>

@endsection