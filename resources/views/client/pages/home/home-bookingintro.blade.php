@extends('client.layout.master')
@section('content')
<!-- ========================  Header content ======================== -->

<section class="frontpage-slider">
    <div class="owl-slider owl-slider-header owl-slider-fullscreen">

        <!-- === slide item === -->

        <div class="item" style="background-image:url({{ asset('assets/client/images/slide-3.jpg') }})">
            <div class="box text-center">
                <div class="container">
                    <div class="rating animated" data-animation="fadeInDown">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h2 class="title animated h1" data-animation="fadeInDown">
                        A moment of <br /> <span>pure prestige</span>
                    </h2>
                    <div class="desc animated" data-animation="fadeInUp">
                        Lavish social and business events
                    </div>
                    <div class="desc animated" data-animation="fadeInUp">
                        and unforgettable weddings.
                    </div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="https://themeforest.net/item/colina-hotel-website-template/20977257" class="btn btn-clean">Buy this template</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- === slide item === -->

        <div class="item" style="background-image:url({{ asset('assets/client/images/slide-1.jpg') }})">
            <div class="box text-center">
                <div class="container">
                    <h2 class="title animated h1" data-animation="fadeInDown">
                        The privacy and <br />
                        individuality of a custom
                    </h2>
                    <div class="desc animated" data-animation="fadeInUp">
                        The Residences have their own dedicated private entrance as well <br />
                        as an anonymous "celebrity" entrance, for ultimate privacy.
                    </div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="#" class="btn btn-clean">Virtual tour</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- === slide item === -->

        <div class="item" style="background-image:url({{ asset('assets/client/images/slide-2.jpg') }})">
            <div class="box text-center">
                <div class="container">
                    <div class="rating animated" data-animation="fadeInDown">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h2 class="title animated h1" data-animation="fadeInDown">Fairmont managed!</h2>
                    <div class="desc animated" data-animation="fadeInUp">The elegant Champagne Bar, the stylish Colina Club.</div>
                    <div class="desc animated" data-animation="fadeInUp">Guestrooms and luxurious suites</div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="#" class="btn btn-clean">Get insipred</a>
                    </div>
                </div>
            </div>
        </div>

    </div> <!--/owl-slider-->
</section>

<!-- ======================== Booking ======================== -->

<section class="booking booking-inner">

    <div class="section-header hidden">
        <div class="container">
            <h2 class="title">Booking & reservations</h2>
        </div>
    </div>

    <div class="booking-wrapper">

        <div class="container">
            <div class="row">

                <!--=== date arrival ===-->

                <div class="col-xs-4 col-sm-3">
                    <div class="date" id="dateArrival" data-text="Arrival">
                        <input class="datepicker" readonly="readonly" />
                        <div class="date-value"></div>
                    </div>
                </div>

                <!--=== date departure ===-->

                <div class="col-xs-4 col-sm-3">
                    <div class="date" id="dateDeparture" data-text="Departure">
                        <input class="datepicker" readonly="readonly" />
                        <div class="date-value"></div>
                    </div>
                </div>

                <!--=== guests ===-->

                <div class="col-xs-4 col-sm-2">

                    <div class="guests" data-text="Guests">
                        <div class="result">
                            <input class="qty-result" type="text" value="2" id="qty-result" readonly="readonly" />
                            <div class="qty-result-text date-value" id="qty-result-text"></div>
                        </div>
                        <!--=== guests list ===-->
                        <ul class="guest-list">

                            <li class="header">
                                Please choose number of guests <span class="qty-apply"><i class="icon icon-cross"></i></span>
                            </li>

                            <!--=== adults ===-->

                            <li class="clearfix">

                                <!--=== Adults value ===-->

                                <div>
                                    <input class="qty-amount" value="2" type="text" id="ticket-adult" data-value="2" readonly="readonly" />
                                </div>

                                <div>
                                    <span>Adults <small>16+ years</small></span>
                                </div>

                                <!--=== Add/remove quantity buttons ===-->

                                <div>
                                    <input class="qty-btn qty-minus" value="-" type="button" data-field="ticket-adult" />
                                    <input class="qty-btn qty-plus" value="+" type="button" data-field="ticket-adult" />
                                </div>

                            </li>

                            <!--=== chilrens ===-->

                            <li class="clearfix">

                                <!--=== Adults value ===-->

                                <div>
                                    <input class="qty-amount" value="0" type="text" id="ticket-children" data-value="0" readonly="readonly" />
                                </div>

                                <!--=== Label ===-->

                                <div>
                                    <span>Children <small>2-11 years</small></span>
                                </div>


                                <!--=== Add/remove quantity buttons ===-->

                                <div>
                                    <input class="qty-btn qty-minus" value="-" type="button" data-field="ticket-children" />
                                    <input class="qty-btn qty-plus" value="+" type="button" data-field="ticket-children" />
                                </div>

                            </li>

                            <!--=== Infants ===-->

                            <li class="clearfix">

                                <!--=== Adults value ===-->

                                <div>
                                    <input class="qty-amount" value="0" type="text" id="ticket-infants" data-value="0" readonly="readonly" />
                                </div>

                                <!--=== Label ===-->

                                <div>
                                    <span>Infants <small>Under 2 years</small></span>
                                </div>

                                <!--=== Add/remove quantity buttons ===-->

                                <div>
                                    <input class="qty-btn qty-minus" value="-" type="button" data-field="ticket-infants" />
                                    <input class="qty-btn qty-plus" value="+" type="button" data-field="ticket-infants" />
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <!--=== button ===-->

                <div class="col-xs-12 col-sm-4">
                    <a href="reservation-1.html" class="btn btn-clean">
                        Book now
                        <small>Best Prices Guaranteed</small>
                    </a>
                </div>

            </div> <!--/row-->
        </div><!--/booking-wrapper-->
    </div> <!--/container-->
