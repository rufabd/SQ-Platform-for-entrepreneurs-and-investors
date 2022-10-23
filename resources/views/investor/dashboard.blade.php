@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 70px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{ $exist = "" }}
            @foreach ($investor_profiles as $profile)
                    {{-- @if (Auth::user()->id != $profile->user_id)
                    No profile
                    @continue
                    @endif --}}
                    @if (Auth::user()->id == $profile->user_id)
                    <div style="display: none">{{ $exist = "Welcome Investor" }}</div>
                    <br>
                    <br>
                    <h4>Hello <strong>{{ Auth::user()->name }}</strong>, welcome to your dashboard. It is nice day to search for new projects.</h4>
                    @break
                    @endif
            @endforeach
            
            
            {{-- @if ($exist == "")
                <div style="display: none">{{ $exist = "No profile found" }}</div>
                <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px; margin-bottom: 30px">Welcome to your Dashboard. For having access to all the rights as Investor, you need to create your profile information from <a href="{{ url('/dashboard/profile/investor/create') }}">here</a></div>
            
            @if(Auth::user()->paid == false)
            <h4 style="margin-bottom: 30px;">Hello <strong>{{ Auth::user()->name }}</strong>, welcome to your dashboard. For creating your profile and having access to all of your rights as investor you need to <a style="transition: 0.3s;" href="/payment">continue from here</a> for the account payment process.</h4>
            @endif
            @endif --}}

            @if (Auth::user()->paid == false)
                <h4 style="margin-bottom: 30px; margin-top: 80px;">Hello <strong>{{ Auth::user()->name }}</strong>, welcome to your dashboard. For creating your profile and having access to all of your rights as investor you need to <a style="transition: 0.3s;" href="/payment">continue from here</a> for the account payment process.</h4>
            @elseif (Auth::user()->paid == true)
                @if ($exist == "")
                    <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px; margin-bottom: 30px">Welcome to your Dashboard. Only one step is left for entering to the world of startups. For having access to all the rights as Investor, you need to create your profile information from <a href="{{ url('/dashboard/profile/investor/create') }}">here</a></div>
                @endif
            @endif

            @if ($exist == "Welcome Investor")
                Hello <strong>{{ Auth::user()->name }}</strong>, welcome to your dashboard. It is another nice day for searching new innovative projects to invest. <a href="{{ url('/founder/project-posts') }}">Start to search</a>
            @endif
        </div>
    </div>
</div>


{{-- <div class="col-md-8" style="margin-top: 50px;">
            @if (Auth::user()->paid == false)
            <h4>Hello <strong>{{ Auth::user()->name }}</strong>, welcome to your dashboard. For creating your profile and having access to all of your rights as investor you need to <a style="transition: 0.3s;" href="/payment">continue from here</a> for the account payment process.</h4>

            @else 
            <h4>Hello <strong>{{ Auth::user()->name }}</strong>, welcome to your dashboard. It is nice day to search for new projects.</h4>
            @endif
        </div> --}}

<style>
    a:hover {
        color: orange;
    }
</style>

@endsection