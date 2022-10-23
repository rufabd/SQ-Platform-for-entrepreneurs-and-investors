@extends('layouts.app')

@section('content')

    <!-- Page Heading -->
    
    <div class="container" style="margin-top: 100px;">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Update Profile Information') }}
                        <a href="{{ route('dashboard-profile-skilled') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('skilled-profile-update', $skilledprofile->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="skilled_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_name" type="text"
                                        class="form-control @error('skilled_name') is-invalid @enderror" name="skilled_name"
                                        value="{{ old('skilled_name', $skilledprofile->skilled_name) }}" required
                                        autocomplete="skilled_name" autofocus>

                                    @error('skilled_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_surname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_surname" type="text"
                                        class="form-control @error('skilled_surname') is-invalid @enderror" name="skilled_surname"
                                        value="{{ old('skilled_surname', $skilledprofile->skilled_surname) }}" required
                                        autocomplete="skilled_surname" autofocus>

                                    @error('skilled_surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_profession"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Profession') }}</label>

                                <div class="col-md-6">
                                    <select name="skilled_profession" class="form-control" aria-label="Default select example">
                                        <option selected>{{ $skilledprofile->skilled_profession }}</option>
                                        @foreach ($hiringtags as $hiringtag)
                                            <option value="{{ $hiringtag->name }}">{{ $hiringtag->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('skilled_profession')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_industry"
                                    class="col-md-4 col-form-label text-md-right">{{ __('You are interested in') }}</label>

                                <div class="col-md-6">
                                    <select name="skilled_industry" class="form-control" aria-label="Default select example">
                                        <option selected>{{ $skilledprofile->skilled_industry }}</option>
                                        @foreach ($industrytags as $industrytag)
                                            <option value="{{ $industrytag->name }}">{{ $industrytag->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('skilled_industry')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_telephone"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Telephone number') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_telephone" type="text"
                                        class="form-control @error('skilled_telephone') is-invalid @enderror" name="skilled_telephone"
                                        value="{{ old('skilled_telephone', $skilledprofile->skilled_telephone) }}" required
                                        autocomplete="skilled_telephone" autofocus>

                                    @error('skilled_telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('About You') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_description" type="text"
                                        class="form-control @error('skilled_description') is-invalid @enderror" name="skilled_description"
                                        value="{{ old('skilled_description', $skilledprofile->skilled_description) }}" required
                                        autocomplete="skilled_description" autofocus>

                                    @error('skilled_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_experience_organization"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name of last experience company') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_experience_organization" type="text"
                                        class="form-control @error('skilled_experience_organization') is-invalid @enderror" name="skilled_experience_organization"
                                        value="{{ old('skilled_experience_organization', $skilledprofile->skilled_experience_organization) }}" required
                                        autocomplete="skilled_experience_organization" autofocus>

                                    @error('skilled_experience_organization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_experience_position"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Your position during last experience') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_experience_position" type="text"
                                        class="form-control @error('skilled_experience_position') is-invalid @enderror" name="skilled_experience_position"
                                        value="{{ old('skilled_experience_position', $skilledprofile->skilled_experience_position) }}" required
                                        autocomplete="skilled_experience_position" autofocus>

                                    @error('skilled_experience_position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_experience_from" class="col-md-4 col-form-label text-md-right">{{ __('Last experience started from') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_experience_from" type="date" class="form-control @error('skilled_experience_from') is-invalid @enderror"
                                        name="skilled_experience_from" value="{{ old('skilled_experience_from', $skilledprofile->skilled_experience_from) }}" required autocomplete="skilled_experience_from" autofocus>

                                    @error('skilled_experience_from')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_experience_till" class="col-md-4 col-form-label text-md-right">{{ __('Last experience finished') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_experience_till" type="date" class="form-control @error('skilled_experience_till') is-invalid @enderror"
                                        name="skilled_experience_till" value="{{ old('skilled_experience_till', $skilledprofile->skilled_experience_till) }}" required autocomplete="skilled_experience_till" autofocus>

                                    @error('skilled_experience_till')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="skilled_experience_description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Description of your last experience') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_experience_description" type="text"
                                        class="form-control @error('skilled_experience_description') is-invalid @enderror" name="skilled_experience_description"
                                        value="{{ old('skilled_experience_description', $skilledprofile->skilled_experience_description) }}" required
                                        autocomplete="skilled_experience_description" autofocus>

                                    @error('skilled_experience_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="skilled_avatar"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Change your profile picture') }}</label>

                                <div class="col-md-6">
                                    <input id="skilled_avatar" type="text" style="width: 150px;" readonly
                                        class="form-control @error('skilled_avatar') is-invalid @enderror" name="skilled_avatar"
                                        value="{{ old('skilled_avatar', $skilledprofile->skilled_avatar) }}" required
                                        autocomplete="skilled_avatar" autofocus>

                                    @error('skilled_avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="new-avatart" style="margin-top: 20px;">
                                        <input id="skilled_avatar" type="file" accept="image/png, image/gif, image/jpeg" class="form-control-file @error('skilled_avatar') is-invalid @enderror"
                                        name="skilled_avatar" value="{{ old('skilled_avatar') }}" required autocomplete="skilled_avatar" autofocus>

                                    @error('skilled_avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    
                                </div>
                            </div> --}}

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
                        <form method="POST" action="{{ route('skilled-account-update', Auth::user()->id) }}">
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