</section>

<!-- ========================  Rooms ======================== -->

<section class="rooms rooms-widget">

    <!-- === rooms header === -->

    <div class="section-header">
        <div class="container">
            <h2 class="title">Rooms accommodation <a href="rooms-category.html" class="btn btn-sm btn-clean-dark">View all</a></h2>
            <p>Designed as a privileged almost private place where you'll feel right at home</p>
        </div>
    </div>

    <!-- === rooms content === -->

    <div class="container">

        <div class="owl-rooms owl-theme">

            <!-- === rooms item === -->

            <div class="item">
                <article>
                    <div class="image">
                        <img src="{{ asset('assets/client/images/room-1.jpg') }}" alt="" />
                    </div>
                    <div class="details">
                        <div class="text">
                            <h3 class="title"><a href="room-overview.html">Club Room</a></h3>
                            <p>Single room</p>
                        </div>
                        <div class="book">
                            <div>
                                <a href="room-overview.html" class="btn btn-main">Book now</a>
                            </div>
                            <div>
                                <span class="price h4">$ 98,00</span>
                                <span>per night</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- === rooms item === -->

            <div class="item">
                <article>
                    <div class="image">
                        <img src="{{ asset('assets/client/images/room-2.jpg') }}" alt="" />
                    </div>
                    <div class="details">
                        <div class="text">
                            <h3 class="title"><a href="room-overview.html">Classic Room</a></h3>
                            <p>Double room</p>
                        </div>
                        <div class="book">
                            <div>
                                <a href="room-overview.html" class="btn btn-main">Book now</a>
                            </div>
                            <div>
                                <span class="price h4">$ 129,00</span>
                                <span>per night</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- === rooms item === -->

            <div class="item">
                <article>
                    <div class="image">
                        <img src="{{ asset('assets/client/images/room-3.jpg') }}" alt="" />
                    </div>
                    <div class="details">
                        <div class="text">
                            <h3 class="title"><a href="">Superior Room</a></h3>
                            <p>Queen size bed</p>
                        </div>
                        <div class="book">
                            <div>
                                <a href="room-overview.html" class="btn btn-main">Book now</a>
                            </div>
                            <div>
                                <span class="price h4">$ 159,00</span>
                                <span>per night</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- === rooms item === -->

            <div class="item">
                <article>
                    <div class="image">
                        <img src="{{ asset('assets/client/images/room-4.jpg') }}" alt="" />
                    </div>
                    <div class="details">
                        <div class="text">
                            <h3 class="title"><a href="room-overview.html">Family Suite</a></h3>
                            <p>Family room</p>
                        </div>
                        <div class="book">
                            <div>
                                <a href="room-overview.html" class="btn btn-main">Book now</a>
                            </div>
                            <div>
                                <span class="price h4">$ 199,00</span>
                                <span>per night</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

        </div><!--/owl-rooms-->

    </div> <!--/container-->

</section>

<!-- ========================  Stretcher widget ======================== -->

