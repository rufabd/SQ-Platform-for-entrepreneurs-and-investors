{{-- @extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @forelse ($skilled_profiles as $profile)
                    @if (Auth::user()->id != $profile->user_id)
                        <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px;">Welcome to your Dashboard. For having access to all the rights as Skilled Person, you need to create your profile information from <a href="{{ route('create-profile-skilled') }}">here</a></div>
                    @endif
                    @empty
                        <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px;">Welcome to your Dashboard. For having access to all the rights as Skilled Person, you need to create your profile information from <a href="{{ route('create-profile-skilled') }}">here</a></div>
            @endforelse
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 70px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            {{ $exist = "" }}
            @foreach ($skilled_profiles as $profile)
                    {{-- @if (Auth::user()->id != $profile->user_id)
                    No profile
                    @continue
                    @endif --}}
                    @if (Auth::user()->id == $profile->user_id)
                    <div style="display: none">{{ $exist = "Welcome User" }}</div>
                    @break
                    @endif
            @endforeach
            
            @if ($exist == "")
                <div style="display: none">{{ $exist = "No profile found" }}</div>
                <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px;">Welcome to your Dashboard. For having access to all the rights as Skilled Person, you need to create your profile information from <a href="{{ route('create-profile-skilled') }}">here</a></div>
            @endif

            @if ($exist == 'Welcome User')
                <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px;">Welcome back to your dashboard, <strong>{{ Auth::user()->name }}</strong>. Start now to search for new projects and join a team to start new journey. <a href="{{ route('project-post-public') }}">Continue here</a></div>
            @endif
        </div>
    </div>
</div>
@endsection