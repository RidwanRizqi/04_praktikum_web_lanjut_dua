@extends('layouts.template')

@section('title', 'News')

@section('banner')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Recent News</h4>
                            <h2>Our Recent News Entries</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('content')
    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            @foreach($news as $n)
                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="images/{{ $n->image }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>{{ $n->title }}</span>
                                        <a href="{{ URL('/news/' . $n->slug)  }}"><h4>{{ $n->title }} Details</h4></a>
                                        <ul class="post-info">
                                            <li><a href="#">{{ $n->author }}</a></li>
                                            <li><a href="#">{{ $n->date }}</a></li>
                                        </ul>
                                        <p>{{ $n->excerpt }}</p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">Best Templates</a>,</li>
                                                        <li><a href="#">TemplateMo</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
{{--                            <div class="col-lg-12">--}}
{{--                                <ul class="page-numbers">--}}
{{--                                    <li><a href="#">1</a></li>--}}
{{--                                    <li class="active"><a href="#">2</a></li>--}}
{{--                                    <li><a href="#">3</a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item search">
                                    <form id="search_form" name="gs" method="GET" action="#">
                                        <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="post-details.html">
                                                    <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                                                    <span>May 31, 2020</span>
                                                </a></li>
                                            <li><a href="post-details.html">
                                                    <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                                                    <span>May 28, 2020</span>
                                                </a></li>
                                            <li><a href="post-details.html">
                                                    <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                                                    <span>May 14, 2020</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item categories">
                                    <div class="sidebar-heading">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="#">- Nature Lifestyle</a></li>
                                            <li><a href="#">- Awesome Layouts</a></li>
                                            <li><a href="#">- Creative Ideas</a></li>
                                            <li><a href="#">- Responsive Templates</a></li>
                                            <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                                            <li><a href="#">- Creative &amp; Unique</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item tags">
                                    <div class="sidebar-heading">
                                        <h2>Tag Clouds</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">HTML5</a></li>
                                            <li><a href="#">Inspiration</a></li>
                                            <li><a href="#">Motivation</a></li>
                                            <li><a href="#">PSD</a></li>
                                            <li><a href="#">Responsive</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
