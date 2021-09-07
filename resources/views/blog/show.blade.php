@extends('layouts.show')

@section('content')

<section class="inner-banner">
            <!--
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">News Details</a></li>
                </ul>
                <h2 class="inner-banner__title">News Details</h2>
            </div>
            -->
            <!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img class="img-responsive" src="{{ $post->image_url }}" width="720px" height="300px" alt="">

                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <h2 class="blog-one__title">{{ $post->title }}

                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text">
                                    {!! $post->body_html !!}
                                </p>
                            </div><!-- /.blog-one__content -->
                        </div>
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__category">
                                <!--<h3 class="sidebar__title">Categories</h3>-->
                                <ul class="sidebar__category-list">
                                @foreach ($related as $post)
                                    <li class="sidebar__category-list-item"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></li>
                                @endforeach
                                </ul><!-- /.sidebar__category-list -->
                            </div><!-- /.sidebar__single -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->

@endsection
