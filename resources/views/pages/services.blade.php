@extends('pages.layouts1')
@section('body-section')

        <section class="page-title  v3 clearfix parallax  parallax5">
            <div class="overlay"></div>
            <div class="container">
                <div class="wrap-page-title">
                    <div class="breakcrums text-center v2">
                        <ul>
                            <li><a href="#" class="hover-text">HOME</a></li>
                            <li><a href="#" class="hover-text">OUR SERVICES</a></li>
                        </ul>
                    </div> <!-- /.breakcrums -->

                    <div class="page-title-heading text-center v2">
                        <h1><a href="#" class="hover-text">OUR SERVICES</a></h1>
                    </div> <!-- /.page-title-heading -->
                </div> <!-- /.wrap-page-title -->
            </div> <!-- /.container -->
        </section> <!-- /.page-title -->

        <article class="content-wrap ">
            <div class="flat-spacer clearfix" data-desktop="99" data-mobile="99" data-smobile="99" ></div>
            <div class="container clearfix">
                <div class="sidebar-left  our-services-page">
                    <div class="widget widget-categories v1">
                        <ul>
                            <li><a href="/body-wash"> Body Wash</a></li>
                            <li><a href="/interior-cleaning"> Interior Cleaning</a></li>
                            <li><a href="/engine-detailing"> Engine Detailing</a></li>
                            <li><a href="/car-polish"> Car Polish</a></li>
                        </ul>
                    </div> <!-- /.widget-categories -->

                    <div class="widget-testimonials flat-border-bottom pd-bottom-30">
                        <div class="flat-carousel-not-numb" data-auto="false" data-column="1" data-column2="1" data-column3="1" data-gap="1" data-dots="false" data-nav="false" data-loop="true">
                            <div class="flat-testimonials  owl-carousel ">
                                <div class="testimonial style1 v2">
                                    <blockquote>
                                        "I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really great people."
                                    </blockquote>
                                    <div class="customer-info">
                                        <h5 class="name"><a href="#" class="hover-text">JOHN SMITH</a></h5>
                                        <p class="position">Chief Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.sidebar-left -->

                <div class="content-page-wrap our-service-page pd-left-60">
                    <div class="flat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60" ></div>
                    <div class="flat-imgbox clearfix all-services">
                        <div class="imgbox  all-services one-of-two">
                            <div class="imgbox-img">
                                <img src="/website/images/services/our-services/body_wash.png" alt="AutoMov">
                            </div>
                            <div class="imgbox-content ">
                                <h3><a href="#">Body Wash</a></h3>
                                <p>Car wash lift, where cars are placed in a car wash lift where cars can then be washed by employees. Hand car wash facilities, where the vehicle is washed by employees. </p>
                                <div class="wrap-btn">
                                    <a href="/body-wash" class="flat-button bg-read-more v4 ">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="imgbox  all-services one-of-two">
                            <div class="imgbox-img">
                                <img src="/website/images/services/our-services/car_polish.png" alt="AutoMov">
                            </div>
                            <div class="imgbox-content">
                                <h3><a href="#">Car polish</a></h3>
                                <p>Polishing a car removes small damages done to the top coat of your car's paint, such as road gunk, bird poop, and swirls that have built up over time. We providing the services of supreme quality of polishing the car. </p>
                                <div class="wrap-btn">
                                    <a href="car-polish" class="flat-button bg-read-more v4 ">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="imgbox  all-services one-of-two">
                            <div class="imgbox-img">
                                <img src="/website/images/services/our-services/interior_cleaning.png" alt="AutoMov">
                            </div>
                            <div class="imgbox-content">
                                <h3><a href="#">Interior Cleaning</a></h3>
                                <p>Interior premium treatment ensures that your car interiors are spotless clean. Cleaner solutions are applied to seats, windows&dashboards to remove dust and grime.</p>
                                <div class="wrap-btn">
                                    <a href="/interior-cleaning" class="flat-button bg-read-more v4 ">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="imgbox  all-services one-of-two">
                            <div class="imgbox-img">
                                <img src="/website/images/services/our-services/engine_detailing.png" alt="AutoMov">
                            </div>
                            <div class="imgbox-content">
                                <h3><a href="#">Engine Detailing</a></h3>
                                <p>An engine compartment can be one of the most overlooked areas on a vehicle to have cleaned and degreased. Open it up and you may find leaves caught in the hood jams, as well as dust and dirt residue surfaces and under the hood itself. </p>
                                <div class="wrap-btn">
                                    <a href="/engine-detailing" class="flat-button bg-read-more v4 ">Read more</a>
                                </div>
                            </div>
                        </div>

              

                        
                    </div>
                </div> <!-- /.content-page-wrap -->
            </div> <!-- /.container -->
            <div class="flat-spacer clearfix" data-desktop="50" data-mobile="50" data-smobile="50" ></div>
        </article> <!-- /.content-wrap -->

        <section class="flat-contact v1 clearfix">
            <div class="container">
                <div class="wrap-text">
                    <h3 class="title"><a href="#">Have you question or need any help for work consulant?</a></h3>
                </div>
                <div class="wrap-btn text-right">
                    <a href="/contact-us" class="flat-button btn-contact bg-contact">Contact us</a>
                </div>
            </div> <!-- /.container -->
        </section> <!-- /.flat-contact -->

 @endsection