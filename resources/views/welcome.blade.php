<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>eXStartup</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        
    </head>

    @extends('layouts.app')
    @section('content')
        <body style="background-color: white">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        </div> --}}
            <div class="container-fluid col-10" style="padding: 0 80px;">
                <section id="home">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 order-1 pt-5" style="margin-top: 100px">
                            <h1 class="display-4">Welcome To<br><span>Our Platform</span></h1>
                            <p class="my-lg-2 my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nihil non ipsum sint ea architecto delectus ratione eligendi asperiores officiis odio, voluptatem         laboriosam eum aut!</p>
                            {{-- <button class="btn btn-primary my-lg-3 my-3">Get Started</button> --}}
                            <a class="btn btn-primary my-lg-3 my-3" href="{{ url('/login') }}">Get Started</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-2" style="margin-top: 40px;">
                            <img src="/images/business.jpg" alt="image" class="img-fluid">
                        </div>
                    </div>
                </section>
            </div>
            <div class="box-container">
                <div class="box">
                    {{-- <i class="fas fa-code"></i> --}}
                    <i class='bx bx-money' ></i>
                    <h3 class="title">Investor</h3>
                    <span class="counter">387</span>
                </div>
                
                <div class="box">
                    <i class='bx bxs-user-check' ></i>
                    <h3 class="title">Entrepreneurs</h3>
                    <span class="counter">560</span>
                </div>
                
                <div class="box">
                    {{-- <i class="fas fa-tools"></i> --}}
                    <i class='bx bxs-business'></i>
                    <h3 class="title">Startup Funded</h3>
                    <span class="counter">240</span>
                </div>

                <div class="box">
                    {{-- <i class="fas fa-bullhorn"></i> --}}
                    <i class='bx bxs-group' ></i>
                    <h3 class="title">Skilled People</h3>
                    <span class="counter">630</span>
                </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <script>
                    $(document).ready(function(){
                        $('.counter').each(function(){
                            $(this).prop('Counter',0).animate({
                                Counter : $(this).text()
                            }, {
                                duration : 3500,
                                easing : 'swing',
                                step : function (now){
                                    $(this).text(Math.ceil(now) + '+');
                                }
                            })
                        });
                    });
                </script>
        </body>
    @endsection

    
    
        

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

            /* Landing Part Design */

            html{
                scroll-behavior: smooth;
            }

            body {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                width: 100%;
                font-family: 'poppins', sans-serif;
            }

            section {
                min-height: 75vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            span {
                color: orange;
                font-weight: bold;
            }

            p {
                font-size: 18px;
            }

            /* Counter Part Style */
            .box-container {
                /* min-height: 20vh; */
                display: flex;
                align-items: center;
                justify-content: center;
                /* background: #d9d9d9; */
                /* padding-bottom: 100px; */
                flex-wrap: wrap;
            }

            .box-container .box {
                text-align: center;
                margin-left: 55px;
                margin-right: 55px;
                height: 170px;
                width: 230px;
                position: relative;
                z-index: 1;
            }

            .box-container .box::before,
            .box-container .box::after{
                content: '';
                position: absolute;
                top: 20px;
                bottom: 20px;
                right: 0;
                left: 0;
                z-index: -1;
                clip-path: polygon(13% 0%, 87% 0%, 100% 50%, 87% 100%, 13% 100%, 0% 50%);
                background: #2980b9;
            }

            .box-container .box::after{
                top: 0px;
                bottom: 0px;
                right: 10px;
                left: 10px;
                z-index: -1;
                clip-path: polygon(13% 0%, 87% 0%, 100% 50%, 87% 100%, 13% 100%, 0% 50%);
                background: white;
            }

            .box-container .box i {
                color: black;
                font-size: 40px;
                padding: 20px 0;
            }

            .box-container .box .title {
                font-size: 20px;
                text-transform: capitalize;
                color: #2980b9;
                padding-bottom: 15px;
            }

            .box-container .box .counter {
                font-size: 30px;
                color: black;
            }

            .box-container .box:nth-child(2)::before{
                background: #c0392b;
            }

            .box-container .box:nth-child(2) .title {
                color: #c0392b;
            }

            .box-container .box:nth-child(3)::before{
                background: #f39c12;
            }

            .box-container .box:nth-child(3) .title {
                color: #f39c12;
            }

            .box-container .box:nth-child(4)::before{
                background: #16a085;
            }

            .box-container .box:nth-child(4) .title {
                color: #16a085;
            }

        </style>
</html>
