@extends('layout')

@section('head')


    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <title> Contact | Musa Assaf</title>


@endsection('head')

@section('body')

    <section id="contact">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>CONTACT <span>ME</span></h2>
                    <div class="line"></div>
                    <p>If you enjoyed this website and would like to send me a message, please do! Enter your
                        information below</p>
                </div>
            </div>
            <div class="text-center">
                <div class="col-md-6 col-sm-6 contact-sec-1">
                    <h4>CONTACT IN<span>FO</span></h4>
                    <ul class="contact-form">
                        <li><i class="fa fa-map-marker"></i>
                            <h6><strong>Address:</strong> 136 Carisbrooke Road, Newport, Isle Of Wight </h6>
                        </li>
                        <li><i class="fa fa-envelope"></i>
                            <h6><strong>E-Mail Me:</strong> <a href="#">moussaassaf@gmail.com</a></h6>
                        </li>
                        <li><i class="fa fa-phone"></i>
                            <h6><strong>Phone:</strong> +44 07940 120378 </h6>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <form id="main-contact-form" name="contact-form" method="post" action="#">
                        <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address"
                                        required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject"
                                required="required">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4"
                                placeholder="Enter your message" required="required"></textarea>
                        </div>
                        <a class="btn-send col-md-12 col-sm-12 col-xs-12" href="/">Send Now</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection('body')
