@extends('layouts.app')

@section('content')

    
    {{-- <div class="container" style="margin-top: 100px;">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Update Your Profile Information') }}
                        <a href="{{ route('dashboard-profile') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('founder-profile-update', $founderprofile->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="founder_user_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('User_id') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_user_id" type="text"
                                        class="form-control @error('founder_user_id') is-invalid @enderror" name="founder_user_id"
                                        value="{{ old('founder_user_id', $founderprofile->founder_user_id) }}" required autocomplete="founder_user_id"
                                        autofocus>

                                    @error('founder_user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="founder_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_name" type="text"
                                        class="form-control @error('founder_name') is-invalid @enderror" name="founder_name"
                                        value="{{ old('founder_name', $founderprofile->founder_name) }}" required autocomplete="founder_name"
                                        autofocus>

                                    @error('founder_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="founder_surname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_surname" type="text"
                                        class="form-control @error('founder_surname') is-invalid @enderror" name="founder_surname"
                                        value="{{ old('founder_surname', $
                                        $founderprofile->founder_surname) }}" required
                                        autocomplete="founder_surname" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="founder_position"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_position" type="text"
                                        class="form-control @error('founder_position') is-invalid @enderror" name="founder_position"
                                        value="{{ old('founder_position', $
                                        $founderprofile->founder_position) }}" required
                                        autocomplete="founder_position" autofocus>

                                    @error('founder_position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="founder_organization"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Organization') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_organization" type="text"
                                        class="form-control @error('founder_organization') is-invalid @enderror" name="founder_organization"
                                        value="{{ old('founder_organization', $
                                        $founderprofile->founder_organization) }}" required
                                        autocomplete="founder_organization" autofocus>

                                    @error('founder_organization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="founder_telephone"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_telephone" type="text"
                                        class="form-control @error('founder_telephone') is-invalid @enderror" name="founder_telephone"
                                        value="{{ old('founder_telephone', $
                                        $founderprofile->founder_telephone) }}" required
                                        autocomplete="founder_telephone" autofocus>

                                    @error('founder_telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="founder_insta_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Instagram Profile Link') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_insta_link" type="text"
                                        class="form-control @error('founder_insta_link') is-invalid @enderror" name="founder_insta_link"
                                        value="{{ old('founder_insta_link', $
                                        $founderprofile->founder_insta_link) }}" required
                                        autocomplete="founder_insta_link" autofocus>

                                    @error('founder_insta_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="founder_face_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Facebook Profile Link') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_face_link" type="text"
                                        class="form-control @error('founder_face_link') is-invalid @enderror" name="founder_face_link"
                                        value="{{ old('founder_face_link', $
                                        $founderprofile->founder_face_link) }}" required
                                        autocomplete="founder_face_link" autofocus>

                                    @error('founder_face_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="founder_linked_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Linkedin Profile Link') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_linked_link" type="text"
                                        class="form-control @error('founder_linked_link') is-invalid @enderror" name="founder_linked_link"
                                        value="{{ old('founder_linked_link', $
                                        $founderprofile->founder_linked_link) }}" required
                                        autocomplete="founder_linked_link" autofocus>

                                    @error('founder_linked_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="founder_description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_description" type="text"
                                        class="form-control @error('founder_description') is-invalid @enderror" name="founder_description"
                                        value="{{ old('founder_description', $
                                        $founderprofile->founder_description) }}" required
                                        autocomplete="founder_description" autofocus>

                                    @error('founder_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update User') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Page Heading -->
    
    <div class="container" style="margin-top: 100px;">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Update Profile Information') }}
                        <a href="{{ route('dashboard-profile') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('founder-profile-update', $founderprofile->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="founder_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_name" type="text"
                                        class="form-control @error('founder_name') is-invalid @enderror" name="founder_name"
                                        value="{{ old('founder_name', $founderprofile->founder_name) }}" required
                                        autocomplete="founder_name" autofocus>

                                    @error('founder_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="founder_surname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_surname" type="text"
                                        class="form-control @error('founder_surname') is-invalid @enderror" name="founder_surname"
                                        value="{{ old('founder_surname', $founderprofile->founder_surname) }}" required
                                        autocomplete="founder_surname" autofocus>

                                    @error('founder_surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="founder_position"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_position" type="text"
                                        class="form-control @error('founder_position') is-invalid @enderror" name="founder_position"
                                        value="{{ old('founder_position', $founderprofile->founder_position) }}" required
                                        autocomplete="founder_position" autofocus>

                                    @error('founder_position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="founder_organization"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Organization') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_organization" type="text"
                                        class="form-control @error('founder_organization') is-invalid @enderror" name="founder_organization"
                                        value="{{ old('founder_organization', $founderprofile->founder_organization) }}" required
                                        autocomplete="founder_organization" autofocus>

                                    @error('founder_organization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="founder_telephone"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_telephone" type="text"
                                        class="form-control @error('founder_telephone') is-invalid @enderror" name="founder_telephone"
                                        value="{{ old('founder_telephone', $founderprofile->founder_telephone) }}" required
                                        autocomplete="founder_telephone" autofocus>

                                    @error('founder_telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="founder_insta_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Instagram profile link') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_insta_link" type="text"
                                        class="form-control @error('founder_insta_link') is-invalid @enderror" name="founder_insta_link"
                                        value="{{ old('founder_insta_link', $founderprofile->founder_insta_link) }}" required
                                        autocomplete="founder_insta_link" autofocus>

                                    @error('founder_insta_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="founder_face_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Facebook profile link') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_face_link" type="text"
                                        class="form-control @error('founder_face_link') is-invalid @enderror" name="founder_face_link"
                                        value="{{ old('founder_face_link', $founderprofile->founder_face_link) }}" required
                                        autocomplete="founder_face_link" autofocus>

                                    @error('founder_face_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="founder_linked_link"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Linkedin profile link') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_linked_link" type="text"
                                        class="form-control @error('founder_linked_link') is-invalid @enderror" name="founder_linked_link"
                                        value="{{ old('founder_linked_link', $founderprofile->founder_linked_link) }}" required
                                        autocomplete="founder_linked_link" autofocus>

                                    @error('founder_linked_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="founder_description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('About you') }}</label>

                                <div class="col-md-6">
                                    <input id="founder_description" type="text"
                                        class="form-control @error('founder_description') is-invalid @enderror" name="founder_description"
                                        value="{{ old('founder_description', $founderprofile->founder_description) }}" required
                                        autocomplete="founder_description" autofocus>

                                    @error('founder_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="founder_avatar"
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
                                        <input value="{{ old('founder_avatar', $founderprofile->founder_avatar) }}" id="founder_avatar" type="file" accept="image/png, image/gif, image/jpeg" class="form-control-file @error('founder_avatar') is-invalid @enderror"
                                        name="founder_avatar" autocomplete="founder_avatar" autofocus>

                                    @error('founder_avatar')
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
                        <form method="POST" action="{{ route('founder-account-update', Auth::user()->id) }}">
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