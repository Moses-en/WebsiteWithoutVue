<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title> Home | Musa Assaf</title>

    <!--Responsive-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <!--Animation-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <!--Prettyphoto-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">
    <!--Owl-Slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!--Font-Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
</head>

<body>
    <!--Navigation-->
    <header id="menu">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span
                                class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a class="scroll" href="/">Home</a></li>
                            <li><a class="scroll" href="#">About Me</a></li>
                            <li><a class="scroll" href="/Skills">Skills</a></li>
                            <li><a class="scroll" href="/Projects">Projects</a></li>
                            <li>
                                <a class="btn-topMenu" href="/Contact">CONTACT ME </a>

                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </header>
    <!--Slider-Start-->

    <section id="slider">

        <div id="home-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image:url(images/Slider/me.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <h1>Hi, I'm Musa</h1>
                                <div class="tester">
                                    <a class="btn-Menu" href="#">About Me </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='vueRoot'>

                </div>


                <div class="item" style="background-image:url(images/Slider/projects.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <h1>My Projects </h1>
                                <p>I enjoy working on projects during my free time. Here's what i worked on so far!</p>
                                <div class="col-md-8 col-md-8">
                                    <a class="btn-Menu" href="/Projects"> VIEW MY PROJECTS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item" style="background-image:url(images/Slider/contact2.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <h1>Contact Me</h1>
                                <p>Contact me by following the link below!</p>
                                <div class="col-md-8 col-md-8">
                                    <a class="btn-Menu" href="/Contact"> CONTACT ME </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <a class="home-carousel-left" href="#home-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="home-carousel-right" href="#home-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <!--/#home-carousel-->
    </section>

    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="heading">
                <h2><span>About</span></span> Me</h2>
                <div class="line"></div>
                <p>Hi I'm Musa, Welcome to my website! I'm doing my final year of computer science at a university
                    called "American University of Science and Technology".
                    During my free time i like to code, play video games or learn some of my favorite songs on the
                    guitar or piano.
                </p>
            </div>
        </div>
    </div>
</body>

<footer id="footer-down">
    <h2>Follow Me On</h2>
    <ul class="social-icon">
        <li class="facebook hvr-pulse"><a href="https://facebook.com" target="_blank"><i
                    class="fa fa-facebook-f"></i></a></li>
        <li class="twitter hvr-pulse"><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
        </li>
        <li class="linkedin hvr-pulse"><a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
        </li>
        <li class="youtube hvr-pulse"><a href="https://youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
        </li>
        <li class="instagram hvr-pulse"><a href="https://www.instragram.com" target="_blank"><i
                    class="fa fa-instagram"></i></a>
        </li>
    </ul>
</footer>


<script src="js/useVue.js"></script>
<!--Jquery-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!--Boostrap-Jquery, mainly for the slides-->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--Main-Scripts-->
<script type="text/javascript" src="js/script.js"></script>
