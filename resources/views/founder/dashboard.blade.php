@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 70px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                im here as foiunder
                
                </div>
            </div> --}}

            
            {{-- @forelse ($founder_profiles as $profile)
                    @if (Auth::user()->id != $profile->user_id)
                        <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px;">Welcome to your Dashboard. For having access to all the rights as Founder, you need to create your profile information from <a href="{{ route('create-profile') }}">here</a></div>
                    @endif
                    @empty
                        <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px;">Welcome to your Dashboard. For having access to all the rights as Founder, you need to create your profile information from <a href="{{ route('create-profile') }}">here</a></div>
            @endforelse --}}

            {{-- @foreach ($founder_profiles as $profile)
                    @if (Auth::user()->id == $profile->user_id)
                        Welcome User
                        @break

                        @elseif (Auth::user()->id != $profile->user_id)
                        
                    @endif
            @endforeach --}}
            
            {{ $exist = "" }}
            @foreach ($founder_profiles as $profile)
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
                <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px;">Welcome to your Dashboard. For having access to all the rights as Skilled Person, you need to create your profile information from <a href="{{ url('/dashboard/profile/founder/create') }}">here</a></div>
            @endif
            
            @if ($exist == "Welcome User")
                <div style="font-size: 20px; align-items:center; text-align: center; justify-content:center; margin-top: 100px;">Welcome back to your dashboard, <strong>{{Auth::user()->name}}.</strong> Create new posts and find best matched people to your project. <a href="{{ route('founder-project-posts-index') }}">Continue</a></div>
            @endif
        </div>
    </div>
</div>
@endsection