<section class="stretcher-wrapper">

    <!-- === stretcher header === -->

    <div class="section-header">
        <div class="container">
            <h2 class="title">Resort facilities <a href="facility.html" class="btn btn-sm btn-clean-dark">Explore more</a></h2>
            <p>
                With the best luxury spa, salon and fitness experiences
            </p>
        </div>
    </div>

    <!-- === stretcher === -->

    <ul class="stretcher">

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-1.jpg') }})">
            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Spa center</span>
                </div>
            </div>
            <!--main text-->
            <figure>
                <h4>Spa center</h4>
                <figcaption>Unparalleled devotion to luxury</figcaption>
            </figure>
            <!--anchor-->
            <a href="facility.html">Anchor link</a>
        </li>

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-2.jpg') }})">
            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Gym</span>
                </div>
            </div>
            <!--main text-->
            <figure>
                <h4>Gym</h4>
                <figcaption>Care about results</figcaption>
            </figure>
            <!--anchor-->
            <a href="facility.html">Anchor link</a>
        </li>

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-3.jpg') }})">
            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Fitness</span>
                </div>
            </div>
            <figure>
                <h4>Fitness</h4>
                <figcaption>Your daily activities</figcaption>
            </figure>
            <!--anchor-->
            <a href="facility.html">Anchor link</a>
        </li>

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-4.jpg') }})">


            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Beauty salon</span>
                </div>
            </div>
            <!--main text-->
            <figure>
                <h4>Beauty salon</h4>
                <figcaption>Hair salons and spas</figcaption>
            </figure>
            <!--anchor-->
            <a href="facility.html">Anchor link</a>
        </li>

        <!-- === stretcher item more === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-5.jpg') }})">


            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Swimming</span>
                </div>
            </div>
            <!--main text-->
            <figure>
                <h4>Swimming</h4>
                <figcaption>Underwater Activities</figcaption>
            </figure>
            <!--anchor-->
            <a href="facility.html">Anchor link</a>
        </li>

    </ul>
</section>

<!-- ========================  Blog ======================== -->

<section class="blog blog-widget">

    <!-- === stretcher header === -->

    <div class="section-header">
        <div class="container">
            <h2 class="title">Latest news <a href="blog-category.html" class="btn btn-sm btn-clean-dark">Explore more</a></h2>
            <p>
                Events, place to go, tour info & more
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!-- === article item === -->

            <div class="col-sm-4">
                <a href="blog-item.html">
                    <article>
                        <div class="image">
                            <img src="{{ asset('assets/client/images/activity-3.jpg') }}"  alt="" />
                        </div>
                        <div class="text">
                            <div class="time">
                                <span>22</span>
                                <span>05</span>
                                <span>2014</span>
                            </div>
                            <h2 class="h4 title">
                                What to do when holidays go wrong
                            </h2>
                        </div>
                    </article>
                </a>
            </div>

            <!-- === article item === -->

            <div class="col-sm-4">
                <a href="blog-item.html">
                    <article>
                        <div class="image">
                            <img src="{{ asset('assets/client/images/activity-4.jpg') }}" alt="" />
                        </div>
                        <div class="text">
                            <div class="time">
                                <span>22</span>
                                <span>05</span>
                                <span>2014</span>
                            </div>
                            <h2 class="h4 title">
                                Everything you need to know about vaccinations
                            </h2>
                        </div>
                    </article>
                </a>
            </div>

            <!-- === article item === -->

            <div class="col-sm-4">
                <a href="blog-item.html">
                    <article>
                        <div class="image">
                            <img src="{{ asset('assets/client/images/activity-5.jpg') }}" alt="" />
                        </div>
                        <div class="text">
                            <div class="time">
                                <span>22</span>
                                <span>05</span>
                                <span>2014</span>
                            </div>
                            <h2 class="h4 title">
                                Six simple ways to save money on airport car parking
                            </h2>
                        </div>
                    </article>
                </a>
            </div>

        </div> <!--/row-->
    </div> <!--/container-->
</section>

<!-- ========================  Cards ======================== -->

<section class="cards">

    <!-- === cards header === -->

    <div class="section-header">
        <div class="container">
            <h2 class="title">Near by <a href="#" class="btn btn-sm btn-clean-dark">View all</a></h2>
            <p>Here's a selection of ionic sites related to art, fashion and design.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!-- === item === -->

            <div class="col-xs-12 col-md-8">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-1.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-1.jpg') }}" alt="" />
                    </figcaption>
                    <a href="#" class="btn btn-clean" onclick="">Museums</a>
                </figure>
            </div>

            <!-- === item === -->

            <div class="col-xs-6 col-md-4">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-2.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-2.jpg') }}" alt="" />
                    </figcaption>
                    <a href="#" class="btn btn-clean">Nightlife</a>
                </figure>
            </div>

            <!-- === item === -->

            <div class="col-xs-6 col-md-4">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-3.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-3.jpg') }}" alt="" />
                    </figcaption>
                    <a href="#" class="btn btn-clean">Food & drink</a>
                </figure>
            </div>

            <!-- === item === -->

            <div class="col-xs-6 col-md-4">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-4.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-4.jpg') }}" alt="" />
                    </figcaption>
                    <a href="#" class="btn btn-clean">Shopping</a>
                </figure>
            </div>

            <!-- === item === -->

            <div class="col-xs-6 col-md-4">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-5.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-5.jpg') }}" alt="" />
                    </figcaption>
                    <a href="#" class="btn btn-clean">The City</a>
                </figure>
            </div>

        </div> <!--/row-->

    </div> <!--/container-->
