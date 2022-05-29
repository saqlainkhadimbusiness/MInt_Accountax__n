@extends('layouts.main')

@section('title', $career->title . ' | ' . config('app.name'))
@section('description', $career->meta_description)
@section('keywords', $career->meta_keywords)

@section('content')

  <section class="section section-bredcrumbs">
    <div class="container context-dark breadcrumb-wrapper">
      <h1>{{ $career->title }}</h1>
    </div>
  </section>

  <section class="section section-md bg-default">
    <div class="container">
      {!! $career->body !!}
    </div>
  </section>

@endsection