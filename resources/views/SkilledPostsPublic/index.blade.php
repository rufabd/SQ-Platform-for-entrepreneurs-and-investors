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

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    
    <div class="row" style="margin-bottom: 20px; margin-top: 100px;">
        <div class="col-md-2">
            <form method="GET" action="{{ route('skilled-post-public') }}">
                <div class="form-row align-items-center" style="width: 300px;">
                    <div class="col" style="width: 300px;">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Search projects by title">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                </div>
            </form>
        </div>
            <div class="comment-section">
            <div class="wrapperr">
                <div class="collapsiblee">
                    <input class="check-input" type="checkbox" id="collapsiblee-head">
                    <label for="collapsiblee-head">Filters</label>
                    <div class="collapsiblee-text">
                        <h4>Choose filter</h4>
                        <form method="GET" action="{{ route('skilled-post-public') }}">
                        <div class="row">
                            <div class="col-sm" style="margin-top: 15px;">
                                <select style="width: 200px;" name="hiringtag_id" id="hiring_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose Hiring Tag --</option>
                                        @foreach ($hiringtags as $hiringtag)
                                            <option value="{{ $hiringtag->id }}" {{ $hiringtag->id == $selected_id['hiringtag_id'] ? 'selected' : '' }}>{{ $hiringtag->name }}</option>
                                            {{ $hiringtag->id }}
                                        @endforeach
                                </select>
                            </div> 
                            <div class="col-sm" style="margin-top: 15px;">
                                <select style="width: 200px;" name="industrytag_id" id="industry_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose Industry Tag --</option>
                                        @foreach ($industrytags as $industrytag)
                                            <option value="{{ $industrytag->id }}" {{ $industrytag->id == $selected_id['industrytag_id'] ? 'selected' : '' }}>{{ $industrytag->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-sm" style="margin-top: 15px;">
                                <select style="width: 200px;" name="type" id="type" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose availability --</option>
                                        <option value="Full-time">Full-time</option>
                                        <option value="Part-time">Part-time</option>
                                        <option value="Remote">Remote</option>
                                    </select>
                            </div>
                            <div class="col-sm" style="margin-top: 15px;">
                                <select style="width: 200px;" name="country" id="country" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose location of project --</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country }}">{{ $country }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            
                        </div>
                        <div class="form-group" style="margin-top: 25px;">
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Apply filters') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    

    {{-- <div class="total" style="margin-top: 20px;">
        <div class="row">
        <div class="col">
            <form method="GET" action="{{ route('skilled-post-public') }}">
                <div class="form-row align-items-center">
                    <div class="col" style="width: 400px;">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                        placeholder="Search posts of skilled people by title">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
    @forelse ($posts as $post)
        
            <div class="columnn">
                <div class="all">
                    <div class="all-top">
                        <div class="left">
                            <div class="profile-img" >
                                <img src="{{asset('/storage/avatars/skilled/'.$post->skilled_profile->skilled_avatar)}}" alt="avatar" style="width: 80px; height:80px;">
                            </div>
                            <div class="post-owner">
                                <a href="{{ route('skilled-profile-public', $post->skilled_profile->id), }}" class="profile-specific-link"><h4 style="font-size: 15px;">{{ $post->skilled_profile->user->name }}</h4></a>
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
                            <a href="{{ route('auth-skilled-posts-show', $post->id), }}">Read more about {{ $post->skilled_profile->user->name }}</a>
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
</div>


<style>
    /* * {
        box-sizing: border-box;
    } */

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
            width: 1185px;
            display: flex;
            padding-top: 20px;
            justify-content: center;
        }

        .collapsiblee {
            width: 1185px;
            overflow: hidden;
            font-weight: 500;
        }

        .collapsiblee .check-input  {
            display: none;
        }

        .collapsiblee label {
            width: 1185px;
            position: relative;
            font-weight: 600;
            background: #fff;
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
            color: #1c1c6b;
            display: block;
            margin-bottom: 10px;
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

        /* .collapsiblee input:checked + label::after {

        } */

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
            margin-bottom: 10px;
            padding: 15px 15px 0;
        }

        /* Filters responsive */
    @media screen and (max-width: 1400px) {
        .wrapperr {
            width: 1100px;
        }

        .collapsiblee {
            width: 1100px;
        }
        .collapsiblee label {
            width: 1100px;
        }
    }

    @media screen and (max-width: 1200px) {
        .wrapperr {
            width: 950px;
        }

        .collapsiblee {
            width: 950px;
        }
        .collapsiblee label {
            width: 950px;
        }
    }

    @media screen and (max-width: 992px) {
        .wrapperr {
            width: 700px;
        }

        .collapsiblee {
            width: 700px;
        }
        .collapsiblee label {
            width: 700px;
        }
    }
    @media screen and (max-width: 768px) {
        .wrapperr {
            width: 500px;
        }

        .collapsiblee {
            width: 500px;
        }
        .collapsiblee label {
            width: 500px;
        }
    }

    .profile-specific-link {
        text-decoration: none;
        color: black;
        transition: 0.3s;
    }
    .profile-specific-link:hover {
        color: orange;
    }

</style>

@endsection