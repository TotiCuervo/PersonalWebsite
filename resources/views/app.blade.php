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

<section id="recent-work" class="container">
    <div class="pt-50 text-center">
        <h2>Some of my recent work</h2>
        <span class="text-muted"><i>Click to find out more</i></span>
    </div>

    <div class="row pb-20 pt-50 ">
        <div class="col-md-12 text-center">

            <a href="" data-toggle="modal" data-target=".bd-example-modal-xl"><h5>StudyUp: I founded an online platform that helps students take notes online</h5></a>
            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row pad-20">
                                    <div class="col-md-12">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h1>StudyUp</h1>
                                        <p><b>Role:</b> Web developer, Co-Founder, Brand Developer</p>
                                        <a href="https://studyupapp.com/"><p>StudyUpApp.com</p></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div align="center" class="embed-responsive embed-responsive-16by9">
                                                        <video controls class="embed-responsive-item">
                                                            <source src="/images/studyUp/studyupVid.mp4" type="video/mp4">
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/images/studyUp/mockups.jpg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/images/studyUp/bigStudy.jpg" class="d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-left">
                                            <b>What it does:</b>
                                            <br>
                                            StudyUp is an online platform that allows students to collaboratively take notes together in real time.
                                            Students can create Classrooms where they can add their classmates. In these classrooms they can make any number
                                            of Notebooks that they would like. In these Notebooks students can take notes using our custom editor. Each Classroom
                                            has a Chat where classmates can talk with each other.
                                            <br>
                                        </p>
                                        <p class="text-left">
                                            <b>How it was made:</b>
                                            <br>
                                            The entire project is made in the Laravel PHP framework using basic HTML and CSS for the front-end. The elements were customized to fit our needs while taking advantage of the Bootstrap toolkit to make the basic layout.
                                            Creating a single page web application was fundamental to this project in order to give students a "real-time" experience. To do this, we used the powerful
                                            VueJS framework to complete our most important components of Classroom, Notebook, Chat, and Note-Taking.
                                        </p>
                                        <p class="text-left">
                                            <b>Components:</b>
                                            <br>
                                        </p>
                                        <ul id="menu" class="text-left">
                                            <li class="pr-10">HTML</li>
                                            <li class="pr-10">CSS</li>
                                            <li class="pr-10">JavaScript</li>
                                            <li class="pr-10">PHP</li>
                                            <li class="pr-10">Laravel</li>
                                            <li class="pr-10">VueJS</li>
                                            <li class="pr-10">MYSQL</li>
                                            <li class="pr-10">Bootstrap</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <br>

            <a href="" data-toggle="modal" data-target="#modal-2"><h5>Huru: A project I worked on that let's you talk to any Alexa-enabled device about your health</h5></a>
            <div class="modal fade bd-example-modal-xl" id="modal-2"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row pad-20">
                                    <div class="col-md-12">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h2>Huru</h2>
                                        <p><b>Role:</b> Web developer, Brand Designer, Consultant </p>
                                        <p>While the landing page is not live, you can view it on <a href="huru">here.</a></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="/images/huruMock.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="text-left">
                                            <b>What it does:</b>
                                            <br>
                                            Huru is a IOS App that connects a user's Apple HealthKit to Amazon Alexa which allows the user to have a conversation with Alexa over their health information.
                                            A user can ask things like "Alexa, how am I doing?" or "Alexa, how many steps have I taken today?" and Alexa will give up to date realtime information.
                                            On top of all of this, Huru also enables Alexa to compare how you are doing to the national average.
                                            <br>
                                        </p>
                                        <p class="text-left">
                                            <b>How it was made:</b>
                                            <br>
                                            This project consists of two major components: the Alexa component and the IOS component. For the Alexa component we created scales (a fancy word for
                                            verbal commands) that Alexa would listen out to. When one of these verbal commands gets triggered, a set of functions occur that retrieve the relevant information
                                            and compiles it into a setence. On the IOS side the app is made using Swift. When a user opens the app they must grant permission for the app to use their health information
                                            and bingo, connected!
                                            <br>
                                            AWS Lambda Server and DynamoDB is used to connect the two components. The DynamoDB is hosted on the Lambda Server. Tbe IOS app updates the DynamoDB with the health information
                                            from HealthKit, and the Alexa pulls this information from DynamoDB for the verbal responses
                                        </p>
                                        <p class="text-left">
                                            <b>My Role:</b>
                                            I contributed to the architectural design of the project, working on IOS App component. I created the name, brand logo,
                                            and the landing page for the app.
                                            <br>
                                        </p>
                                        <p class="text-left">
                                            <b>Components:</b>
                                            <br>
                                        </p>
                                        <ul id="menu" class="text-left">
                                            <li class="pr-10">HTML</li>
                                            <li class="pr-10">Swift</li>
                                            <li class="pr-10">AWS</li>
                                            <li class="pr-10">Laravel</li>
                                            <li class="pr-10">DynamoDB</li>
                                            <li class="pr-10">Bootstrap</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <a href="" data-toggle="modal" data-target="#modal-3"><h5>I led an organization that raised $155,813 for St. Jude Children's Research Hospital in 11 months </h5></a>
            <div class="modal fade bd-example-modal-xl" id="modal-3"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row pad-20">
                                    <div class="col-md-12">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h2>Up 'til Dawn</h2>
                                        <p><b>Role:</b> Executive Director </p>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="row pb-20">
                                            <div class="col-md-12">
                                                <img src="/images/stjude/st.jude.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
                                                    {{--<ol class="carousel-indicators">--}}
                                                        {{--<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
                                                        {{--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
                                                        {{--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
                                                    {{--</ol>--}}
                                                    {{--<div class="carousel-inner">--}}
                                                        {{--<div class="carousel-item active">--}}
                                                            {{--<div align="center" class="embed-responsive embed-responsive-16by9">--}}
                                                                {{--<video controls class="embed-responsive-item">--}}
                                                                    {{--<source src="/images/studyUp/studyupVid.mp4" type="video/mp4">--}}
                                                                {{--</video>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="carousel-item">--}}
                                                            {{--<img src="/images/studyUp/mockups.jpg" class="d-block w-100" alt="...">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="carousel-item">--}}
                                                            {{--<img src="/images/studyUp/bigStudy.jpg" class="d-block w-100" alt="...">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
                                                        {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                                                        {{--<span class="sr-only">Previous</span>--}}
                                                    {{--</a>--}}
                                                    {{--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
                                                        {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                                                        {{--<span class="sr-only">Next</span>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>

                                    <div class="col-md-6">
                                        <p class="text-left">
                                            <b>What is Up 'til Dawn:</b>
                                            <br>
                                            Up 'til Dawn is a student organization that raises money for St. Jude Children's Research Hospital. Founded at the University of Memphis,
                                            my chapter raises more than $100,000 for the kids of St. Jude. We do this by getting other students to fundraise through a personal fundraising page.
                                            <br>
                                        </p>
                                        <p class="text-left">
                                            <b>My role:</b>
                                            <br>
                                            As Executive Director, I acted as the liason between ALSAC, the fundraising branch of St. Jude, and the University of Memphis. I was given the task
                                            of setting up the vision of the organization, recruiting the executive board, and ensuring the success of the program. At the end of my tenure the
                                            organization raised $155,813!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row pad-20">
        <div class="col-md-12 text-center">
            <p>
                <b>What's up next:</b> Figuring out how to bring eCommerce to Virtual Reality, work on my startup to help students, and learning React
            </p>
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
        <h2 class="pad-20 text-center">What else I've done do far</h2>
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