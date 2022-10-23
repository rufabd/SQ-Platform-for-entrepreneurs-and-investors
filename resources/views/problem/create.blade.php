@extends('layouts.app')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container" style="margin-top: 100px;">
        <h2 class="text-center main-heading" style="margin-bottom: 50px;">
            Please report your problem to us from here
        </h2>
        <div class="problem-container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('user-report-problem-store') }}" enctype="multipart/form-data">
                    @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="user_id" type="hidden"
                                        class="form-control @error('user_id') is-invalid @enderror" name="user_id"
                                        value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>

                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="body" class="col-md-4 col-form-label text-md-end">{{ __('Problem description') }}</label>

                                <div class="col-md-6">
                                        <textarea name="body" id="body" minlength="100" cols="10" rows="10" class="form-control @error('body') is-invalid @enderror" value="{{ old('body') }}" required autocomplete="body" autofocus></textarea>

                                    @error('body')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit Report') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection