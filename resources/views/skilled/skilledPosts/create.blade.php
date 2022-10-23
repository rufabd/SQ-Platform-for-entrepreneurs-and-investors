@extends('layouts.app')

@section('content')

    <!-- Page Heading -->
    <div style="margin-top: 80px; text-align: center; align-items:center; justify-content:center;">
        <h1 class="h3 mb-0 text-gray-800" style="text-align: center; align-items:center; justify-content:center;">Skilled Post</h1>
    </div>
    <div class="container" style="margin-top: 20px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Create New Post') }}
                        <a href="{{ route('skilled-posts-index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('skilled-posts-store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="skilled_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                                <div class="col-md-6">
                                    @foreach ($sprofiles as $sprofile)
                                        @if ($sprofile->user_id == Auth::user()->id)
                                            <input value="{{ $sprofile->id }}" id="skilled_id" type="hidden" class="form-control @error('skilled_id') is-invalid @enderror"
                                            name="skilled_id" value="{{ old('skilled_id') }}" required autocomplete="skilled_id" autofocus>
                                        @endif
                                    @endforeach

                                    
                                    @error('skilled_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="tag_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('You desire to work as') }}</label>

                                <div class="col-md-6">
                                    <select name="hiring_tag_id" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($phiringtags as $phiringtag)
                                            <option value="{{ $phiringtag->id }}">{{ $phiringtag->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tag_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="itag_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Your desired industry to work') }}</label>

                                <div class="col-md-6">
                                    <select name="industry_tag_id" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($pindustrytags as $pindustrytag)
                                            <option value="{{ $pindustrytag->id }}">{{ $pindustrytag->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('itag_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        
                            <div class="form-group row mb-3">
                                <label for="post_desciption" class="col-md-4 col-form-label text-md-right">{{ __('Describe where would you like to work?') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="post_desciption" type="text" class="form-control @error('post_desciption') is-invalid @enderror"
                                        name="post_desciption" value="{{ old('post_desciption') }}" required autocomplete="post_desciption" autofocus> --}}

                                        <textarea  id="post_desciption" class="form-control @error('post_desciption') is-invalid @enderror"
                                        name="post_desciption" value="{{ old('post_desciption') }}" required autocomplete="post_desciption" autofocusid="" cols="30" rows="5"></textarea>

                                    @error('post_desciption')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <input id="post_description" type="text" class="form-control @error('country') is-invalid @enderror"
                                        name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                        name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="hours_per_week" class="col-md-4 col-form-label text-md-right">{{ __('How many hours per week you want to work?') }}</label>

                                <div class="col-md-6">
                                    <input id="hours_per_week" type="number" class="form-control @error('hours_per_week') is-invalid @enderror"
                                        name="hours_per_week" value="{{ old('hours_per_week') }}" required autocomplete="hours_per_week" autofocus>

                                    @error('hours_per_week')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Which type describes your availability best?') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="type" type="text" class="form-control @error('type') is-invalid @enderror"
                                        name="type" value="{{ old('type') }}" required autocomplete="type" autofocus> --}}
                                    <select name="type" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                            <option value="Full-time">Full-time</option>
                                            <option value="Part-time">Part-time</option>
                                            <option value="Remote">Remote</option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create post') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection