<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Jadoo | Travel Agency Landing Page UI</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


</head>


<body>
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/logo.svg"
                        height="34" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                href="#service">Service</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                href="#destination">Destination</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                href="#booking">Booking</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section style="padding-top: 7rem;">
            <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img"
                            src="assets/img/hero/hero-img.png" alt="hero-header" /></div>
                    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                        <h4 class="fw-bold text-danger mb-3">Best Destinations around the world</h4>
                        <h1 class="hero-title">Travel, enjoy and live a new and full life</h1>
                        <p class="mb-4 fw-medium">Built Wicket longer admire do barton vanity itself do in it.<br
                                class="d-none d-xl-block" />Preferred to sportsmen it engrossed listening. Park gate<br
                                class="d-none d-xl-block" />sell they west hard for the.</p>
                        <div class="text-center text-md-start"> <a
                                class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                                href="#!" role="button">Find out more</a>
                            <div class="w-100 d-block d-md-none"></div><a href="#!" role="button"
                                data-bs-toggle="modal" data-bs-target="#popupVideo"><span
                                    class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img
                                        src="assets/img/hero/play.svg" width="15" alt="paly" /></span></a><span
                                class="fw-medium">Play Demo</span>
                            <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <iframe class="rounded" style="width:100%;max-height:500px;" height="500px"
                                            src="https://www.youtube.com/embed/_lhdhL4UDIo"
                                            title="YouTube video player"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen="allowfullscreen"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5" id="destination">

            <div class="container">
                <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img
                        src="assets/img/dest/shape.svg" alt="destination" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">Top Selling </h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Top Destinations</h3>
                </div>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                    src="assets/img/dest/dest1.jpg" alt="Rome, Italty" />
                                <div class="card-body py-4 px-3">
                                    <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a
                                                class="link-900 text-decoration-none stretched-link"
                                                href="#!">Sultan Hakim Herrysan</a></h4>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/img/testimonial/author.png') }}"
                                            style="margin-right: 14px" width="20" alt="navigation" />
                                        <span class="fs-0 fw-medium">Partai Nasdem</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                    src="assets/img/dest/dest1.jpg" alt="Rome, Italty" />
                                <div class="card-body py-4 px-3">
                                    <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a
                                                class="link-900 text-decoration-none stretched-link"
                                                href="#!">Rome,
                                                Italty</a></h4><span class="fs-1 fw-medium">$5,42k</span>
                                    </div>
                                    <div class="d-flex align-items-center"> <img src="assets/img/dest/navigation.svg"
                                            style="margin-right: 14px" width="20" alt="navigation" /><span
                                            class="fs-0 fw-medium">10
                                            Days Trip</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                    src="assets/img/dest/dest1.jpg" alt="Rome, Italty" />
                                <div class="card-body py-4 px-3">
                                    <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a
                                                class="link-900 text-decoration-none stretched-link"
                                                href="#!">Rome,
                                                Italty</a></h4><span class="fs-1 fw-medium">$5,42k</span>
                                    </div>
                                    <div class="d-flex align-items-center"> <img src="assets/img/dest/navigation.svg"
                                            style="margin-right: 14px" width="20" alt="navigation" /><span
                                            class="fs-0 fw-medium">10
                                            Days Trip</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                    src="assets/img/dest/dest1.jpg" alt="Rome, Italty" />
                                <div class="card-body py-4 px-3">
                                    <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a
                                                class="link-900 text-decoration-none stretched-link"
                                                href="#!">Rome,
                                                Italty</a></h4><span class="fs-1 fw-medium">$5,42k</span>
                                    </div>
                                    <div class="d-flex align-items-center"> <img src="assets/img/dest/navigation.svg"
                                            style="margin-right: 14px" width="20" alt="navigation" /><span
                                            class="fs-0 fw-medium">10
                                            Days Trip</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                    src="assets/img/dest/dest1.jpg" alt="Rome, Italty" />
                                <div class="card-body py-4 px-3">
                                    <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a
                                                class="link-900 text-decoration-none stretched-link"
                                                href="#!">Rome,
                                                Italty</a></h4><span class="fs-1 fw-medium">$5,42k</span>
                                    </div>
                                    <div class="d-flex align-items-center"> <img src="assets/img/dest/navigation.svg"
                                            style="margin-right: 14px" width="20" alt="navigation" /><span
                                            class="fs-0 fw-medium">10
                                            Days Trip</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div><!-- end of .container-->

        </section>
        <section id="booking">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mb-4 text-start">
                            <h5 class="text-secondary">Easy and Fast </h5>
                            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Book your next trip
                                in 3 easy steps</h3>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img
                                    src="assets/img/steps/selection.svg" width="22" alt="steps" /></div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">Choose Destination</h5>
                                <p>Choose your favourite place. No matter <br class="d-none d-sm-block"> where you
                                    travel inside the World.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <img
                                    src="assets/img/steps/water-sport.svg" width="22" alt="steps" /></div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">Make Payment</h5>
                                <p>After find your perfect spot, make your <br class="d-none d-sm-block"> payment and
                                    get ready to travel.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img
                                    src="assets/img/steps/taxi.svg" width="22" alt="steps" /></div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">Reach Airport on Selected Date</h5>
                                <p>Lastly, you have to arrive at the airport <br class="d-none d-sm-block"> on time and
                                    enjoy the vacation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-start">
                        <div class="card position-relative shadow" style="max-width: 370px;">
                            <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;">
                                <img src="assets/img/steps/bg.png" style="max-width:550px;" alt="shape" />
                            </div>
                            <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100"
                                    src="assets/img/steps/booking-img.jpg" alt="booking" />
                                <div>
                                    <h5 class="fw-medium">Trip To Greece</h5>
                                    <p class="fs--1 mb-3 fw-medium">14-29 June | by Robbin joseph</p>
                                    <div class="icon-group mb-4"> <span class="btn icon-item"> <img
                                                src="assets/img/steps/leaf.svg" alt="" /></span><span
                                            class="btn icon-item"> <img src="assets/img/steps/map.svg"
                                                alt="" /></span><span class="btn icon-item"> <img
                                                src="assets/img/steps/send.svg" alt="" /></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-n1"><img class="me-3"
                                                src="assets/img/steps/building.svg" width="18"
                                                alt="building" /><span class="fs--1 fw-medium">24 people going</span>
                                        </div>
                                        <div class="show-onhover position-relative">
                                            <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                                                style="width: 260px;border-radius:18px;">
                                                <div class="card-body py-3">
                                                    <div class="d-flex">
                                                        <div style="margin-right: 10px"> <img class="rounded-circle"
                                                                src="assets/img/steps/favorite-placeholder.png"
                                                                width="50" alt="favorite" /></div>
                                                        <div>
                                                            <p class="fs--1 mb-1 fw-medium">Ongoing </p>
                                                            <h5 class="fw-medium mb-3">Trip to rome</h5>
                                                            <h6 class="fs--1 fw-medium mb-2"><span>40%</span> completed
                                                            </h6>
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 40%;" aria-valuenow="25"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn"> <img src="assets/img/steps/heart.svg"
                                                    width="20" alt="step" /></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <section class="pt-6">

            <div class="container">
                <div class="py-8 px-5 position-relative text-center"
                    style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
                    <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img
                            src="assets/img/cta/send.png" style="max-width:70px;" alt="send icon" /></div>
                    <div class="position-absolute end-0 top-0 z-index--1"> <img src="assets/img/cta/shape-bg2.png"
                            width="264" alt="cta shape" /></div>
                    <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img
                            src="assets/img/cta/shape-bg1.png" style="max-width: 340px;" alt="cta shape" /></div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <h2 class="text-secondary lh-1-7 mb-7">Subscribe to get information, latest news and other
                                interesting offers about Cobham</h2>
                            <form class="row g-3 align-items-center w-lg-75 mx-auto">
                                <div class="col-sm">
                                    <div class="input-group-icon">
                                        <input class="form-control form-little-squirrel-control" type="email"
                                            placeholder="Enter email " aria-label="email" /><img
                                            class="input-box-icon" src="assets/img/cta/mail.svg" width="17"
                                            alt="mail" />
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <button class="btn btn-danger orange-gradient-btn fs--1">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <section class="pb-0 pb-lg-4">

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4"
                            src="assets/img/logo2.svg" width="150" alt="jadoo" />
                        <p class="fs--1 text-secondary mb-0 fw-medium">Book your trip in minute, get full Control for
                            much longer.</p>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Company</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">About</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Careers</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Mobile</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Help/FAQ</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Press</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Affiliate</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Airlinefees</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Airline</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Low fare tips</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
                        <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social"
                                id="facebook" href="#!"><i class="fab fa-facebook-f"> </i></a><a
                                class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i
                                    class="fab fa-instagram"> </i></a><a
                                class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i
                                    class="fab fa-twitter"> </i></a></div>
                        <h4 class="fw-medium font-sans-serif text-secondary mb-3">Discover our app</h4>
                        <div class="d-flex align-items-center"> <a href="#!"> <img class="me-2"
                                    src="assets/img/play-store.png" alt="play store" /></a><a href="#!"> <img
                                    src="assets/img/apple-store.png" alt="apple store" /></a></div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <div class="py-5 text-center">
            <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved@jadoo.co </p>
        </div>
    </main>




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            centeredSlides: true,
        });
    </script>


    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">
</body>

</html>