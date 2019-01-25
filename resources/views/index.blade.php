@extends('layouts.frontend') 
@section('content')
<div class="header-spacer"></div>

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <article class="hentry post post-standard has-post-thumbnail sticky">

                <div class="post-thumb">
                    <img src="{{$first_post[0]->featured}}" alt="{{$first_post[0]->title}}">
                    <div class="overlay"></div>
                    <a href="app/img/post1.jpg" class="link-image js-zoom-image">
                        <i class="seoicon-zoom"></i>
                    </a>
                    <a href="#" class="link-post">
                        <i class="seoicon-link-bold"></i>
                    </a>
                </div>

                <div class="post__content">

                    <div class="post__content-info">

                        <h2 class="post__title entry-title ">
                            <a href="15_blog_details.html">{{$first_post[0]->title}}</a>
                        </h2>

                        <div class="post-additional-info">

                            <span class="post__date">

                                    <i class="seoicon-clock"></i>

                                    <time class="published" datetime="2016-04-17 12:00:00">
                                        {{$first_post[0]->created_at->diffForHumans()}}
                                    </time>

                                </span>

                            <span class="category">
                                    <i class="seoicon-tags"></i>
                                    <a href="#">{{$first_post[0]->category->name}}</a>
                                </span>

                            <span class="post__comments">
                                    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                    6
                                </span>

                        </div>
                    </div>
                </div>

            </article>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            @if(array_key_exists(1,$first_post->toArray()))
            <article class="hentry post post-standard has-post-thumbnail sticky">

                <div class="post-thumb">
                    <img src="{{$first_post[1]->featured}}" alt="{{$first_post[1]->title}}">
                    <div class="overlay"></div>
                    <a href="app/img/2.png" class="link-image js-zoom-image">
                        <i class="seoicon-zoom"></i>
                    </a>
                    <a href="#" class="link-post">
                        <i class="seoicon-link-bold"></i>
                    </a>
                </div>

                <div class="post__content">

                    <div class="post__content-info">

                        <h2 class="post__title entry-title ">
                            <a href="15_blog_details.html">T{{$first_post[1]->title}}</a>
                        </h2>

                        <div class="post-additional-info">

                            <span class="post__date">
                                    <i class="seoicon-clock"></i>

                                    <time class="published" datetime="2016-04-17 12:00:00">
                                        {{$first_post[1]->created_at->diffForHumans()}}
                                    </time>
                                </span>

                            <span class="category">
                                    <i class="seoicon-tags"></i>
                                    <a href="#">{{$first_post[1]->category->name}}</a>
                                </span>

                            <span class="post__comments">
                                    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                    6
                                </span>
                        </div>
                    </div>
                </div>

            </article>
            @endif
        </div>
        <div class="col-lg-6">
            @if(array_key_exists(2,$first_post->toArray()))
            <article class="hentry post post-standard has-post-thumbnail sticky">

                <div class="post-thumb">
                    <img src="{{$first_post[2]->featured}}" alt="{{$first_post[2]->title}}">
                    <div class="overlay"></div>
                    <a href="app/img/3.jpg" class="link-image js-zoom-image">
                        <i class="seoicon-zoom"></i>
                    </a>
                    <a href="#" class="link-post">
                        <i class="seoicon-link-bold"></i>
                    </a>
                </div>

                <div class="post__content">

                    <div class="post__content-info">

                        <h2 class="post__title entry-title ">
                            <a href="15_blog_details.html">{{$first_post[2]->title}}</a>
                        </h2>

                        <div class="post-additional-info">

                            <span class="post__date">

                                    <i class="seoicon-clock"></i>

                                    <time class="published" datetime="2016-04-17 12:00:00">
                                            {{$first_post[2]->created_at->diffForHumans()}}
                                    </time>

                                </span>

                            <span class="category">
                                    <i class="seoicon-tags"></i>
                                    <a href="#">{{$first_post[1]->category->name}}</a>
                                </span>

                            <span class="post__comments">
                                    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                    6
                                </span>

                        </div>
                    </div>
                </div>

            </article>
            @endif
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row medium-padding120 bg-border-color">
        <div class="container">
            <div class="col-lg-12">
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">{{$laravel->name}}</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">
                            @foreach ($laravel->posts()->take(3)->get() as $post)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{$post->featured}}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="#">{{$post->title}}</a></h6>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="padded-50"></div>
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">{{$tutorials->name}}</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="app/img/2.png" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="#">Investigationes demonstraverunt legere</a></h6>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="app/img/3.jpg" alt="our case">
                                    </div>
                                    <h6 class="text-center case-item__title">Claritas est etiam processus dynamicus</h6>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <img src="app/img/4.jpg" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">quod mazim placerat facer possim assum</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection