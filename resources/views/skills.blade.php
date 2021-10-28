@extends('layout')

@section('head')


    <title> Skills | Musa Assaf</title>


@endsection



@section('body')

    <div class="container">
        <section id="service">
            <div class="container">

                <div class="col-md-8 col-md-offset-2">
                    <div class="heading">
                        <h2>My <span>Skills</span></h2>
                        <div class="line"></div>
                        <p>Over the years, i have acquired many skills either while studying at university or
                            learning by myself at home</p>
                    </div>
                </div>


                <div class="row">
                    <div class="features-sec">

                        @foreach ($skills as $skill)
                            <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp">
                                <div class="media service-box">
                                    <div class="pull-left"> <i class="{{ $skill->skl_img }}"></i> </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">{{ $skill->skl_title }}</h5>
                                        <p>
                                            {{ $skill->skl_desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

        <div class="experience">
            <div class="col-sm-6 col-md-7">

                @foreach ($stats as $stat)
                    <p class="lead">{{ $stat->ms_title }}</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:{{ $stat->ms_perc }}%;">
                            {{ $stat->ms_perc }} </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </body>

    </html>

@endsection
