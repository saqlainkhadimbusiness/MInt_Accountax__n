@extends('layouts.main')

@section('title', 'Blog' . ' | ' . config('app.name'))

@section('content')

  <section class="section section-bredcrumbs">
    <div class="container context-dark breadcrumb-wrapper">
      <h1>Blog</h1>
    </div>
  </section>

  <section class="section section-lg bg-gray-100">
    <div class="container">
      <div class="row row-40 justify-content-sm-center">
        @foreach($articles as $article)
          <div class="col-md-6 col-lg-4">
            <article class="post-boxed">
              <div class="post-meta">
                <div class="post-meta-item">
                  <div class="post-author"><span>by</span> <a href="javascript:void(0)">{{ config('app.name') }}</a>
                  </div>
                </div>
                <div class="post-meta-item">
                  <div class="post-date">{{ $article->created_at->diffForHumans() }}</div>
                </div>
              </div><a class="media-wrapper" href="{{ url('blog/' . $article->slug) }}"><img src="{{ url('uploaded/' . $article->image) }}" alt="{{ $article->alt_image?$article->alt_image:$article->title }}" width="370" height="272"/></a>
              <div class="post-body">
                <ul class="list-tags">
                  <li><a class="tag" href="javascript:void(0)">{{ $article->category->name }}</a>
                  </li>
                </ul>
                <h6 class="post-title"><a href="{{ url('blog/' . $article->slug) }}">{{ $article->title }}</a></h6>
                <p class="post-exeption">{{ $article->meta_description }}</p>
              </div>
            </article>
          </div>
        @endforeach
      </div>

      {{ $articles->links('vendor.pagination.default') }}
    </div>
  </section>

@endsection