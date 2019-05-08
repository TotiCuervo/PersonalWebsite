<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}


    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet" type="text/css">
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
            <div class="jumbotron parallax paralsec1 m-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card intro-card text-center">
                            <div class="card-body">
                                <h1>Welcome to my website</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit</p>
                            </div>
                            <div class="connect">
                                <div class="card-body">
                                    <div class="row connect-buttons">
                                        <div class="col-md-12" align="center">
                                            <a href="https://www.linkedin.com/in/toti-cuervo-zt1314/" target="_blank">
                                                <i class="fab fa-linkedin fa-2x"></i>
                                            </a>
                                            <a href="" target="_blank">
                                                <i class="fab fa-github-square fa-2x"></i>
                                            </a>
                                            <a href="" target="_blank">
                                                <i class="fab fa-instagram fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <button type="button" class="btn btn-primary btn-lg btn-circle">Let's
                                                Connect
                                            </button>
                                        </div>
                                    </div>
                                </div>
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
        {{--<div class="education-header-wrapper">--}}
        {{--<h1 class="text-center">Education</h1>--}}
        {{--<hr>--}}
        {{--</div>--}}
        <div class="row education-info">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card education-card scale-card">
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
                    <div class="col-md-6">
                        <div class="card education-card scale-card">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit</p>
            </div>
        </div>
    </div>
</section>

<section id="resume">

    <div class="container">
        <h2 class="text-center pt-30">Big Three Experiences</h2>
        <div class="row">

            <div class="col-md-4 text-center pad-20">
                <div class="experience-card">
                    <div class="big3-header">
                        <img class="img-fluid img-exp" src="/images/studyupLogo.png">
                        <h5 class="mb-0">Co-Founder</h5>
                        <small>Study Up</small>
                    </div>
                    <div class="big3-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex</p>
                        <div class="big3-footer">
                            <small class="big3-footer-text">
                                Learn More
                                <i class="fas fa-arrow-right fa-1x pl-2"></i>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center pad-20">
                <div class="experience-card">
                    <div class="big3-header">
                        <img class="img-fluid img-exp w-230 h-auto" src="/images/autozone.jpg">
                        <h5 class="mb-0">eCommerce Intern</h5>
                        <small>AutoZone</small>
                    </div>
                    <div class="big3-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex</p>
                        <div class="big3-footer">
                            <small class="big3-footer-text">
                                Learn More
                                <i class="fas fa-arrow-right fa-1x pl-2"></i>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center pad-20">
                <div class="experience-card">
                    <div class="big3-header">
                        <img class="img-fluid img-exp w-230 h-auto pt-55" src="/images/utdLogo.png">
                        <h5 class="mb-0">Executive Director</h5>
                        <small>St.Jude Up 'til Dawn</small>
                    </div>
                    <div class="big3-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex</p>
                        <div class="big3-footer">
                            <small class="big3-footer-text">
                                Learn More
                                <i class="fas fa-arrow-right fa-1x pl-2"></i>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="experience-wrapper">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="pad-20">Other Experiences</h2>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-md-5 text-center">
                    <img class="img-fluid img-wrapper " style="width: 200px;" src="/images/ultimateFoods.png">
                </div>
                <div class="col-md-7">
                    <a href="https://www.soli.life/"><h5>Marketing Intern</h5></a>
                    <h6>Ultimate Foods<i>, now named Soli.life</i></h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    </p>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-md-5 text-center">
                    <img class="img-fluid img-wrapper" style="width: 250px;" src="/images/ImagineU.png">
                </div>
                <div class="col-md-7">
                    <a href="http://www.imagineuaccelerator.com/about.html"><h5>Imagine U Accelerator</h5></a>
                    <h6>Ultimate Foods</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    </p>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-md-5 text-center">
                    <img class="img-fluid img-wrapper" src="/images/crewsLogo.jpg">
                </div>
                <div class="col-md-7">
                    <h5>Entrepreneur Fellowship</h5>
                    <h6>Crew's Center For Entrepreneurship</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    </p>
                </div>
            </div>
        </div>
    </div>


</section>





<section id="skills">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>




<section id="awards">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card passion-card shadow">
                            <div class="card-body passion-card-body">
                                <h3>Awards</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pad-row">
            <div class="col-md-3 pb-20">
                <a href="http://neverstop.co/winners-announced-from-pre-seed-pitch-competition-2/"
                   style="text-decoration: none; color:inherit;" target="_blank">
                    <div class="card award-card shadow">
                        <img src="/images/startco.png" class="card-img-top award-img img-fluid" alt="...">
                        <div class="card-body">
                            <h6><b>Start Co Pre-Seed Competition Winner</b></h6>
                            <p class="card-text">StartCo, 2017</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 pb-20">
                <a href="https://cc.lambdachi.org/wp-content/uploads/2019/01/FINAL-InDesign-File-Jan-CC.pdf"
                   style="text-decoration: none; color:inherit;" target="_blank">
                    <div class="card award-card shadow">
                        <img src="/images/CC.png" class="card-img-top award-img img-fluid" alt="...">
                        <div class="card-body">
                            <h6><b>Doing The Impossible</b></h6>
                            <p class="card-text">Cross & Crescent Magazine, 2019 </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 pb-20">
                <a href="https://www.youtube.com/watch?v=VuM9Tj96hXE" style="text-decoration: none; color:inherit;"
                   target="_blank">
                    <div class="card award-card shadow">
                        <img src="/images/lcaMade.png" class="card-img-top award-img" alt="...">
                        <div class="card-body">
                            <h6><b>LCA Made</b></h6>
                            <p class="card-text">Lambda Chi Alpha, 2019</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 pb-20">
                <div class="card award-card shadow">
                    <div class="card-title award-title"><h3>Other Awards</h3></div>
                    <div class="card-body pt-0">
                        <p class="card-text">
                            <b>Best Overall Presentation</b>
                            <br>
                            <small class="d-sm-none d-md-block">AutoZone ToastMasters, 2018</small>
                        </p>
                        <br>
                        <p class="card-text">
                            <b>2nd Place & People’s Choice</b>
                            <br>
                            <small class="d-sm-none d-md-block">Fast Pitch Competition, 2018</small>
                        </p>
                    </div>
                </div>
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