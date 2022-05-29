@extends('layouts.main')

@section('title', $article->title . ' | ' . config('app.name'))
@section('description', $article->meta_description)
@section('keywords', $article->meta_keywords)

@section('content')

	<section class="section section-bredcrumbs">
        <div class="container context-dark breadcrumb-wrapper">
          <h1>{{ $article->title }}</h1>
        </div>
      </section>

      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-xl-8">
              <div class="post-single-wrap">
                <div class="post-item">
                  <h2>{{ $article->title }}</h2>
                  <ul class="list-dotted">
                    <li>
                      <div class="post-author">
                        <div class="author-name">{{ config('app.name') }}</div>
                      </div>
                    </li>
                    <li>
                      <div class="post-time">{{ $article->created_at->diffForHumans() }}</div>
                    </li>
                    <li>
                      <div class="post-tag">{{ $article->category->name }}</div>
                    </li>
                  </ul>
                  <img class="img-bordered" src="{{ url('uploaded/' . $article->image) }}" alt="" width="770" height="472"/>
                  <br><br>

                  {!! $article->body !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-md bg-gray-100">
        <div class="container text-center">
          <h2 class="custom-title"><span>Recent Articles</span></h2>
          <div class="row row-30 row-offset-4 text-left">
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
	              </div><a class="media-wrapper" href="{{ url('blog/' . $article->slug) }}"><img src="{{ url('uploaded/' . $article->image) }}" alt="" width="370" height="272"/></a>
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
        </div>
      </section>

@endsection