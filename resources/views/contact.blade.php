@extends('layouts.app')

@section('content')
    <div style="margin-top: 150px; text-align: center; align-items:center; justify-content:center;">
        <h1 class="h3 style="text-align: center; align-items:center; justify-content:center;">Get in touch with us</h1>
    </div>
    @if(Session::has('message'))
        <div style="display: flex; text-align:center; justify-content:center;">
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Send message to us') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contact-us-post') }}">
                            @csrf

                            <div class="form-group row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="surname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                        class="form-control @error('surname') is-invalid @enderror" name="surname" required autocomplete="email" autofocus>

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Email address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="body"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Your message to us') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus> --}}
                                        <textarea class="form-control @error('body') is-invalid @enderror" name="body" required autocomplete="body" autofocus name="body" id="body" cols="30" rows="10"></textarea>

                                    @error('body')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="organization"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Which organization you represent (if any) ?') }}</label>

                                <div class="col-md-6">
                                    <input id="organization" type="text"
                                        class="form-control @error('organization') is-invalid @enderror" name="organization" required autocomplete="organization" autofocus>

                                    @error('organization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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