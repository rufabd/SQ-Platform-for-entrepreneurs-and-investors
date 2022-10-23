@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 100px;">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    {{-- <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-10 col-md-offset-1">
            <img src="{{asset('/storage/avatars/founders/'.$profile->founder_avatar)}}" alt="avatar" style="width:150px; height:150px; border-radius:50%;">
            <h2>Profile of {{ $profile->founder_name }} {{ $profile->founder_surname }}</h2>
        </div>
    </div> --}}

    <div class="profile-section">
        <div class="profile-container">
            <div class="profile-container-img">
                <img src="{{asset('/storage/avatars/skilled/'.$profile->skilled_avatar)}}" alt="avatar" style="width:150px; height:150px; border-radius:50%;">
            </div>
            <div class="profile-container-info">
                <div class="name-surname">
                    <h2>{{ $profile->skilled_name }} {{ $profile->skilled_surname }}</h2>
                </div>
                <div class="position-organization">
                    <h4>Interested in {{ $profile->skilled_industry }} as {{ $profile->skilled_profession }} </h4>
                </div>
                <div class="description">
                    <div class="wrapperr">
                        <div class="collapsiblee">
                            <input class="check-input" type="checkbox" id="collapsiblee-head">
                            <label for="collapsiblee-head">READ MORE ABOUT ME</label>
                            <div class="collapsiblee-text">
                                <p>{{ $profile->skilled_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @forelse ($posts as $post)
        
            <div class="columnn">
                <div class="all">
                    <div class="all-top">
                        <div class="left">
                            <div class="profile-img" >
                                <img src="{{asset('/storage/avatars/skilled/'.$post->skilled_profile->skilled_avatar)}}" alt="avatar" style="width: 80px; height:80px;">
                            </div>
                            <div class="post-owner">
                                <p>{{ $post->skilled_profile->user->name }}</p>
                                {{-- <p>{{ $post->skilled_profile->skilled_name }} {{ $post->skilled_profile->skilled_surname }}</p> --}}
                            </div>
                            <div class="social-icons">
                                <div class="linkedin-link">
                                    <i class='bx bxl-linkedin' ></i>
                                </div>
                                <div class="instagram-link">
                                    <i class='bx bxl-instagram' ></i>
                                </div>
                                <div class="facebook-link">
                                    <i class='bx bxl-facebook' ></i>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="right-top">
                                <div class="hiring-tag">
                                    <p class="tagss">{{ $post->hiring_tag->name }}</p>
                                </div>
                                <div class="industry-tag">
                                    <p class="tagss">{{ $post->industry_tag->name }}</p>
                                </div>
                                <div class="location">
                                    <p>{{ $post->city }}, {{ $post->country }}</p>
                                </div>
                            </div>
                            <div class="right-mid">
                                <div class="title">
                                    <h4>{{ $post->title }}</h4>
                                </div>
                            </div>
                            <div class="right-bottom">
                                <div class="description">
                                    <p>{{ $post->post_desciption }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="all-bottom">
                        <div class="chat-btn">
                            <a href="/chatify/{{{ $post->skilled_profile->user_id }}}">Chat with {{ $post->skilled_profile->skilled_name }}</a>
                        </div>
                        <div class="read-btn">
                            <a href="{{ route('auth-skilled-posts-show', $post->id), }}">Read about {{ $post->skilled_profile->user->name }}</a>
                        </div>
                        <div class="date">
                            <p>{{ $post->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        

    @empty
        <div class="container">
            <div class="justify-content-center">
                <h1 style="text-align: center;">
                    No posts yet
                </h1>
            </div>
        </div>

    @endforelse
</div>

<style>

    .columnn {
        float: left;
        width: 50%;
        margin-bottom: 30px;
    }

    /* .total {margin: 0 -5px;} */

    /* .total::after{
        content: "";
        display: table;
        clear: both;
    } */

    

    .all {
        display: block;
        width: 580px;
        max-height: 400px;
        background-color:white;
        border-radius: 10px;
        padding: 10px 20px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.5);
    }

    .all .all-top {
        display: flex;
        margin-bottom: 20px;
    }

    .all-top .left {
        display: block;
        margin-right: 20px;
        text-align: center;
    }

    .all-top .left i {
        font-size: 25px;
    }

    .all-top .right {
        display: block;
    }

    .all-top .right .right-top {
        display: flex;
    }

    .all .all-bottom {
        display: flex;
    }

    .profile-img {
        margin-bottom: 10px;
    }

    .profile-img img {
        border-radius: 50%;
        /* border: 1px orange solid; */
    }

    .linkedin-link {
        margin-top: 5px;
    }

    .instagram-link {
        margin-top: 5px;
    }

    .facebook-link {
        margin-top: 5px;
    }

    .social-icons i {
        cursor: pointer;
        transition: 0.5s ease all;
    }

    .instagram-link i:hover {
        color: #fff;
        padding: 0px 2px;
        background: #d6249f;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .linkedin-link i:hover {
        color: #fff;
        padding: 0px 2px;
        background: #0072b1;
        background: radial-gradient(circle at 30% 107%, #0072b1 0%, #0072b1 5%, #0072b1 45%,#0072b1 60%,#285AEB 90%);
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .facebook-link i:hover {
        color: #fff;
        padding: 0px 2px;
        background: #3b5998;
        background: radial-gradient(circle at 30% 107%, #3b5998 0%, #3b5998 5%, #3b5998 45%,#3b5998 60%,#3b5998 90%);
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .right-top .hiring-tag {
        margin-right: 10px;
    }

    .tagss {
        background: orangered;
        padding: 0 5px;
        border-radius: 10px;
        font-weight: 500;
        color:white;
        /* cursor: pointer; */
    }

    .right-top .industry-tag {
        margin-right: 10px;
    }

    .all-bottom {
        justify-content: center;
    }

    .chat-btn {
        margin-right: 10px;
    }

    .all-bottom a {
        text-decoration: none;
        color: black;
        padding: 5px 5px;
        border: 1px solid orange;
        transition: 0.3s ease all;
        font-size: 15px;
        border-radius: 5px;
    }

    .all-bottom a:hover {
        color: white;
        background: orange;
    }

    .read-btn {
        margin-right: 10px;
    }

    .date p {
        color: #9e9e9e;
    }

    @media screen and (max-width: 1400px) {
        .all {
            width: 550px;
        }
    }

    @media screen and (max-width: 1200px) {
        .columnn {
            width: 100%;
            display: block;
            margin-bottom: 20px;
            margin-left: 200px;
        }

        .total:after {
            display: table;
        }
        .all {
            width: 580px;
        }
    }

    @media screen and (max-width: 991px) {
        .columnn {
            margin-left: 0px;
        }
    }

    @media screen and (max-width: 767px) {
        .all {
            width: 500px;
        }

        .all-bottom a {
            font-size: 13px;
        }

        .date p {
            font-size: 13px;
        }
    }

    @media screen and (max-width: 530px) {
        .all {
            width: 450px;
        }

        .all-bottom a {
            font-size: 12px;
        }

        .date p {
            font-size: 13px;
        }
    }

    /* Collapsible */
    .wrapperr {
            width: 500px;
            display: flex;
            /* padding-top: 50px; */
            /* justify-content: center; */
        }

        .collapsiblee {
            width: 500px;
            overflow: hidden;
            font-weight: 500;
        }

        .collapsiblee .check-input  {
            display: none;
        }

        .collapsiblee label {
            width: 500px;
            position: relative;
            font-weight: 600;
            background: #fff;
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
            color: #1c1c6b;
            display: block;
            /* margin-bottom: 10px; */
            cursor: pointer;
            padding: 15px 10px;
            border-radius: 8px;
            z-index: 1;
            transition: 0.3s;
        }

        .collapsiblee label:hover {
            background: #0275d8;
            color: #fff;
        }

        .collapsiblee label::after {
            content: "";
            position: absolute;
            right: 15px;
            top: 15px;
            width: 18px;
            height: 18px;
        }

        .collapsiblee-text {
            padding: 20px 40px;
            max-height: 1px;
            overflow: hidden;
            border-radius: 4px;
            line-height: 1.4;
            position: relative;
            top: -100%;
            opacity: 0.5;
            transition: all 0.3s ease;
            overflow: auto;
        }

        .collapsiblee input:checked ~ .collapsiblee-text {
            max-height: 500px;
            padding-bottom: 25px;
            background: #fff;
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
            opacity: 1;
            top: 0;
        }

        .collapsiblee-text h2 {
            /* margin-bottom: 10px; */
            padding: 15px 15px 0;
        }

        .profile-container {
        display: flex;
    }

    /* change in responsive */
    .profile-container-info {
        display: block;
        padding-top: 20px;
        /* position: absolute;
        top: 17%;
        left: 25%; */
    }

    /* change in responsive */
    .profile-container-img {
        margin-right: 30px;
    }

    .profile-section{
        margin-bottom: 30px;
    }

    .description {
        max-width: 800px;
    }

    @media screen and (max-width: 1200px) {
        /* .profile-container {
            display: block;
        } */
        .profile-container {
            justify-content: center;
            align-content: center;
            align-items: center;
            text-align: center;
        }
    }

    @media screen and (max-width: 768px) {
        .profile-container {
            display: block;
            justify-content: center;
            align-content: center;
            align-items: center;
            text-align: center;
        }
    }
</style>

@endsection