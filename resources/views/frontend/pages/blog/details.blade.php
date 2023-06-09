@extends('base.frontend.master')

@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="main-page-header speaker-banner bg_img" data-background="{{ asset('frontend/assets/images/banner/banner07.jpg') }}">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">blog single</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="blog.html">
                            blog
                        </a>
                    </li>
                    <li>
                        blog single
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Blog-Section========== -->
    <section class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-8 mb-50 mb-lg-0">
                    <article>
                        <div class="post-item post-details">
                            <div class="post-thumb">
                                <img src="{{ asset('frontend/assets/images/blog/blog01.jpg') }}" alt="blog">
                            </div>
                            <div class="post-content">
                                <div class="post-meta text-center">
                                    <div class="item">
                                        <a href="#0">
                                            <i class="flaticon-conversation"></i>
                                            <span>30</span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#0">
                                            <i class="flaticon-share-1"></i>
                                            <span>22</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="entry-content p-0">
                                        <div class="left">
                                            <span class="date">Dece 15, 2020 BY </span>
                                        </div>
                                    </div>
                                    <div class="post-header">
                                        <h4 class="m-title">
                                            Cheap Movie Tickets - Bring Your Loved Ones to See New Releases
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua.Quis ipsum suspendisse ultrices gravida. Risus do viverra maecenas accumsan lacus vel facilisis.
                                        </p>
                                        <blockquote>
                                            Modi perferendis ipsa, dolorum eaque accusantium! Velitlibero fugit dolores repellendus consequatur nisi, deserunt aperiam a ea ex hic, iusto atque, quas. Aliquam rerum dolores saepe sunt, assumenda voluptas.
                                        </blockquote>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua.Quis ipsum suspendisse ultrices gravida. Risus do viverra maecenas accumsan lacus vel facilisis. 
                                        </p>
                                        <h4 class="title">
                                            Bring Your Loved Ones to See New Releases
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua.Quis ipsum suspendisse ultrices gravida. Risus do viverra maecenas accumsan lacus vel facilisis. 
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua.Quis ipsum suspendisse ultrices gravida. Risus do viverra maecenas accumsan lacus vel facilisis. 
                                        </p>
                                    </div>
                                    <div class="tags-area">
                                        <div class="tags">
                                            <span>
                                                Tags : 
                                            </span>
                                            <div class="tags-item">
                                                <a href="#0"> Tickets </a>
                                                <a href="#0"> Coming Soon </a>
                                                <a href="#0"> Movies </a>
                                            </div>
                                        </div>
                                        <ul class="social-icons">
                                            <li>
                                                <a href="#0">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0" class="active">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <i class="fab fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="author-thumb">
                                <a href="#0">
                                    <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="blog">
                                </a>
                            </div>
                            <div class="author-content">
                                <h5 class="title">
                                    <a href="#0">
                                        Lee Burke 
                                    </a>
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua.Quis ipsum suspendisse .
                                </p>
                            </div>
                        </div>
                        <div class="blog-comment">
                            <h5 class="title">comments</h5>
                            <ul class="comment-area">
                                <li>
                                    <div class="blog-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-thumb-info">
                                        <span>13 days ago</span>
                                        <h6 class="title"><a href="#0">carl morgan</a></h6>
                                    </div>
                                    <div class="blog-content">
                                        <p>
                                            Maecenas at velit eu erat egestas vestibulum id ut tellus. Sed et semper mauris. Quisque eu lorem libero. Donec finibus metus tellus, eget rutrum est mattis non.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-thumb-info">
                                        <span>13 days ago</span>
                                        <h6 class="title"><a href="#0">john flores</a></h6>
                                    </div>
                                    <div class="blog-content">
                                        <p>
                                            Maecenas at velit eu erat egestas vestibulum id ut tellus. Sed et semper mauris. Quisque eu lorem libero. Donec finibus metus tellus, eget rutrum est mattis non.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-thumb-info">
                                        <span>13 days ago</span>
                                        <h6 class="title"><a href="#0">carl morgan</a></h6>
                                    </div>
                                    <div class="blog-content">
                                        <p>
                                            Maecenas at velit eu erat egestas vestibulum id ut tellus. Sed et semper mauris. Quisque eu lorem libero. Donec finibus metus tellus, eget rutrum est mattis non.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="leave-comment">
                                <h5 class="title">leave comment</h5>
                                <form class="blog-form">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Your Full Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Your Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Write A Message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Submit Now">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-10 col-md-8">
                    <aside>
                        <div class="widget widget-search">
                            <h5 class="title">search</h5>
                            <form class="search-form">
                                <input type="text" placeholder="Enter your Search Content" required>
                                <button type="submit"><i class="flaticon-loupe"></i>Search</button>
                            </form>
                        </div>
                        <div class="widget widget-post">
                            <h5 class="title">latest post</h5>
                            <div class="slider-nav">
                                <span class="flaticon-angle-pointing-to-left widget-prev"></span>
                                <span class="flaticon-right-arrow-angle widget-next active"></span>
                            </div>
                            <div class="widget-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="#0">
                                            <img src="{{ asset('frontend/assets/images/blog/slider01.jpg') }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="p-title">
                                            <a href="#0">Three Ways to Book Sporting Event Tickets</a>
                                        </h6>
                                        <div class="meta-post">
                                            <a href="#0" class="mr-4"><i class="flaticon-loupe"></i>20 Comments</a>
                                            <a href="#0"><i class="flaticon-loupe"></i>466 View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <a href="#0">
                                            <img src="{{ asset('frontend/assets/images/blog/slider01.jpg') }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="p-title">
                                            <a href="#0">Three Ways to Book Sporting Event Tickets</a>
                                        </h6>
                                        <div class="meta-post">
                                            <a href="#0" class="mr-4"><i class="flaticon-loupe"></i>20 Comments</a>
                                            <a href="#0"><i class="flaticon-loupe"></i>466 View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="social-icons">
                                <li>
                                    <a href="#0" class="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="active">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-categories">
                            <h5 class="title">categories</h5>
                            <ul>
                                <li>
                                    <a href="#0">
                                        <span>Showtimes & Tickets</span><span>50</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span>Latest Trailers</span><span>43</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span>Coming Soon </span><span>34</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span>In Theaters</span><span>63</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span>Release Calendar  </span><span>11</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span>Stars</span><span>30</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span>Horror Movie </span><span>55</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-tags">
                            <h5 class="title">featured tags</h5>
                            <ul>
                                <li>
                                    <a href="#0">creative</a>
                                </li>
                                <li>
                                    <a href="#0">design</a>
                                </li>
                                <li>
                                    <a href="#0">skill</a>
                                </li>
                                <li>
                                    <a href="#0">template</a>
                                </li>
                                <li>
                                    <a href="#0" class="active">landing</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Blog-Section========== -->

@endsection
