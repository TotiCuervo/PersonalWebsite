<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Toti Cuervo</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}


    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body class="">


<section id="home" class="container-fluid">
    <div class="row">
        {{--<div class="col-md-4 p-0">--}}
        {{--<h1>Hello</h1>--}}
        {{--</div>--}}
        <div class="col-md-12 p-0">
            <div class="jumbotron parallax paralsec m-0">
               <div class="container cover">
                   <div class="row">
                       <div class="col-md-12 text-center">
                           <h3 style="color:white;"><i>Hey there! Im</i></h3>
                           <div class="big-text" style="color:white;">
                                Toti Cuervo
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>

<section id="education">
    <div class="container">
        <div class="row education-info">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6 pb-20">
                        <div class="card education-card scale-card center-card">
                            <div class="degree-wrapper">
                                <div class="card-img-wrapper text-center">
                                    <img class="img-fluid card-img" src="/images/memphis.png">
                                </div>
                                <div class="degree-text text-center">
                                    <h6 class="degree-name">Computer Science</h6>
                                    <small class="text-muted">The University of Memphis<br><i>Earned 2019</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-20">
                        <div class="card education-card scale-card center-card">
                            <div class="degree-wrapper">
                                <div class="card-img-wrapper text-center">
                                    <img class="img-fluid card-img" src="/images/memphis.png">
                                </div>
                                <div class="degree-text text-center">
                                    <h6 class="degree-name">Business Management</h6>
                                    <small class="text-muted">The University of Memphis<br><i>Earned 2019</i></small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-5">
                <h3>My Education</h3>
                <p>
                    I decided that I wanted to pursue two different degrees to fufill one major passion of mine: innovation.
                    I wanted to have the ability to create as well as lead. These two concentrations has allowed me to bridge the divide
                    betweeen the technical and the managerial worlds.

                </p>
            </div>
        </div>
    </div>
</section>

