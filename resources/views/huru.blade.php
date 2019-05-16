<!DOCTYPE html>
<html lang="en">
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Huru</title>

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Themefisher Font -->
    <link href="plugins/themefisher-font/style.css" rel="stylesheet">
    <!-- Slick Carousel -->
    <link href="plugins/slick/slick.css" rel="stylesheet">
    <!-- Slick Carousel Theme -->
    <link href="plugins/slick/slick-theme.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href={{ secure_asset('css/huruStyle.css') }} rel="stylesheet">

    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- FAVICON -->
    <link href="images/huru/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<nav class="navbar main-nav fixed-top navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="homepage.html"><img src="images/huru/HuruLogo.png" alt="logo" style="height:70px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="tf-ion-android-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="#feature">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="#works">How it Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="#team">Team</a>
                </li>
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link scrollTo" href="#contact">Contact</a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
</nav>
<!--=====================================
=            Homepage Banner            =
======================================-->

<section class="banner bg-1" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-8 align-self-center">
                <!-- Contents -->
                <div class="content-block">
                    <h1>YOUR HEALTH AT YOU FINGERTIPS</h1>
                    <h5>Talk to Alexa about your health</h5>
                    <!-- App Badge -->
                    <div class="app-badge">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#"><img class="img-fluid" src="images/huru/app-badge/app-store.png" alt="app-store"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- App Image -->
                <div class="image-block">
                    <img class="img-fluid" src="images/huru/phones/iphone-banner-huru.png" alt="iphone-banner">
                </div>
            </div>
        </div>
    </div>
</section>

<!--====  End of Homepage Banner  ====-->

<!--===========================
=            About            =
============================-->

<section class="about section bg-2" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mr-auto">
                <!-- Image Content -->
                <div class="image-block">
                    <img src="images/huru/phones/iphone-feature-2.png" alt="iphone-feature" class="img-fluid">
                    {{--<img src="images/huru/amazon-echo-2.png" alt="iphone-feature" class="img-fluid">--}}
                </div>
            </div>
            <div class="col-lg-6 col-md-10 m-md-auto align-self-center ml-auto">
                <div class="about-block">
                    <!-- About 01 -->
                    <div class="about-item">
                        <div class="icon">
                            <i class="tf-ion-ios-paper-outline"></i>
                        </div>
                        <div class="content">
                            <h5>Realtime Information</h5>
                            <p>With Huru, you can ask any Alexa paired device any question about your health! </p>
                        </div>
                    </div>
                    <!-- About 02 -->
                    <div class="about-item active">
                        <div class="icon">
                            <i class="tf-globe"></i>
                        </div>
                        <div class="content">
                            <h5>Easy to Use</h5>
                            <p>Setting up is super easy. We use your phone's health kit to quickly pair it to Alexa!</p>
                        </div>
                    </div>
                    <!-- About 03 -->
                    <div class="about-item">
                        <div class="icon">
                            <i class="tf-circle-compass"></i>
                        </div>
                        <div class="content">
                            <h5>Ask anything</h5>
                            <p>As long as your phone tracks it, you can ask Alexa about it!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====  End of About  ====-->


<!--==============================
=            Features            =
===============================-->

