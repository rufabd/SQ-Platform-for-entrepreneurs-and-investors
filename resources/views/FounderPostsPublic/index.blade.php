@extends('layouts.app')
@section('content')


{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}
                            {{-- <div class="row mb-3">
                                <label for="founder_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="founder_name" type="text"
                                        class="form-control @error('founder_name') is-invalid @enderror" name="founder_name"
                                        value="{{ old('founder_name') }}" required autocomplete="founder_name" autofocus>

                                    @error('founder_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            




            
        {{-- </div> --}}
    

    <div class="container" style="margin-top: 100px;" >
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    
    <div class="row" style="margin-bottom: 20px; margin-top: 100px;">
        <div class="col-md-2">
            <form method="GET" action="{{ route('project-post-public') }}">
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
                        <form method="GET" action="{{ route('project-post-public') }}">
                        {{-- <div class="form-group">
                            <div class="col-md-2" style="width: 250px;">
                                <div class="form-row" style="width: 200px;">
                                    <select style="width: 200px;" name="hiringtag_id" id="hiring_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose Hiring Tag --</option>
                                        @foreach ($hiringtags as $hiringtag)
                                            <option value="{{ $hiringtag->id }}" {{ $hiringtag->id == $selected_id['hiringtag_id'] ? 'selected' : '' }}>{{ $hiringtag->name }}</option>
                                            {{ $hiringtag->id }}
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                            <br>
                        <div class="form-group">
                            <div class="col-md-2" style="width: 250px;">
                                <div class="form-row" style="width: 200px;">
                                    <select style="width: 200px;" name="industrytag_id" id="industry_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose Industry Tag --</option>
                                        @foreach ($industrytags as $industrytag)
                                            <option value="{{ $industrytag->id }}" {{ $industrytag->id == $selected_id['industrytag_id'] ? 'selected' : '' }}>{{ $industrytag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                            
                        {{-- <div class="filter-section" style="display: flex;">
                            <div class="hiring-filter">
                                <select style="width: 200px;" name="hiringtag_id" id="hiring_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose Hiring Tag --</option>
                                        @foreach ($hiringtags as $hiringtag)
                                            <option value="{{ $hiringtag->id }}" {{ $hiringtag->id == $selected_id['hiringtag_id'] ? 'selected' : '' }}>{{ $hiringtag->name }}</option>
                                            {{ $hiringtag->id }}
                                        @endforeach
                                </select>
                            </div>
                            <div class="industry-filter" style="margin-left:30px;">
                                <select style="width: 200px;" name="industrytag_id" id="industry_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose Industry Tag --</option>
                                        @foreach ($industrytags as $industrytag)
                                            <option value="{{ $industrytag->id }}" {{ $industrytag->id == $selected_id['industrytag_id'] ? 'selected' : '' }}>{{ $industrytag->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div> --}}
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
                                <select style="width: 200px;" name="project_stage" id="project_stage" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose project stage --</option>
                                            <option value="Have idea">Have idea</option>
                                            <option value="MVP ready">MVP ready</option>
                                            <option value="Testing">Testing</option>
                                            <option value="Have customers">Have customers</option>
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
                            {{-- <div class="col-sm" style="margin-top: 15px;">
                                <select style="width: 200px;" name="project_stage" id="project_stage" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose Project Stage --</option>
                                        <option value="1" {{ 1 == $selected_id['1'] ? 'selected' : '' }}>Have an idea</option>
                                        <option value="2" {{ 2 == $selected_id['2'] ? 'selected' : '' }}>Have business plan</option>
                                        <option value="3" {{ 3 == $selected_id['3'] ? 'selected' : '' }}>MVP ready</option>
                                    </select>
                            </div> --}}
                            {{-- <div class="col-sm" style="margin-top: 15px;">
                                <select style="width: 200px;" name="industrytag_id" id="industry_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose Industry Tag --</option>
                                        @foreach ($industrytags as $industrytag)
                                            <option value="{{ $industrytag->id }}" {{ $industrytag->id == $selected_id['industrytag_id'] ? 'selected' : '' }}>{{ $industrytag->name }}</option>
                                        @endforeach
                                    </select>
                            </div> --}}
                            {{-- <div class="col-sm" style="margin-top: 15px;">
                                <select style="width: 200px;" name="industrytag_id" id="industry_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="0">-- Choose Industry Tag --</option>
                                        @foreach ($industrytags as $industrytag)
                                            <option value="{{ $industrytag->id }}" {{ $industrytag->id == $selected_id['industrytag_id'] ? 'selected' : '' }}>{{ $industrytag->name }}</option>
                                        @endforeach
                                    </select>
                            </div> --}}
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

    
    @forelse ($posts as $post)
        <div class="total">
            <div class="columnn">
                <div class="containerr">
                    <div class="left">
                        <div class="profile-img" >
                            <img src="{{asset('/storage/avatars/founders/'.$post->founder_profile->founder_avatar)}}" alt="avatar" style="width: 80px; height:80px;">
                        </div>
                        <div class="username" >
                            <a href="{{ route('founder-profile-public', $post->founder_profile->id), }}" class="profile-specific-link"><h4>{{ $post->founder_profile->founder_name }}  {{ $post->founder_profile->founder_surname }}</h4></a>
                            
                        </div>
                        <div class="contact" >
                            <a href="/chatify/{{{ $post->founder_profile->user_id }}}">Chat</a>
                        </div>
                        <div class="social-left">
                            <div class="instagram">
                                <a href="{{ $post->founder_profile->founder_insta_link }}"><i class='bx bxl-instagram instagram-eff'></i></a>
                            </div>
                            <div class="facebook">
                                <a href="{{ $post->founder_profile->founder_face_link }}"><i class='bx bxl-facebook-circle facebook-eff'></i></a>
                            </div>
                            <div class="linkedin">
                                <a href="{{ $post->founder_profile->founder_linked_link }}"><i class='bx bxl-linkedin-square linkedin-eff'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="right">
                        <div class="top1">
                            <div class="tag1">
                                <h4> {{ $post->hiring_tag->name }} </h4>
                            </div>
                            <div class="tag2">
                                <h4> {{ $post->industry_tag->name }} </h4>
                            </div>
                            <div class="date">
                                <h4>{{ $post->created_at }}</h4>
                            </div>
                            <div class="place">
                                <h4>{{ $post->country }}, {{ $post->city }} </h4>
                            </div>
                        </div>
                        <div class="top2">
                            <div class="title-post">
                                <h4><strong>{{ $post->title }}</strong></h4>
                            </div>
                        </div>
                        <div class="mid">
                            <div class="post-description">
                                <p>{{ $post->post_description }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="funded">
                                <div class="funded-content">
                                    <h4>Total Funded</h4>
                                    <p>$ {{ $post->investment }}</p>
                                </div>
                            
                            </div>
                            <div class="stage">
                                <div class="stage-content">
                                    <h4>Project Stage</h4>
                                    <p>{{ $post->project_stage }}</p>
                                </div>
                            </div>
                            <div class="else">
                                <a href="{{ route('auth-founder-posts-show', $post->id), }}">Read more about details</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @if (Auth::user()->role == 'investor')
                    {{ $exist = false }}
                    @foreach ($favposts as $favpost)
                        @if($favpost->project_post_id == $post->id)
                            @if ($favpost->user_id == Auth::user()->id)
                                <div style="display: none">{{ $exist = true }}</div>

                            
                            @endif
                        
                        @endif
                    @endforeach

                    @if ($exist == true)
                        <form method="GET" action="{{ route('favorite-posts-list') }}" enctype="multipart/form-data" style="margin-top: 10px;">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">
                                        Already in your list. Go to list
                                    </button>
                                </form>
                    @else 
                    <form method="POST" action="{{ route('post-favorite', $post->id) }}" enctype="multipart/form-data" style="margin-top: 10px;">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add to favorites') }}
                                    </button>
                                </form>
                    @endif
                @endif --}}
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
    


    {{-- @endforeach --}}
    {{--  --}}
    
    {{-- <a href="{{ $post->country }}" class="btn btn-primary">Read More</a> --}}

    {{-- <div style="position: absolute; bottom: -20%; left: 47%;">
        {{ $posts->links() }}
    </div> --}}
</div>

<style>


    .columnn {
        float: left;
        width: 50%;
        padding: 0 10px;
        margin-bottom: 30px;
    }

    /* .total {margin: 0 -5px;} */

    /* .total:after {
        content: "";
        display: table;
        clear: both;
    } */

    @media screen and (max-width: 1200px) {
        .columnn {
            width: 100%;
            display: block;
            margin-bottom: 20px;
            /* margin-left: 25%; */
            margin-left: 220px;
        }

        .total:after {
            display: table;
        }
    }

    @media screen and (max-width: 990px) {
        .columnn {
            margin-left: 70px;
        }
    }

    @media screen and (max-width: 770px) {
        .columnn {
            margin-left: -20px;
        }
    }

    .containerr {
        display: flex;
        width: 530px;
        padding: 10px 10px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.5);
    }

    .left {
        margin-right: 20px;
        text-align: center;
    }

    .profile-img img {
        border-radius: 50%;
        /* border: 2px solid orange; */
    }

    .username {
        margin-top: 7px;
    }

    .username h4 {
        font-size: 15px;
        text-align: center;
    }
    

    .contact a {
        text-decoration: none;
        border: 1px solid orange;
        color: black;
        font-size: 15px;
        padding: 3px 25px;
        transition: 0.3s all ease;
        border-radius: 10px;
    }

    .contact a:hover {
        color: white;
        background: orange;
    }

    .social-left {
        margin-top: 15px;
    }

    .social-left i {
        font-size: 30px;
        cursor: pointer;
        margin-bottom: 10px;
        transition: 0.5s all ease;
        color: black;
    }

    .social-left i:hover {
        /* font-size: 35px; */
    }

    .instagram-eff:hover {
        color: #fff;
        background: #d6249f;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        border-radius: 30px;
    }
    .facebook-eff:hover {
        color: #3b5998;
    }
    .linkedin-eff:hover {
        color: #0072b1;
    }

    .top1 {
        display: flex;
        margin-bottom: 10px;
    }

    .tag1 {
        margin-right: 12px;
    }

    .top1 .tag1 h4 {
        font-size: 15px;
        background: orangered;
        border-radius: 10px;
        color: white;
        padding: 5px;
    }

    .tag2 {
        margin-right: 12px;
    }

    .top1 .tag2 h4 {
        font-size: 15px;
        background: orangered;
        border-radius: 10px;
        color: white;
        padding: 5px;
    }

    .date {
        margin-right: 12px;
    }

    .date h4 {
        font-size: 15px;
        color: #565656;
        padding-top: 5px;
    }

    .top1 .place h4 {
        font-size: 15px;
        color: #565656;
        padding-top: 5px;
    }

    .top2 .title-post {
        width: 380px;
    }

    .top2 .title-post h4 {
        font-size: 20px;
    }

    .top2 {
        display: flex;
    }

    .mid .post-description p {
        color: grey;
    }

    .mid .post-description {
        /* margin-right: 15px; */
        width: 380px;
    }

    .bottom {
        display: flex;
    }

    .bottom .funded {
        margin-right: 10px;
    }

    .bottom .funded h4 {
        font-size: 15px;
        background: brown;
        color: white;
        border-radius: 5px;
        padding: 3px;
    }
    
    .bottom .stage {
        margin-right: 10px;
    }
    .bottom .stage h4{
        font-size: 15px;
        background: #d6249f;
        color: white;
        border-radius: 5px;
        padding: 3px;
    }

    .bottom .else a {
        text-decoration: none;
        transition: 0.2s all ease;
    }

    .bottom .else a:hover {
        color: orange;
        text-decoration: underline;
    }

    .profile-specific-link {
        text-decoration: none;
        color: black;
        transition: 0.3s;
    }
    .profile-specific-link:hover {
        color: orange;
    }

    /* Collapsible filter */

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
</style>

@endsection