</section>


<!-- ======================== Image blocks ======================== -->

<section class="image-blocks image-blocks-header">

    <div class="section-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Apartment residences <a href="rooms-category.html" class="btn btn-sm btn-clean">View all</a></h2>
            <p>At home while on the road. </p>
        </div>
    </div>

    <div class="container">

        <!--item block -->
        <div class="blocks blocks-left">
            <div class="item">
                <div class="text">

                    <!-- === room info === -->

                    <h2 class="title">Presidential <br />Suite</h2>
                    <p>
                        Newly refurnished luxury accommodation with finest quality linen & quality decor.
                        Air Conditioning Electric Blankets, Ironing Boards, Mini Bar, Flat Screen & Free Inhouse Movies, WiFi
                        and Housekeeping by request.
                    </p>

                    <!-- === room facilities === -->

                    <div class="room-facilities">

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-guest"></i> 4 Persons</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-roomservice"></i> Room service</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-king-bed"></i> Kingsize bed</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-kitchen"></i> All inclusive</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-compas"></i> 460 sqft room</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-tv"></i> TV</figcaption>
                        </figure>

                    </div>

                    <!-- === booking === -->

                    <div class="book">
                        <div>
                            <a href="room-overview.html" class="btn btn-danger btn-lg">Book</a>
                        </div>
                        <div>
                            <span class="price h2">$ 129,00</span>
                            <span>per night</span>
                        </div>
                    </div> <!--/booking-->

                </div><!--/text-->
            </div> <!--/item-->

            <div class="image" style="background-image:url({{ asset('assets/client/images/apartment-1.jpg') }})">
                <img src="{{ asset('assets/client/images/apartment-1.jpg') }}" alt="" />
            </div>
        </div>

        <!--item block -->
        <div class="blocks blocks-right">
            <div class="item">
                <div class="text">

                    <!-- === room info === -->

                    <h2 class="title">Luxury <br />appartment</h2>
                    <p>
                        The highest level of living with luxury. Residences are distinctively designed and exquisitely appointed,
                        creating ideal places where memories are made and experiences are genuine.
                    </p>

                    <!-- === room facilities === -->

                    <div class="room-facilities">

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-guest"></i> 4 Persons</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-king-bed"></i> Kingsize bed</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-roomservice"></i> Room service</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-kitchen"></i> All inclusive</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-compas"></i> 460 sqft room</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-tv"></i> TV</figcaption>
                        </figure>

                    </div>

                    <!-- === booking === -->

                    <div class="book">
                        <div>
                            <a href="room-overview.html" class="btn btn-danger btn-lg">Book</a>
                        </div>
                        <div>
                            <span class="price h2">$ 229,00</span>
                            <span>per night</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="image" style="background-image:url({{ asset('assets/client/images/apartment-2.jpg') }})">
                <img src="{{ asset('assets/client/images/apartment-2.jpg') }}" alt="" />
            </div>
        </div>

    </div> <!--/container-->
</section>

<!-- ======================== Quotes ======================== -->

<section class="quotes quotes-slider" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
    <div class="container">

        <!-- === Quotes header === -->

        <div class="section-header">
            <h2 class="title">Testimonials</h2>
            <p>What other think about us</p>
        </div>

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="quote-carousel">

                    <!-- === quoute item === -->

                    <div class="quote">

                        <div class="text">
                            <h4>Jenna Hale</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>

                    <!-- === quoute item === -->

                    <div class="quote">
                        <div class="text">
                            <h4>Glen Jordan</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>

                    <!-- === quoute item === -->

                    <div class="quote">
                        <div class="text">
                            <h4>Lea Nils</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>

                    <!-- === quoute item === -->

                    <div class="quote">
                        <div class="text">
                            <h4>Nora Star</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>

                    <!-- === quoute item === -->

                    <div class="quote">
                        <div class="text">
                            <h4>Glen Jordan</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div> <!--/quote-carousel-->
            </div>
        </div> <!--/row-->
    </div> <!--/container-->
</section>

<!-- ========================  Subscribe ======================== -->


@endsection
