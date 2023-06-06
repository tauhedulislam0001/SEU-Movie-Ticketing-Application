<!-- ==========Header-Section========== -->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="{{ route('home') }}" class="active">Home</a>
                </li>
                <li>
                    <a href="#0">movies</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('movies') }}">Movie List</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.ticket-plan') }}">Movie Ticket Plan</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.seat-plan') }}">Movie Seat Plan</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.checkout') }}">Movie Checkout</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.food') }}">Movie Food</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">events</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('events') }}">Events</a>
                        </li>
                        <li>
                            <a href="{{ route('events.details') }}">Event Details</a>
                        </li>
                        <li>
                            <a href="{{ route('events.speaker') }}">Event Speaker</a>
                        </li>
                        <li>
                            <a href="{{ route('events.ticket') }}">Event Ticket</a>
                        </li>
                        <li>
                            <a href="{{ route('events.checkout') }}">Event Checkout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">sports</a>
                    <ul class="submenu">
                        <li>
                            <a href="sports.html">Sports</a>
                        </li>
                        <li>
                            <a href="sport-details.html">Sport Details</a>
                        </li>
                        <li>
                            <a href="sports-ticket.html">Sport Ticket</a>
                        </li>
                        <li>
                            <a href="sports-checkout.html">Sport Checkout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">pages</a>
                    <ul class="submenu">
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="apps-download.html">Apps Download</a>
                        </li>
                        <li>
                            <a href="sign-in.html">Sign In</a>
                        </li>
                        <li>
                            <a href="sign-up.html">Sign Up</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">blog</a>
                    <ul class="submenu">
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="blog-details.html">Blog Single</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
                <li class="header-button pr-0">
                    <a href="sign-up.html">join us</a>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header-Section========== -->