<section class="section feature" id="feature">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Huru Features</h2>
                    <p>As your personal health guru, Huru is built with everything you need to learn more about your health!</p>
                </div>
            </div>
        </div>
        <div class="row bg-elipse">
            <div class="col-lg-4 align-self-center text-center text-lg-right">
                <!-- Feature Item -->
                <div class="feature-item">
                    <!-- Icon -->
                    <div class="icon">
                        <i class="tf-circle-compass"></i>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <h5>Easy to use</h5>
                        <p>To get started all you need is to connect your iphone to an alexa-supported device.</p>
                    </div>
                </div>
                <!-- Feature Item -->
                <div class="feature-item">
                    <!-- Icon -->
                    <div class="icon">
                        <i class="tf-tools-2"></i>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <h5>Tweek it how you want</h5>
                        <p>You can set up goals or let Huru know what you want to keep track of!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <!-- Feature Item -->
                <div class="feature-item mb-0">
                    <!-- Icon -->
                    <div class="icon">
                        <i class="tf-chat"></i>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <h5>Talk to Huru</h5>
                        <p>Talking to Huru is super easy. Ask it anything and it will respond to you conversationally.</p>
                    </div>
                </div>
                <div class="app-screen">
                    <img class="img-fluid" src="images/huru/phones/dashboard.jpg" alt="app-screen">
                </div>
                <!-- Feature Item -->
                <div class="feature-item">
                    <!-- Icon -->
                    <div class="icon">
                        <i class="tf-hourglass"></i>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <h5>Everything, in real time</h5>
                        <p>Huru gives you the most up-to-date information about your health in real time!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-left align-self-center">
                <!-- Feature Item -->
                <div class="feature-item">
                    <!-- Icon -->
                    <div class="icon">
                        <i class="tf-mobile"></i>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <h5>Connect to any Apple Device</h5>
                        <p>We use apple's HealthKit to provide the most reliable health information about you.</p>
                    </div>
                </div>
                <!-- Feature Item -->
                <div class="feature-item">
                    <!-- Icon -->
                    <div class="icon">
                        <i class="tf-layers"></i>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <h5>Powered by Amazon Alexa </h5>
                        <p>Huru works on any Amazon Alexa enabled device</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====  End of Features  ====-->

{{--<!--=================================--}}
{{--=            Promo Video            =--}}
{{--==================================-->--}}

