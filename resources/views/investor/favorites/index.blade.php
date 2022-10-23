@extends('layouts.app')

@section('content')

{{ $exist = false }}
<div class="container" style="margin-top: 100px;">
    <h1>Favorite Projects</h1>

    {{-- Working Code --}}
    @forelse ($posts as $post)
        @foreach ($post->users as $favvv)
            @if ($favvv->id == Auth::user()->id)
                
                <div class="container">
                    <div class="left-section">
                        <div class="profile-img">
                            <img src="{{asset('/storage/avatars/founders/'.$post->founder_profile->founder_avatar)}}" alt="avatar" style="width: 80px; height:80px; border-radius: 50%;">
                        </div>
                        <div class="name" style="margin-top: 10px;">
                            <a href="{{ route('founder-profile-public', $post->founder_profile->id), }}" class="profile-specific-link"> <p>{{ $post->founder_profile->founder_name }} {{ $post->founder_profile->founder_surname }}</p>
                        </div>
                        <div class="chat" style="margin-bottom: 10px; margin-top: -10px;">
                            <a href="/chatify/{{{ $post->founder_profile->user_id }}}">Send Message</a>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="tags">
                            <div class="hiring">
                                <p>{{ $post->hiring_tag->name }} </p>
                            </div>
                            <div class="industry" style="margin-left: 10px;">
                                <p>{{ $post->industry_tag->name }}</p>
                            </div>
                            <div class="location" style="margin-left: 10px;">
                                <p>{{ $post->city }}, {{ $post->country }}</p>
                            </div>
                        </div>
                        <div class="details-organization">
                            <div class="organization">
                                <p>Organization: <span style="text-decoration: underline;">{{ $post->organization }}</span>, {{$post->organization_year}}</p>
                            </div>
                        </div>
                        <div class="details-project">
                            <div class="stage-investment">
                                <p>Project stage: <span style="text-decoration: underline;">{{ $post->project_stage }}</span></p>
                                <p style="margin-left: 20px">Investment got till today: <span>{{ $post->investment }}</span></p>
                            </div>
                        </div>
                        <div class="details-bottom">
                            <div class="read-more" style="background: #0275d8">
                                <a href="{{ route('auth-founder-posts-show', $post->id), }}">Read more about project and organization</a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('investor-favorite-delete', $post->id) }}" style="margin-top: 10px;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Remove from list <i class='bx bx-message-alt-x' ></i></button>
                    </form>
                </div>
            @endif
        @endforeach
    @empty
    Not any posts
    @endforelse

    {{-- @foreach ($post->users as $favvv)
            @if ($favvv->id == Auth::user()->id)
                @foreach (Auth::user()->project_posts as $newfav)
                    {{ $newfav->title }}
                @endforeach
            @endif
        @endforeach --}}
</div>

@endsection

<style>

    /* .columnn {
        float: left;
        width: 50%;
        padding: 0 10px;
        margin-bottom: 30px;
    }

    @media screen and (max-width: 1200px) {
        .columnn {
            width: 100%;
            display: block;
            margin-bottom: 20px;
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
    } */

    /* .favorites-container {
        display: flex;
        background: #fff;
        max-width: 500px;
        padding-bottom: 20px;
    }

    
    .left-section a {
        text-decoration: none;
        color: black;
        transition: 0.3s;
    }

    .left-section a:hover {
        color: orange;
        text-decoration: underline;
    }

    .chat {
        margin-top: -10px;
    }

    .right-section {
        margin-left: 15px;
        display: block;
        padding-top: 10px;
    }

    .tags {
        display: flex;
    }

    .hiring {
        background: orangered;
        color: white;
        padding: 4px;
        height: 30px;
    }

    .industry {
        margin-left: 10px;
        background: orange;
        color: white;
        padding: 4px;
        height: 30px;
    }

    .location {
        margin-left: 10px;
    }

    .stage-investment {
        display: flex;
    }

    .read-more a {
        text-decoration: none;
        color: black;
        transition: 0.3s;
        padding-left: 25px;
        color: white;
    }

    .read-more a:hover {
        color: white;
        text-decoration: underline;
    } */

    .left-section {
        display: block;
        padding-left: 10px;
        padding-top: 10px;
        justify-content: center;
        text-align: center;
    }
    .right-section {
        justify-content: center;
        text-align: center;
    }
    .tags {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    .left-section a {
        text-decoration: none;
        color: black;
        transition: 0.3s;
    }

    .left-section a:hover {
        color: orange;
        text-decoration: underline;
    }

    .hiring {
        background: purple;
        border-radius: 5px;
        color: white;
        padding: 4px;
        height: 30px;
    }

    .industry {
        margin-left: 10px;
        background: orange;
        border-radius: 5px;
        color: white;
        padding: 4px;
        height: 30px;
    }

    .stage-investment {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    .read-more a {
        text-decoration: none;
        color: black;
        transition: 0.3s;
        padding-left: 25px;
        color: white;
    }

    .read-more a:hover {
        color: white;
        text-decoration: underline;
    }
    
</style>