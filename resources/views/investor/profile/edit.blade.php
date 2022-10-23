@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    
    <div class="container" style="margin-top: 100px;">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Update Profile Information') }}
                        <a href="{{ route('dashboard-profile-investor') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('investor-profile-update', $investorprofile->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="investor_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="investor_name" type="text"
                                        class="form-control @error('investor_name') is-invalid @enderror" name="investor_name"
                                        value="{{ old('investor_name', $investorprofile->investor_name) }}" required
                                        autocomplete="investor_name" autofocus>

                                    @error('investor_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="investor_surname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="investor_surname" type="text"
                                        class="form-control @error('investor_surname') is-invalid @enderror" name="investor_surname"
                                        value="{{ old('investor_surname', $investorprofile->investor_surname) }}" required
                                        autocomplete="investor_surname" autofocus>

                                    @error('investor_surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="industry_tag_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('You are interested in') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="industry_tag_id" type="text"
                                        class="form-control @error('industry_tag_id') is-invalid @enderror" name="industry_tag_id"
                                        value="{{ old('industry_tag_id', $investorprofile->industry_tag->name) }}" required
                                        autocomplete="founder_position" autofocus> --}}

                                        <select name="industry_tag_id" class="form-control" aria-label="Default select example">
                                        <option value="{{ $investorprofile->industry_tag_id }}">{{ $investorprofile->industry_tag->name }}</option>
                                        @foreach ($industrytags as $industrytag)
                                            <option value="{{ $industrytag->id }}">{{ $industrytag->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('industry_tag_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="investor_description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="investor_description" type="text"
                                        class="form-control @error('investor_description') is-invalid @enderror" name="investor_description"
                                        value="{{ old('investor_description', $investorprofile->investor_description) }}" required
                                        autocomplete="investor_description" autofocus>

                                    @error('investor_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="investor_insta_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Instagram profile link') }}</label>

                                <div class="col-md-6">
                                    <input id="investor_insta_link" type="text"
                                        class="form-control @error('investor_insta_link') is-invalid @enderror" name="investor_insta_link"
                                        value="{{ old('investor_insta_link', $investorprofile->investor_insta_link) }}" required
                                        autocomplete="investor_insta_link" autofocus>

                                    @error('investor_insta_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="investor_face_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Facebook profile link') }}</label>

                                <div class="col-md-6">
                                    <input id="investor_face_link" type="text"
                                        class="form-control @error('investor_face_link') is-invalid @enderror" name="investor_face_link"
                                        value="{{ old('investor_face_link', $investorprofile->investor_face_link) }}" required
                                        autocomplete="investor_face_link" autofocus>

                                    @error('investor_face_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="investor_linked_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Linkedin profile link') }}</label>

                                <div class="col-md-6">
                                    <input id="investor_linked_link" type="text"
                                        class="form-control @error('investor_linked_link') is-invalid @enderror" name="investor_linked_link"
                                        value="{{ old('investor_linked_link', $investorprofile->investor_linked_link) }}" required
                                        autocomplete="investor_linked_link" autofocus>

                                    @error('investor_linked_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="investor_avatar"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Change your profile picture') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="founder_avatar" type="text" style="width: 150px;" readonly
                                        class="form-control @error('founder_avatar') is-invalid @enderror" name="founder_avatar"
                                        value="{{ old('founder_avatar', $founderprofile->founder_avatar) }}" required
                                        autocomplete="founder_avatar" autofocus>

                                    @error('founder_avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                        <input value="{{ old('investor_avatar', $investorprofile->investor_avatar) }}" id="investor_avatar" type="file" accept="image/png, image/gif, image/jpeg" class="form-control-file @error('investor_avatar') is-invalid @enderror"
                                        name="investor_avatar" autocomplete="investor_avatar" autofocus>

                                    @error('investor_avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update profile information') }}
                                    </button>
                                </div>
                            </div>
                            </div>
                            
                        </form>
                        {{-- <div class="m-2 p-2">
                                @if ($user->id != Auth::user()->id)
                                <form method="POST" action="{{ route('admin-users-delete', $user->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete {{ $user->name }}</button>
                                </form>
                                @endif
                        </div> --}}
                    </div>

                    <div class="card" style="margin-top: 50px;">
                    <div class="card-header">
                        {{ __('Update Account Information') }}
                        {{-- <a href="{{ route('dashboard-profile') }}" class="float-right">Back</a> --}}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('investor-account-update', Auth::user()->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name', Auth::user()->name) }}" required
                                        autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email', Auth::user()->email) }}" required
                                        autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update account information') }}
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