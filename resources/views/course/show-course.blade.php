
@extends('layouts.app')

@section('style')

<style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Style for Navbar Starts */

        .navbar-custom li a {
            color: #000;
        }

        .btn-success {
            background-color: #2DCE89;
            color: #fff;
            border: thin solid #2dce89;
        }

        .btn-success:hover {
            background-color: rgb(2, 20, 12);
            color: #fff;
            border: thin solid rgb(2, 20, 12);
        }

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .custom-toggler.navbar-toggler {
            border-color: #000;
        }
        /* Style for Navbar Ends */
        /* Style for Footer Starts */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .deep {
            background: #3A0842;
            color: #fff;
        }

        .deep #slink {
            background: #44CF6C;
            border-radius: 10px;
            color: white;
            padding: 10px 70px;
        }

        .deep li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            line-height: 30px;
        }

        .deep li {
            list-style: none;
        }

        .deep li a:hover {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        .icons i {
            font-size: 26px;
            height: 50px;
            width: 50px;
            padding: 10px 20px;
            color: white;
        }

        .icons i.fa.fa-twitter:hover {
            color: #00aced;
        }

        .icons i.fa.fa-facebook:hover {
            color: #3b5598;
        }

        .icons i.fa.fa-instagram:hover {
            color: #ed3833;
        }
        /* Style for Footer Ends */

        .accordion .card-header:after {
            font-family: 'FontAwesome';
            content: "\f068";
            float: right;
        }

        .accordion .card-header.collapsed:after {
            /* symbol for "collapsed" panels */
            content: "\f067";
        }

        .panel-group .panel {
            /* border-radius: 5px; */
            /* border-color: #DBCCD9; */
            padding: 0;
        }

        .panel-default>.panel-heading {
            color: #000;
            font-size: 25px;
            font-weight: bold;
            background-color: #DBCCD9;
            /* border-color: #DBCCD9; */
        }

        .panel-default {
            margin-bottom: 30px;
        }

        .panel-title {
            font-size: 25px;
            background: #DBCCD9;
        }

        .panel-title>a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: #000;
        }

        .short-full {
            float: right;
            color: #fff;
        }

        .panel-default>.panel-heading+.panel-collapse>.panel-body {
            /* border: solid 1px #EEEEEE; */
            /* background: rgba(129, 22, 124, 0.05); */
        }

        .course-acc {
            background: rgba(129, 22, 124, 0.05);
        }

        .panel-group .panel {
            border: none;
            -webkit-box-shadow: none;
        }

        .exp-tt {
            font-size: 16px;
            padding-top: 60px;
            padding-bottom: 30px;
        }

        h3 .text-center {
            font-size: 25px;
        }

        .panel-tt {
            margin: 20px 0 40px 0;
            font-weight: bold;
        }

        .panel-title {
            font-weight: bold;
        }

        .panel-body ul {
            padding-inline-start: 10px;
        }

        .panel-body li {
            list-style-type: none;
            padding: 7px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            font-size: 16px;
        }

        .course-drop {
            padding-bottom: 40px;
        }


        /*=================what you will learn==========================*/

        .lessons{
            display: flex;
        }

        .lessons ul li{
            border-bottom: 1px solid grey;
            margin-bottom: 15px;
            line-height: 45px;
            list-style-type: none;
        }

        /*=================Edit Start==========================*/

         .d-flex {
            display: inline-flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-flow: row wrap;
        }

        .d-flex.justify-content-between {
            justify-content: space-between;
        }

        .d-flex.align-items-center {
            align-items: center;
        }

        .margin-auto {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }


        .paint-text {
            color: var(--color2);
        }

        .font-xlg {
            font-size: 2em;
        }

        .font-lg {
            font-size: 1.7em;
        }

        .font-md {
            font-size: 1.2em;
        }

        .font-sm {
            font-size: 1.1em;
        }

        .padding-lg {
            padding: 20px 40px;
        }

        .padding-md {
            padding: 15px 10px;
        }

        .padding-sm {
            padding: 4px 5px;
        }

        .padding-bottom-sm {
            padding-bottom: 15px;
        }

        .padding-bottom-lg {
            padding-bottom: 50px;
        }

        .text-align-center {
            text-align: center;
        }
        .icon {
            margin-right: 10px;
        }

        .overflow--h {
            overflow: hidden;
        }

        .color-dark {
            color: #000;
        }


        .padding-bottom-sm {
            padding-bottom: 25px;
        }

        a.color-green {
            color: rgb(12, 207, 61);
            text-decoration: underline;
        }


        .title {
            font-size: 1em;
        }

        .content {
            font-style: normal;
            font-weight: bold;
            font-size: 20px;
            line-height: 24px;
            color: #464346;

        }
        .fa-star {
            color: #FFCE31;
        }

        .action--link {
            display: inline-block;
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            text-align: center;
            letter-spacing: 0.655606px;
            border-radius: 10px;
            padding: 10px 20px;
            color: #404040;
            margin-right: 10px;
            margin-bottom: 20px;
        }

        .padding-lg {
            padding: 20px 40px;
        }


        .action--link.success-btn {
            padding: 15px 20px;
            font-size: 16px;
        }

        .heading {
            font-size: 2em;
            line-height: 55px;
            font-weight: 600;
            text-align: center;
            color: #000;
            padding-bottom: 40px;
        }

        .course-outline {
            width: 45%;
            padding: 10px 10px 20px 5px;
        }

        .duration:first-child {
            padding-left: 15px;
        }

        .duration:not(:first-child) {
            padding-left: 10px;
        }

       /*==============Call to Action==========================*/

        .build{
            background-color: #2dce89;
            height: auto;
        }

        .build h2{
            font-weight: bold;
        }

        .build-text{
            width: 550px;
            padding: 80px 20px 30px 80px;
            margin-left: 0;
        }

        .build-text > p {
            font-family: 'Lato';
            font-style: normal;
            font-weight: normal;
            font-size: 20px;
            line-height: 24px;

            color: #000000;
        }

        .build-img {
            width: 40%;
            height: auto;
        }

        .build-img1{
            width: 100%;
            height: auto;
            transform: scale(1.61);
        }


        /*==============Options==========================*/
        .options-header,
        .testimonial-header{
            font-size: 20px;
            text-align: center;
            color: #3A0842;
            line-height: 34px;
            margin-bottom: 25px;
        }

        .options,
        .testimonial{
            justify-content: center;
        }

        .options li{
            list-style-type: none;
            display: flex;
            font-family: 'Poppins', sans-serif;
            margin: 3em;
        }

        .options li img{
            background-color: #44CF6C;
            border-radius: 50%;
            width: 4em;
            height: 4em;
            margin-left: -2em;
            margin-right: 2em;
            z-index: 2;
            padding: 20px;
        }

        .options li p span{
            font-size: 16px;
            font-weight: bold;
            color: #3A0842;
        }

        .options li p{
            font-size: 14px;
            line-height: 176.4%;
            letter-spacing: 0.655606px;
            color: #2B2D42;
            display: inline-block;
        }

        /*==============Testimonials==========================*/
        .testimony{
            box-shadow: 0px 6px 25px rgba(0, 0, 0, 0.15);
            border-radius: 20px;
        }

        .testimony p{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: normal;
            font-size: 20px;
            line-height: 151.2%;
            color: #333333;
        }

        .testimony-sign{
            display: flex;
        }

        .testimony-sign p{
            font-size: 16px;
            line-height: 124.8%;
            letter-spacing: 0.655606px;
            color: #474747;
        }

        .testimony-sign p span{
            font-family: 'Poppins';
            margin-top: 5px;
            font-size: 14px;
            line-height: 151.2%;
            color: #737373;
        }


        /*==============Media Queries==========================*/
        @media (max-width: 991.98px) {
            .duration {
                margin-right: 15px;
                display: inline-block !important
            }

            .build-img {
                width: 100%;
                order: 1 !important;
            }

            .build-text{
                padding: 80px 20px 30px;
                margin-left: 0;
                width: 100%;
            }


        }

        /* @media only screen and (min-width: 768px){

            .build{
                display: flex;
                flex-direction: row;
            }

            .build-text{
                width: 500px;
                margin-left:100px;
                padding-top:80px;
            } */

            /* .build-img{
                width: 47.5em;
                margin-top: -5.8em;
                z-index: -2;
            } */

            /* .testimony p{
                font-size: 20px;
            }

        } */

    </style>
