@extends('layouts.app')

@section('content')
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <article class="row format-standard">
            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    {{ $post->title }}
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date">December 16, 2017</li>
                    <li class="cat">
                        In
                        <a href="#0">{{ $post->category->name }}</a>
                    </li>
                </ul>
            </div>
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <img src=" "  alt="">
                </div>
            </div>
            <div class="col-full s-content__main">
                <p class="lead">{{ $post->content }}</p>
                <p>
                    <img src="images/wheel-1000.jpg" srcset="images/wheel-2000.jpg 2000w, images/wheel-1000.jpg 1000w, images/wheel-500.jpg 500w" sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>
            </div>
        </article>
    </section>
@endsection