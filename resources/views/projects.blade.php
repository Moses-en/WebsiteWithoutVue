@extends('layout')

@section('head')


    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <title> Projects | Musa Assaf</title>


@endsection('head')


@section('body')

    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="heading">
                <h2><span>Pro</span></span>jects</h2>
                <div class="line"></div>
                <p>The following are a few examples of the projects that i have created all by myself.</p>
            </div>
        </div>

        @foreach ($projects as $proj)
            <div class="col-md-6 tab">
                <h5>{{ $proj->prj_title }}</h5>
                <div class="line"></div>
                <div class="clearfix"></div>
                <p class="feat-sec">{{ $proj->prj_exc }}<br><span>Languages:</span> {{ $proj->prj_lang }}<br>
                </p>
                <p class="feat-sec-1">{{ $proj->prj_desc }}</p>
            </div>
        @endforeach


    </div>
    </div>
    </div>

@endsection('body')