@endsection

@section('content')
<!--------------------------------------- Hero-------------------------------------->
    <div class="container-fluid pt-5 pb-5" style="background-color: #F0F2F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="font-weight-bold">{{ $course->price }} for {{ $course->duration }} months full training </p>
                    <h4 class="font-weight-bold pb-3">{{ $course->name }}</h4>
                    <p class="pb-2">{{ $course->description }}</p>

                    <div class="clearfix">
                        <div class="action--link-container">
                        @if(Auth::guest())
                            <a href="{{route('register')}}" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"
                                style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>
                        @endif
                        @if(!Auth::guest())
                            <a href="{{route('register.courses',$item->id)}}" class="btn btn-primary pr-3 pl-3 pt-1 pb-1"
                                style="background-color: #9A75A0; border: thin solid #9A75A0;">Register</a>
                        @endif
                        <a href="#" class="action--link" style="font-family: 'Poppins', sans-serif; color: #000; background: rgba(128, 128, 128, 0.178)">Beginner</a>
                        <a href="#" class="action--link" style="font-family: 'Poppins', sans-serif; background-color: #9A75A0; color:#4B0955; border-color: #9A75A0;">REMOTE</a>
                        <a href="#" class="action--link" style="font-family: 'Poppins', sans-serif; background-color: #FFE797; color:#E3B82A; border-color: #FFE797;">FREE</a>
                    </div>
                </div>
                <div class="course-details row align-tems-center justify-content-between">
                    <div class="duration padding-bottom-sm">
                        <h4 class="title">Duration</h4>
                        <span class="content">{{ $course->duration }}</span>
                    </div>
                    <div class="duration padding-bottom-sm">
                        <h4 class="title">Course Starts</h4>
                        <span class="content">5th of October, 2019</span>
                    </div>
                    <div class="duration padding-bottom-sm">
                        <h4 class="title">Average Ratings</h4>
                        <div class="d-inline">
                            <div class="">
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                                <i class="fas fa-star icon"></i>
                            </div>
                            <a href="#" class="color-green">See all reviews</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570964975/startng/premium-mobile-phone-screen-mockup-template_53876-76515_1_ri1dx4.png">
                </div>
            </div>
        </div>
    </div>

    <!----------------------------- Hero Sub------------------------------>
    <div class="container pb-5 pt-5">
        <h4 class="text-center font-weight-bold">What you will learn</h4>
        <div class="row lessons">
        @php $counter=3 @endphp

            @foreach($contents as $content)
                @if($counter%2==0)

                <div class="col col-12 col-lg-6 col-sm-12">
                            <ul>
                                <li class="p-3">
                                    <i class="far fa-check-circle icon font-md"></i>
                                    <span>{{$content->title}}</span>
                                </li>
                            </ul>
                        </div>

                @endif

                @if($counter%2!=0)
                <div class="col col-12 col-lg-6 col-sm-12">
                    <ul>
                        <li class="p-3">
                            <i class="far fa-check-circle icon font-md"></i>
                            <span>{{$content->title}}</span>
                        </li>
                    </ul>
                </div>
                @endif
                @php $counter = $counter + 1; @endphp
            @endforeach
            <!--<div class="col col-12 col-lg-6 col-sm-12">
                <ul>
                    <li class="p-3">
                        <i class="far fa-check-circle icon font-md"></i>
                        <span>How to setup a software development process and model</span>
                    </li>

                    <li class="p-3">
                        <i class="far fa-check-circle icon font-md"></i>
                        <span>How to organize a software development project</span></li>

                    <li class="p-3">
                        <i class="far fa-check-circle icon font-md"></i>
                        <span>How to write user stories for your software requirements</span>
                    </li>

                    <li class="p-3">
                        <i class="far fa-check-circle icon font-md"></i>
                        <span>How to manage and deploy software releases</span>
                    </li>
                </ul>
            </div>

            <div class="col col-12 col-lg-6 col-sm-12">
                <ul>
                    <li class="p-3">
                        <i class="far fa-check-circle icon font-md"></i>
                        <span>How to manage and deploy software releases</span>
                    </li>

                    <li class="p-3">
                        <i class="far fa-check-circle icon font-md"></i>
                        <span>How to verify a software solution</span>
                    </li>

                    <li class="p-3">
                        <i class="far fa-check-circle icon font-md"></i>
                        <span>How to validate a software solution</span>
                    </li>

                    <li class="p-3">
                        <i class="far fa-check-circle icon font-md"></i>
                        <span>How to use Git and Github for your versioning management</span>
                    </li>
                </ul>
            </div>-->
        </div>

    </div>


    <!------------------------ Call to Action------------------------------>
    <div class="container-fluid build">
        <div class="row overflow--h build">
            <div class="container build-text">
                <h2>Build Real Time Project</h2>
                <p>Build Real Time Projects when you learn the concepts of software enginerring and also the specific languages and frameworks that help you achieve your goal.
                </p>
                <a class="btn btn-success pt-1 pb-1" href="{{route('register')}}" style="background-color:#3F113D; color: #fff; border-color: #3F113D; font-size: 16px;">Start
                        Learning</a>
            </div>
            <div class="build-img d-none d-lg-block">
                <img class="build-img1"src="https://res.cloudinary.com/eloagbawe/image/upload/v1571165842/lxkz63t0tc0ns0qhblju.png">
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background:rgba(129, 22, 124, 0.05);">
        <div class="row">

            <!------------------------- Accordion------------------------------------>
            <div class="container course-drop">
                <p class="text-center exp-tt">No Experience Required. Knowledge on how to use the computer. Use windows or MAC OSX
                </p>
                <h3 class="text-center panel-tt">Course Curriculum </h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Introduction
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>
                                        </a>


                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Tracking
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Data Visualization
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>







                        </div>
                        <!-- panel-group -->

                    </div>

                    <div class="col-sm-6">
                        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> User Research
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Ideation
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="short-full glyphicon glyphicon-plus" style="color:#000;"></i> Wireframes
                                            <i class="fa fa-plus float-right" aria-hidden="true"></i>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li>
                                                The software Development process - overview
                                            </li>
                                            <li>
                                                Design Pattern - definition
                                            </li>
                                            <li>
                                                The scenario in a software project
                                            </li>
                                            <li>
                                                The problem: understand the customer requirement
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>







                        </div>
                        <!-- panel-group -->

                    </div>

                </div>
            </div>

            <!--------------------- Options ---------------->
            <div class="container-fluid priviledge pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center">
            <p style="color: #3A0842;">On Start.ng, you are privileged to</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row mt-5 pt-3">
                    <div class="col-2">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_412_furoek.png" class="img-fluid ml-md-2 pl-md-2">
                    </div>
                    <div class="col-9">
                        <p style="color: #3A0842">Learn from the Best Teachers</p>
                        <p>
                            We hire Tutors with 100% knowledge on each track. Interns are provided best and appropriate advice from tutors based on their experiences.
                        </p>
                    </div>
                </div>


            </div>

            <div class="col-md-6">
                <div class="row mt-5 pt-3">
                    <div class="col-2">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_414_pycdu8.png" class="img-fluid ml-md-2 pl-md-2">
                    </div>
                    <div class="col-9">
                        <p style="color: #3A0842">Join Online Developer Community</p>
                        <p>
                            A 24-hour functioning online community is made available for interns to learn from each other and communicate with senior developers. They also would not miss out on important information about events and meetups.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row mt-5 pt-3">
                    <div class="col-2">
                        <img src="https://res.cloudinary.com/adetohun/image/upload/v1572495398/Group_300.png" class="img-fluid ml-md-2 pl-md-2">
                    </div>
                    <div class="col-9">
                        <p style="color: #3A0842">Get Academic and Technical Support</p>
                        <p>
                            Interns are exposed to updated usage of some technologies and effective training on their usage is provided.
                        </p>
                    </div>
                </div>



            </div>
            <div class="col-md-6">
                <div class="row mt-5 pt-3">
                    <div class="col-2">
                        <img src="https://res.cloudinary.com/adetohun/image/upload/v1572495398/Group_306.png" class="img-fluid ml-md-2 pl-md-2">
                    </div>
                    <div class="col-9">
                        <p style="color: #3A0842">Earn a Certifcate</p>
                        <p>
                            Interns are eligible for a certificate if only they get to a certain stage of the internship.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!---------------------- Testimonials ---------------------------->

            <div class="container pb-5 pt-5 testimonial">
                <h4 class="text-center font-weight-bold testimonial-header">What students have to say about us</h4>
                <div class="row">
                    <div class="col col-12 col-lg-12 col-md-12 col-sm-12 bg-white p-5 mb-5 testimony">
                        <p class="mb-5">
                            I have always been a tech enthusiast. I started my tech journey with start.ng. Though, the duration of the program was not enough to grasp all you need to know about software development, however i bet it is a great start. The secret to being a pro is getting started, start with start.ng.
                        </p>
                        <div class="testimony-sign">
                            <img src="https://img.icons8.com/bubbles/50/000000/user-female.png" alt="user-image" style="width: 4em; height: 5em;">
                            <div class="ml-4">
                                <div class="mb-2">
                                    <i class="fas fa-star icon fa-lg"></i>
                                    <i class="fas fa-star icon fa-lg"></i>
                                    <i class="fas fa-star icon fa-lg"></i>
                                    <i class="fas fa-star icon fa-lg"></i>
                                    <i class="fas fa-star icon fa-lg"></i>
                                </div>
                                <p> <strong>Agboola Eniola</strong>
                                   <br>
                                   <span><em>Backend Developer</em></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-lg-12 col-md-12 col-sm-12 bg-white p-5 mb-5 testimony">
                        <p class="mb-5">
                            I enrolled for start StartNg program a preparatory program for the main internship HNGI. it was a wonderful experience for me and I got to learn so many new things in software development.
                      Things like how to communicate with your team remotely through slack, how to use git and github, how to meet up with deadlines on task for each week e.t.c.
                        </p>
                        <div class="testimony-sign">
                            <img src="https://img.icons8.com/bubbles/50/000000/user-female.png" alt="user2-image" style="width: 4em; height: 5em;">
                            <div class="ml-4">
                                <div class="mb-2">
                                    <i class="fas fa-star icon fa-lg"></i>
                                    <i class="fas fa-star icon fa-lg"></i>
                                    <i class="fas fa-star icon fa-lg"></i>
                                    <i class="fas fa-star icon fa-lg"></i>
                                    <i class="fas fa-star icon fa-lg"></i>
                                </div>
                                <p> <strong>Isuma Chidera.</strong>
                                    <br>
                                    <span><em>Full Stack Developer</em></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------- Subscription Section ------------------------------------>
            <div class="container-fluid pt-5 pb-5" style="background-color: rgba(42, 43, 42, 0.05);">
                <div class="container pt-5 pb-5">
                    <div class="row align-items-center">
                        <div class="col-md-8 pb-5">
                            <h4 style="font-weight: bold; font-size: 40px;">Subscribe to our Newsletter</h4>
                            <p style="font-size: 20px;">Stay Updated with our latest news, discount and promotions
                            </p>
                            <form class="form-inline">
                                <input type="text" class="form-control col-md-8" id="email">
                                <button type="submit" class="btn btn-success ml-1 pl-5 pr-5">Subscribe</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570931071/startng/newsletter_1_h3frhq.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
