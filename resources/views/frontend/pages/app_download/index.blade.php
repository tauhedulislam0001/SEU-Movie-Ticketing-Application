@extends('base.frontend.master')

@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="speaker-banner bg_img" data-background="{{ asset('frontend/assets/images/banner/banner07.jpg5') }}">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">Apps Download</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            Pages
                        </a>
                    </li>
                    <li>
                        Apps Download
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->
    
    <!-- ==========Speaker-Single========== -->
    <section class="apps-seciton padding-top pt-lg-0">
        <div class="container">
            <div class="apps-wrapper bg-six padding-top padding-bottom">
                <div class="bg_img apps-bg" data-background="{{ asset('frontend/assets/images/apps/apps_one.png') }}"></div>
                <div class="section-header-3">
                    <span class="cate">get Boleto  app</span>
                    <h2 class="title">app download</h2>
                </div>
                <div class="row">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="content">
                            <h5 class="title">MAKE LIFE EASIER</h5>
                            <p>
                                As the largest mobile platform in the country, we have the right 
                                services, the know-how and the expertise to make your buying 
                                transition to mobile simple, easy and painless.
                            </p>
                            <ul class="app-button">
                                <li>
                                    <a href="#0">
                                        <img src="{{ asset('frontend/assets/images/apps/apps_three.png') }}" alt="apps">
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <img src="{{ asset('frontend/assets/images/apps/apps_two.png') }}" alt="apps">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="counter--area">
                            <div class="counter-item">
                                <div class="d-flex justify-content-center align-items-center mb-10">
                                    <h4 class="odometer title" data-odometer-final="50"></h4>
                                    <h4 class="title">M+</h4>
                                </div>
                                <p class="info">apps downloads</p>
                            </div>
                            <div class="counter-item">
                                <div class="d-flex justify-content-center align-items-center mb-10">
                                    <h4 class="odometer title" data-odometer-final="15"></h4>
                                    <h4 class="title">M+</h4>
                                </div>
                                <p class="info">tickets a month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Speaker-Single========== -->

    <!-- ==========Speaker-Section========== -->
    <section class="feature-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">POWERFUL and FLEXIBLE</span>
                <h2 class="title">robust feature</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras neque est, aliquam eu
                    dignissim eget, eleifend at nunc. Curabitur non dapibus nulla. 
                </p>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <!-- <img src="./assets/images/feature/icon01.png" alt="feature"> -->
                            <i class="fas fa-ship"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Brand New</h5>
                            <p>Brand New User Interface with Latest Technology</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-item active">
                        <div class="feature-thumb">
                            <!-- <img src="./assets/images/feature/icon02.png" alt="feature"> -->
                            <i class="fas fa-store-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">seat map</h5>
                            <p>New Seat Map Feature for Ease of Ticket Booking</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <!-- <img src="./assets/images/feature/icon03.png" alt="feature"> -->
                            <i class="fab fa-java"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">F&B</h5>
                            <p>Buy Food While Booking Tickets. Relax and Enjoy</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <!-- <img src="./assets/images/feature/icon04.png" alt="feature"> -->
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">ticket filter</h5>
                            <p>Filter Your Movie Based on choose</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Speaker-Section========== -->

@endsection