{{--<section id="personal1" class="container-fluid">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12 section-parallax paralsec-stjude pl-auto">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 offset-6">--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-body">--}}
                            {{--My younger brother was diagnosed with Leukemia when I was two years old. We moved from Caracas, Venezuela to go--}}
                            {{--recieve treatment at St. Jude Children's Research Hospital. St. Jude is hospital where no child no child is denied treatment based on race, religion or a family's ability to pay.--}}
                            {{--<br><br>--}}
                            {{--The hospital gave my brother a second chance of life, so I was extremely blessed to serve as the Executive Director of Up 'til Dawn,--}}
                            {{--a student organization that raises money for St. Jude. With over a thousand participants in our annual Finale event, we raised--}}
                            {{--$155,813 for St. Jude!--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

<section id="resume">

    <div class="container">
        <h1 class="text-center pt-30">Big Three Experiences</h1>
        <div class="row">

            <div class="col-md-4 text-center pad-20">
                <a href="https://studyupapp.com/" style="text-decoration: none; color:inherit;" target="_blank">
                    <div class="experience-card">
                        <div class="big3-header">
                            <img class="img-fluid img-exp" src="/images/studyupLogo.png">
                            <h5 class="mb-0">Co-Founder</h5>
                            <small>Study Up</small>
                        </div>
                        <div class="big3-body">
                            <p>
                                I founded StudyUp after I had to study for a 10 question test that had more than 100 hundred questions
                                on the study guide. It is an online platform where students can collaboratively take notes together in real time.
                            </p>
                            <div class="big3-footer">
                                <small class="big3-footer-text">
                                    Learn More
                                    <i class="fas fa-arrow-right fa-1x pl-2"></i>
                                </small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 text-center pad-20">
                <a href="https://www.autozone.com/" style="text-decoration: none; color:inherit;" target="_blank">
                    <div class="experience-card">
                        <div class="big3-header">
                            <img class="img-fluid img-exp w-230 h-auto" src="/images/autozone.jpg">
                            <h5 class="mb-0">eCommerce Intern</h5>
                            <small>AutoZone</small>
                        </div>
                        <div class="big3-body">
                            <p>
                                I have done a wide variety of things during my internship at AutoZone.
                                From working on website design to catching fraudsters, I got to practice the Agile Methodology on a wide variety of projects.
                                I even developed a Virtual Reality store in Unity!
                            </p>
                            <div class="big3-footer">
                                <small class="big3-footer-text">
                                    Learn More
                                    <i class="fas fa-arrow-right fa-1x pl-2"></i>
                                </small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 text-center pad-20">
                <a href="https://www.stjude.org/" style="text-decoration: none; color:inherit;" target="_blank">
                    <div class="experience-card">
                        <div class="big3-header">
                            <img class="img-fluid img-exp w-230 h-auto pt-55" src="/images/utdLogo.png">
                            <h5 class="mb-0">Executive Director</h5>
                            <small>St.Jude Up 'til Dawn</small>
                        </div>
                        <div class="big3-body">
                            <p>
                                Up 'til Dawn is a student organization thar raises money for St. Jude Children's Research Hospital. As the Executive Director I led
                                the orgnization in raising $155,813 for the kids of St. jude!
                            </p>
                            <div class="big3-footer">
                                <small class="big3-footer-text">
                                    Learn More
                                    <i class="fas fa-arrow-right fa-1x pl-2"></i>
                                </small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <div class="container">
        <h2 class="pad-20 text-center">Other Experiences</h2>
        <div class="experience-wrapper">
            <div class="row pb-50">
                <div class="col-md-5 text-center">
                    <img class="img-fluid img-wrapper " style="width: 200px;" src="/images/ultimateFoods.png">
                </div>
                <div class="col-md-7">
                    <a href="https://www.soli.life/"><h5>Marketing Intern</h5></a>
                    <h6>Ultimate Foods<i>, now named Soli.life</i></h6>
                    <p>
                        Ultimate Foods sells healthy food on the go. Customers can purchase premade meal that can be heated in any ordinary microwave.
                        I joined the business when it was fairly young and was able to create
                        and implement various social media campaigns while also helping them forecast potential revenue.
                    </p>
                    </p>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-md-5 text-center">
                    <img class="img-fluid img-wrapper" style="width: 250px;" src="/images/imagineU.png">
                </div>
                <div class="col-md-7">
                    <a href="http://www.imagineuaccelerator.com/about.html"><h5>Imagine U Accelerator</h5></a>
                    <h6>Ultimate Foods</h6>
                    <p>
                        the Imagine U program is an entrepreneural accelerator at the Crew's Center For Entrepreneurship at the University of Memphis.
                        It consists of a summer long venture where you learn the ins and outs of starting a business. This program taught me the core fundamentals of
                        entrepreneurship and launched my interest in starting my own business.
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-md-5 text-center">
                    <img class="img-fluid img-wrapper" src="/images/crewsLogo.jpg">
                </div>
                <div class="col-md-7">
                    <a href="https://www.memphis.edu/crews/programs/cceresidency.php"><h5>Entrepreneur Fellowship</h5></a>
                    <h6>Crew's Center For Entrepreneurship</h6>
                    <p>
                        The fellowship is a hands-on mentorship that provides startup capital and resources to entrepreneurs that are interested
                        in starting a business.
                        During my time I created two different platforms
                        while also networking with potential partners and customers.

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="experience-CTA pb-50">
                        <h2 class="text-muted">
                            ...And Lots More. Download My Resume <a href="/files/TotiCuervoResume.pdf" target="_blank">Here</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

{{--<section id="personal2" class="container-fluid">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12 section-parallax paralsec-stjude pl-auto">--}}
            {{--<div class="col-md-6 mt-100 float-left">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor--}}
                        {{--incididunt ut labore et--}}
                        {{--dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
                        {{--laboris nisi ut aliquip ex--}}
                        {{--ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
                        {{--cillum dolore eu fugiat--}}
                        {{--nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui--}}
                        {{--officia deserunt mollit--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

<section id="abilities">
    <div class="container container-wrapper">
        <h3>Skills</h3>
        <div class="row">
            <div class="col-md-6">
                <ul class="no-bullets">
                    <li class="ptb-5">
                        <span class="skill-title">Bootstrap Framework</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">HTML(5)</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">CSS(3)</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">MYSQL</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">PHP</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">Java</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="no-bullets">
                    <li class="ptb-5">
                        <span class="skill-title">Object Oriented Programming</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">Python</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">Ruby</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">Laravel Framework</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">Ruby on Rails</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">VueJS</span>
                    </li>
                </ul>
            </div>
        </div>
        <p class="text-muted text-center pt-20">Currently developing skills on: React, React-Native, Unity, Swift</p>
        <hr>
        <h3>Tools</h3>
        <div class="row">
            <div class="col-md-6">
                <ul class="no-bullets">
                    <li class="ptb-5">
                        <span class="skill-title">Atlassian / Jira (2 years)</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">Git (4 years)</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">PHPStorm (3 years)</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="no-bullets">
                    <li class="ptb-5">
                        <span class="skill-title">Sublime Text (3 years)</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">Adobe Photoshop (6 years)</span>
                    </li>
                    <li class="ptb-5">
                        <span class="skill-title">Microsoft Excel Certified (4 years)</span>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <h3>Business</h3>
        <div class="row">
            <div class="col-md-4">
                <span class="skill-title">Public Speaking</span>
            </div>
            <div class="col-md-4">
                <span class="skill-title">Agile Methodology</span>
            </div>
            <div class="col-md-4">
                <span class="skill-title">Brand Development</span>
            </div>
        </div>
    </div>
</section>

<section id="awards">
    <div class="container text-center">
        <h2 class="text-center pad-20"><i><b>A LITTLE RECOGNITION</b></i></h2>
        <div class="row">
            <div class="col-md-4 text-center pad-20">
                <a href="http://neverstop.co/winners-announced-from-pre-seed-pitch-competition-2/"
                   style="text-decoration: none; color:inherit;" target="_blank">
                    <div class="experience-card">
                        <div class="big3-header">
                            <img class="img-fluid img-exp" src="/images/startco.png">
                            <h5 class="mb-0">Start Co Pre-Seed Competition Winner</h5>
                            <small>StartCo, 2017</small>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 text-center pad-20">
                <a href="https://cc.lambdachi.org/wp-content/uploads/2019/01/FINAL-InDesign-File-Jan-CC.pdf"
                   style="text-decoration: none; color:inherit;" target="_blank">
                    <div class="experience-card">
                        <div class="big3-header">
                            <img class="img-fluid img-exp w-230 h-auto mg-50-25" src="/images/CC.png" class="card-img-top award-img img-fluid">
                            <h5 class="mb-0">Doing The Impossible</h5>
                            <small>Cross & Crescent Magazine, 2019</small>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 text-center pad-20">

                <a href="https://www.youtube.com/watch?v=VuM9Tj96hXE" style="text-decoration: none; color:inherit;"
                   target="_blank">
                    <div class="experience-card">
                        <div class="big3-header">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/VuM9Tj96hXE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            <h5 class="mb-0 mt-10">LCA Made: Toti Cuervo</h5>
                            <small>Lambda Chi Alpha, 2019</small>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 text-center pad-20 offset-md-2">
                <a href="https://www.toastmasters.org/"
                   style="text-decoration: none; color:inherit;" target="_blank">
                    <div class="experience-card">
                        <div class="big3-header">
                            <img class="img-fluid img-exp mx-75" src="/images/toastmasters.png">
                            <h5 class="mb-0">Best Overall Presentation</h5>
                            <small>AutoZone ToastMasters, 2018</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 text-center pad-20">
                <a href="https://www.memphis.edu/crews/fastpitch.php"
                   style="text-decoration: none; color:inherit;" target="_blank">
                    <div class="experience-card">
                        <div class="big3-header">
                            <img class="img-fluid img-exp mg-50-10" src="/images/crewsLogo.jpg">
                            <h5 class="mb-0">2nd Place & People’s Choice</h5>
                            <small>Fast Pitch Competition, 2018</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div>
</section>

<section id="picture-gallery">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal3">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery1.jpg">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery1.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal2">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery6.jpg">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery6.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal3">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery2.jpg">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery2.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal4">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery3.jpg">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery3.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal5">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery4.jpg">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery4.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal6">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery7.jpg">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery7.jpg">
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal7">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery8.JPG">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery8.JPG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal8">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery9.JPG">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery9.JPG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal9">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery10.JPG">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery10.JPG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal10">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery11.JPG">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery11.JPG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal11">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery12.jpg">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery12.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 nopad-lr">
                <a data-toggle="modal" data-target="#exampleModal12">
                    <div class="hovereffect">
                        <img class="img-fluid gallery-img" src="/images/gallery/gallery5.jpg">
                    </div>
                </a>

                <div class="modal fade bd-example-modal-xl" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="gallery-modal-img" src="/images/gallery/gallery5.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cta">
    <div class="container">
        <div class="row pt-55">
            <div class="col-md-12 text-center">
                <h1 class="text-center">Let's Get In Touch!</h1>
                <p> My email works best: <a href="mailto: totifercuervo@gmail.com" >TotiferCuervo@gmail.com</a>
                    <br>You can also check me out on Github and LinkedIn
                    <br>Download My Resume <a href="/files/TotiCuervoResume.pdf" target="_blank">Here</a>
                </p>
            </div>
        </div>
        <div class="row pb-50">
            <div class="col-md-12 text-center">
                <a href="" target="_blank">
                    <i class="fab fa-github-square fa-7x"></i>
                </a>
                <a href="https://www.linkedin.com/in/toti-cuervo-zt1314/" target="_blank">
                    <i class="fab fa-linkedin fa-7x"></i>
                </a>
            </div>
        </div>
    </div>
</section>















{{--<section id="awards">--}}
    {{--<div class="container text-center">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-3">--}}
                        {{--<div class="card passion-card shadow">--}}
                            {{--<div class="card-body passion-card-body">--}}
                                {{--<h3>Awards</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row pad-row">--}}
            {{--<div class="col-md-3 pb-20">--}}
                {{--<a href="http://neverstop.co/winners-announced-from-pre-seed-pitch-competition-2/"--}}
                   {{--style="text-decoration: none; color:inherit;" target="_blank">--}}
                    {{--<div class="card award-card shadow">--}}
                        {{--<img src="/images/startco.png" class="card-img-top award-img img-fluid" alt="...">--}}
                        {{--<div class="card-body">--}}
                            {{--<h6><b>Start Co Pre-Seed Competition Winner</b></h6>--}}
                            {{--<p class="card-text">StartCo, 2017</p>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 pb-20">--}}
                {{--<a href="https://cc.lambdachi.org/wp-content/uploads/2019/01/FINAL-InDesign-File-Jan-CC.pdf"--}}
                   {{--style="text-decoration: none; color:inherit;" target="_blank">--}}
                    {{--<div class="card award-card shadow">--}}
                        {{--<img src="/images/CC.png" class="card-img-top award-img img-fluid" alt="...">--}}
                        {{--<div class="card-body">--}}
                            {{--<h6><b>Doing The Impossible</b></h6>--}}
                            {{--<p class="card-text">Cross & Crescent Magazine, 2019 </p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 pb-20">--}}
                {{--<a href="https://www.youtube.com/watch?v=VuM9Tj96hXE" style="text-decoration: none; color:inherit;"--}}
                   {{--target="_blank">--}}
                    {{--<div class="card award-card shadow">--}}
                        {{--<img src="/images/lcaMade.png" class="card-img-top award-img" alt="...">--}}
                        {{--<div class="card-body">--}}
                            {{--<h6><b>LCA Made</b></h6>--}}
                            {{--<p class="card-text">Lambda Chi Alpha, 2019</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 pb-20">--}}
                {{--<div class="card award-card shadow">--}}
                    {{--<div class="card-title award-title"><h3>Other Awards</h3></div>--}}
                    {{--<div class="card-body pt-0">--}}
                        {{--<p class="card-text">--}}
                            {{--<b>Best Overall Presentation</b>--}}
                            {{--<br>--}}
                            {{--<small class="d-sm-none d-md-block">AutoZone ToastMasters, 2018</small>--}}
                        {{--</p>--}}
                        {{--<br>--}}
                        {{--<p class="card-text">--}}
                            {{--<b>2nd Place & People’s Choice</b>--}}
                            {{--<br>--}}
                            {{--<small class="d-sm-none d-md-block">Fast Pitch Competition, 2018</small>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}



{{--<section id="gallery">--}}
{{--<div class="container-fluid nopad-lr">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12 text-center">--}}
{{--<h3>I also give </h3>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-3 nopad-lr">--}}
{{--<div class="embed-responsive embed-responsive-16by9">--}}
{{--<iframe width="560" height="315" src="https://www.youtube.com/embed/B5j1u73asiY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-3 nopad-lr">--}}
{{--<div class="embed-responsive embed-responsive-16by9">--}}
{{--<iframe width="560" height="315" src="https://www.youtube.com/embed/mGKb55Au82s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>--}}
{{--</div>--}}
{{--<div class="col-md-3 nopad-lr">--}}
{{--<div class="embed-responsive embed-responsive-16by9">--}}
{{--<iframe width="560" height="315" src="https://www.youtube.com/embed/nhUFCJCZcJQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>--}}
{{--</div>--}}
{{--<div class="col-md-3 nopad-lr">--}}
{{--<div class="embed-responsive embed-responsive-16by9">--}}
{{--<iframe width="560" height="315" src="https://www.youtube.com/embed/d15x7L_K1-U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--</section>--}}











</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
</html>