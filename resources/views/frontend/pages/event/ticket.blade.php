@extends('base.frontend.master')

@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner event-details-banner hero-area bg_img seat-plan-banner" data-background="{{ asset('frontend/assets/images/banner/banner07.jpg') }}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><span class="d-block">Digital Marketing</span> 
                        <span class="d-block">Conference -2020</span></h3>
                    <div class="tags">
                        <span>17 South Sherman Street Astoria, NY 11106</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="#0" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date">MON, SEP 09 2020</span>
                </div>
                <div class="item">
                    <h5 class="title">05:00</h5>
                    <p>Mins Left</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Event-Section========== -->
    <div class="event-facility padding-bottom padding-top">
        <div class="container"><div class="section-header-3">
            <span class="cate">simple pricing</span>
            <h2 class="title">make an appointment</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
        </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="ticket--item">
                        <div class="ticket-thumb">
                            <img src="{{ asset('frontend/assets/images/event/ticket/ticket01.png') }}" alt="event">
                        </div>
                        <div class="ticket-content">
                            <span class="ticket-title">Standard Ticket</span>
                            <h2 class="amount"><sup>$</sup>49</h2>
                            <ul>
                                <li>Full access to all lectures and workshops</li>
                                <li class="del"><del>Video presentations</del></li>
                                <li class="del"><del>Meet all of our event speakers</del></li>
                            </ul>
                            <a href="#0" class="custom-button">book tickets</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="ticket--item two">
                        <div class="hot">
                            <span>hot</span>
                        </div>
                        <div class="ticket-thumb">
                            <img src="{{ asset('frontend/assets/images/event/ticket/ticket02.png') }}" alt="event">
                        </div>
                        <div class="ticket-content">
                            <span class="ticket-title">Premium Ticket</span>
                            <h2 class="amount"><sup>$</sup>79</h2>
                            <ul>
                                <li>Full access to all lectures and workshops</li>
                                <li>Video presentations</li>
                                <li class="del"><del>Meet all of our event speakers</del></li>
                            </ul>
                            <a href="#0" class="custom-button">book tickets</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="ticket--item three">
                        <div class="ticket-thumb">
                            <img src="{{ asset('frontend/assets/images/event/ticket/ticket03.png') }}" alt="event">
                        </div>
                        <div class="ticket-content">
                            <span class="ticket-title">VIP Ticket</span>
                            <h2 class="amount"><sup>$</sup>99</h2>
                            <ul>
                                <li>Full access to all lectures and workshops</li>
                                <li>Video presentations</li>
                                <li>Meet all of our event speakers</li>
                            </ul>
                            <a href="#0" class="custom-button">book tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Event-Section========== -->

@endsection