{{--<section class="section promo-video bg-3 overlay">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-12">--}}
{{--<!-- Promo Video -->--}}
{{--<div class="video">--}}
{{--<img class="img-fluid" src="images/huru/backgrounds/promo-video-bg.jpg" alt="video-thumbnail">--}}
{{--<div class="video-button video-box">--}}
{{--<!-- Video Play Button -->--}}
{{--<a href="javascript:void(0)">--}}
{{--<span class="icon" data-video="https://www.youtube.com/embed/g3-VxLQO7do?autoplay=1">--}}
{{--<i class="tf-ion-ios-play-outline"></i>--}}
{{--</span>--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}

{{--<!--====  End of Promo Video  ====-->--}}

{{--<!--===================================--}}
{{--=            Pricing Table            =--}}
{{--====================================-->--}}

{{--<section class="pricing section bg-shape" id="pricing">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-12">--}}
{{--<div class="section-title">--}}
{{--<h2>Choose Your Subscription Plan</h2>--}}
{{--<p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee idea of denouncing pleasure and praising</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-lg-4 col-md-6">--}}
{{--<!-- Pricing Table -->--}}
{{--<div class="pricing-table text-center">--}}
{{--<!-- Title -->--}}
{{--<div class="title">--}}
{{--<h5>Free</h5>--}}
{{--</div>--}}
{{--<!-- Price Tag -->--}}
{{--<div class="price">--}}
{{--<p>$0<span>/month</span></p>--}}
{{--</div>--}}
{{--<!-- Features -->--}}
{{--<ul class="feature-list">--}}
{{--<li>Android App</li>--}}
{{--<li>One time payment</li>--}}
{{--<li>Build & Publish</li>--}}
{{--<li>Life time support</li>--}}
{{--</ul>--}}
{{--<!-- Take Action -->--}}
{{--<div class="action-button">--}}
{{--<a href="" class="btn btn-main-rounded">Start Now</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-lg-4 col-md-6">--}}
{{--<!-- Pricing Table -->--}}
{{--<div class="pricing-table featured text-center">--}}
{{--<!-- Title -->--}}
{{--<div class="title">--}}
{{--<h5>Basic</h5>--}}
{{--</div>--}}
{{--<!-- Price Tag -->--}}
{{--<div class="price">--}}
{{--<p>$19<span>/month</span></p>--}}
{{--</div>--}}
{{--<!-- Features -->--}}
{{--<ul class="feature-list">--}}
{{--<li>Android App</li>--}}
{{--<li>One time payment</li>--}}
{{--<li>Build & Publish</li>--}}
{{--<li>Life time support</li>--}}
{{--</ul>--}}
{{--<!-- Take Action -->--}}
{{--<div class="action-button">--}}
{{--<a href="" class="btn btn-main-rounded">Start Now</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-lg-4 col-md-6 m-md-auto">--}}
{{--<!-- Pricing Table -->--}}
{{--<div class="pricing-table text-center">--}}
{{--<!-- Title -->--}}
{{--<div class="title">--}}
{{--<h5>Advance</h5>--}}
{{--</div>--}}
{{--<!-- Price Tag -->--}}
{{--<div class="price">--}}
{{--<p>$99<span>/month</span></p>--}}
{{--</div>--}}
{{--<!-- Features -->--}}
{{--<ul class="feature-list">--}}
{{--<li>Android App</li>--}}
{{--<li>One time payment</li>--}}
{{--<li>Build & Publish</li>--}}
{{--<li>Life time support</li>--}}
{{--</ul>--}}
{{--<!-- Take Action -->--}}
{{--<div class="action-button">--}}
{{--<a href="" class="btn btn-main-rounded">Start Now</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}

{{--<!--====  End of Pricing Table  ====-->--}}



{{--<!--=============================================--}}
{{--=            Call to Action Download            =--}}
{{--==============================================-->--}}



<!--=============================
=            Counter            =
==============================-->

<section class="section bg-gray" id="works">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>How it Works</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4" align="center">
                <div class="counter-item">
                    <!-- Counter Number -->
                    <h3 class="text-center">Apple HealthKit</h3>
                    <!-- Counter Name -->
                    <div class="text-center">
                        <img src="images/huru/healthkit.png" alt="healthKit">
                        <p>Apple's HealthKit contains a plethora of information that it gathers when users enable it to track their health!</p>
                    </div>
                </div>
            </div>
            <h1 style="padding-top:12%;">+</h1>
            <div class="col-lg-3 col-md-4" align="center">
                <div class="counter-item">
                    <!-- Counter Number -->
                    <h3 class="text-center" style="">Amazon Alexa</h3>
                    <!-- Counter Name -->
                    <div class="text-center">
                        <img src="images/huru/alexa.png" alt="healthKit" style="height: 80%; width: 80%;">
                        <p>Amazon's Alexa is a powerful digital assistant that is enabled on a massive amount of different devices.</p>
                    </div>
                </div>
            </div>
            <h1 style="padding-top:12%;">=</h1>
            <div class="col-lg-4 col-md-3" align="center">
                <div class="counter-item">
                    <!-- Counter Number -->
                    <h3 class="text-center" style="">Huru</h3>
                    <!-- Counter Name -->
                    <div class="text-center">
                        <img src="images/huru/huruIcon.png" alt="healthKit" style="padding-top:30px; height: 40%; width: 40%;">
                        <p style="padding-top:20px;">Huru combines the power of Apple's HealthKit to any Amazon Alexa enabled device to give users the abilit to access their health information in an easy and handsoff way.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====  End of Counter  ====-->
<!--==========================
=            Team            =
===========================-->

<section class="section team bg-shape-two" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>About Our Team</h2>
                    <p>We are all Computer Science students at the University of Memphis. We created Huru as part of our Capstone project. Our team has a unique blend of skills
                        . Among us we carry a plethora of different developmental backgrounds, public speaking, and entrepreneurship. If you'd like to get in touch with any of us, please feel free to check out our profiles.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-5">
                <!-- Team Member -->
                <div class="team-member text-center">
                    <div class="image">
                        <img class="img-fluid" src="images/huru/team/kareem.png" alt="team-member">
                    </div>
                    <div class="name">
                        <h5>Kareem Dasilva</h5>
                    </div>
                    <div class="position">
                        <p>Product Owner</p>
                    </div>
                    <ul class="social-icons list-inline">
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-facebook"></i></a>--}}
                        {{--</li>--}}
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/kareem-dasilva-29729499/"><i class="tf-ion-social-linkedin"></i></a>
                        </li>
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-instagram-outline"></i></a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-5">
                <!-- Team Member -->
                <div class="team-member text-center">
                    <div class="image">
                        <img class="img-fluid" src="images/huru/team/mykalia.png" alt="team-member">
                    </div>
                    <div class="name">
                        <h5>Mykaila Johnson</h5>
                    </div>
                    <div class="position">
                        <p>Scrum Master</p>
                    </div>
                    <ul class="social-icons list-inline">
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-facebook"></i></a>--}}
                        {{--</li>--}}
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/mykaila-johnson-553529169/"><i class="tf-ion-social-linkedin"></i></a>
                        </li>
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-instagram-outline"></i></a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-5">
                <!-- Team Member -->
                <div class="team-member text-center">
                    <div class="image">
                        <img class="img-fluid" src="images/huru/team/malcolm.png" alt="team-member">
                    </div>
                    <div class="name">
                        <h5>Malcolm Bryant</h5>
                    </div>
                    <div class="position">
                        <p>Alexa</p>
                    </div>
                    <ul class="social-icons list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/malcolm.bryant.18"><i class="tf-ion-social-facebook"></i></a>
                        </li>
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-twitter"></i></a>--}}
                        {{--</li>--}}
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-linkedin"></i></a>--}}
                        {{--</li>--}}
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-instagram-outline"></i></a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-5">
                <!-- Team Member -->
                <div class="team-member text-center">
                    <div class="image">
                        <img class="img-fluid" src="images/huru/team/omar.png" alt="team-member">
                    </div>
                    <div class="name">
                        <h5>Omar Alghamdi</h5>
                    </div>
                    <div class="position">
                        <p>Logic</p>
                    </div>
                    <ul class="social-icons list-inline">
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-facebook"></i></a>--}}
                        {{--</li>--}}
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li class="list-inline-item">
                            <a href=""><i class="tf-ion-social-linkedin"></i></a>
                        </li>
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-instagram-outline"></i></a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-5">
                <!-- Team Member -->
                <div class="team-member text-center">
                    <div class="image">
                        <img class="img-fluid" src="images/huru/team/toti.png" alt="team-member">
                    </div>
                    <div class="name">
                        <h5>Toti Cuervo</h5>
                    </div>
                    <div class="position">
                        <p>Developer</p>
                    </div>
                    <ul class="social-icons list-inline">
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-facebook"></i></a>--}}
                        {{--</li>--}}
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/toti-cuervo-zt1314/"><i class="tf-ion-social-linkedin"></i></a>
                        </li>
                        {{--<li class="list-inline-item">--}}
                        {{--<a href=""><i class="tf-ion-social-instagram-outline"></i></a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====  End of Team  ====-->




<section class="cta-download bg-3 overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="image-block"><img class="img-fluid" src="images/huru/phones/iphone-feature-2.png" alt=""></div>
            </div>
            <div class="col-lg-7">
                <div class="content-block">
                    <!-- Title -->
                    <h2>Free Download Now</h2>
                    <!-- Desctcription -->
                    <p>Start taking care of the most important thing, your health!</p>
                    <!-- App Badge -->
                    <div class="app-badge">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#"><img class="img-fluid" src="images/huru/app-badge/app-store.png" alt="app-store"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====  End of Call to Action Download  ====-->


{{--<!--=================================--}}
{{--=            Testimonial            =--}}
{{--==================================-->--}}

{{--<section class="section testimonial bg-primary-shape" id="testimonial">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-12">--}}
{{--<div class="section-title">--}}
{{--<h2 class="text-white">Our Happy Customers</h2>--}}
{{--<p class="text-white">Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee idea of denouncing pleasure and praising</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 m-auto">--}}
{{--<!-- Testimonial Carosel -->--}}
{{--<div class="testimonial-slider">--}}
{{--<!-- testimonial item -->--}}
{{--<div class="testimonial-item">--}}
{{--<div class="content">--}}
{{--<div class="name">--}}
{{--<h5>Kris lazy Cistin Miloti</h5>--}}
{{--</div>--}}
{{--<div class="pos-in-com">--}}
{{--<p>CEO at <span>Themefisher</span></p>--}}
{{--</div>--}}
{{--<div class="speech">--}}
{{--<p>Explain to you how all this mistaken idea of denouncing tis pleasure and praising pain was born and I will give you a complete praising the account is account the. </p>--}}
{{--</div>--}}
{{--<ul class="rating list-inline">--}}
{{--<li class="list-inline-item">--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--</li>--}}
{{--</ul>		</div>--}}
{{--<div class="image">--}}
{{--<img class="img-fluid" src="images/huru/testimonial/review-person-one.png" alt="testimonial-person">--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- testimonial item -->--}}
{{--<div class="testimonial-item">--}}
{{--<div class="content">--}}
{{--<div class="name">--}}
{{--<h5>Kris lazy Cistin Miloti</h5>--}}
{{--</div>--}}
{{--<div class="pos-in-com">--}}
{{--<p>CEO at<span>Themefisher</span></p>--}}
{{--</div>--}}
{{--<div class="speech">--}}
{{--<p>Explain to you how all this mistaken idea of denouncing tis pleasure and praising pain was born and I will give you a complete praising the account is account the. </p>--}}
{{--</div>--}}
{{--<div class="rating">--}}
{{--<ul class="rating list-inline">--}}
{{--<li class="list-inline-item">--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--<i class="tf-ion-android-star"></i>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="image">--}}
{{--<img class="img-fluid" src="images/huru/testimonial/review-person-one.png" alt="testimonial-person">--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}


{{--<!--====  End of Testimonial  ====-->--}}

{{--<section class="section cta-subscribe" id="contact">--}}
{{--<div class="container">--}}
{{--<div class="row bg-elipse-red">--}}
{{--<div class="col-lg-4">--}}
{{--<div class="image"><img src="images/huru/phones/iphone-banner.png" alt="iphone-app"></div>--}}
{{--</div>--}}
{{--<div class="col-lg-8 align-self-center">--}}
{{--<div class="content">--}}
{{--<div class="title">--}}
{{--<h2>Subscribe Our Newsletter</h2>--}}
{{--</div>--}}
{{--<div class="description">--}}
{{--<p>Demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee idea of denouncing pleasure and praising</p>--}}
{{--</div>--}}
{{--<form action="#">--}}
{{--<div class="input-group">--}}
{{--<input type="text" class="form-control main" placeholder="Enter your email address">--}}
{{--<span class="input-group-addon tf-ion-android-send" id="btnGroupAddon"></span>--}}
{{--</div>--}}
{{--</form>--}}
{{--<div class="subscription-tag text-right">--}}
{{--<p>Subscribe To Our Newsletter & Stay Updated</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mr-auto">
                <div class="footer-logo">
                    <img src="images/huru/HuruLogo.png" alt="footer-logo" style="height:70px;">
                </div>
                {{--<div class="copyright">--}}
                {{--<p>@2018 Themefisher All Rights Reserved  |  Design By : <a href="https://themefisher.com/" target="_blank">Themefisher</a>  Team--}}
                {{--<br>Get More <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">Free Bootstrap Templates</a>--}}
                {{--</p>--}}
                {{--</div>--}}
            </div>
            <div class="col-lg-6 text-lg-right">
                <!-- Social Icons -->
            {{--<ul class="social-icons list-inline">--}}
            {{--<li class="list-inline-item">--}}
            {{--<a href=""><i class="tf-ion-social-facebook"></i></a>--}}
            {{--</li>--}}
            {{--<li class="list-inline-item">--}}
            {{--<a href=""><i class="tf-ion-social-twitter"></i></a>--}}
            {{--</li>--}}
            {{--<li class="list-inline-item">--}}
            {{--<a href=""><i class="tf-ion-social-linkedin"></i></a>--}}
            {{--</li>--}}
            {{--<li class="list-inline-item">--}}
            {{--<a href=""><i class="tf-ion-social-instagram-outline"></i></a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            <!-- Footer Links -->
                <ul class="footer-links list-inline">
                    <li class="list-inline-item">
                        <a href="#">ABOUT</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">TEAM</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>



<!-- JAVASCRIPTS -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>

<script src="plugins/jquery/jquery.js"></script>
<script src="plugins/popper/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<script src="js/custom.js"></script>

</body>

</html>

