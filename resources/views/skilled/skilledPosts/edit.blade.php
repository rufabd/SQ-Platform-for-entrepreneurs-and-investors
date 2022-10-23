@extends('layouts.app')

@section('content')

    <!-- Page Heading -->
    
    <div class="container" style="margin-top: 100px;">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Update Project Post Information') }}
                        <a href="{{ route('skilled-posts-index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('skilled-post-update', $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="row mb-3">
                                <label for="hiring_tag_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('You are looking for') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="industry_tag_id" type="text"
                                        class="form-control @error('industry_tag_id') is-invalid @enderror" name="industry_tag_id"
                                        value="{{ old('industry_tag_id', $investorprofile->industry_tag->name) }}" required
                                        autocomplete="founder_position" autofocus> --}}

                                        <select name="hiring_tag_id" class="form-control" aria-label="Default select example">
                                        <option value="{{ $post->hiring_tag_id }}">{{ $post->hiring_tag->name }}</option>
                                        @foreach ($hiringtags as $hiringtag)
                                            <option value="{{ $hiringtag->id }}">{{ $hiringtag->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('hiring_tag_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="industry_tag_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Your project is from industry of') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="industry_tag_id" type="text"
                                        class="form-control @error('industry_tag_id') is-invalid @enderror" name="industry_tag_id"
                                        value="{{ old('industry_tag_id', $investorprofile->industry_tag->name) }}" required
                                        autocomplete="founder_position" autofocus> --}}

                                        <select name="industry_tag_id" class="form-control" aria-label="Default select example">
                                        <option value="{{ $post->industry_tag_id }}">{{ $post->industry_tag->name }}</option>
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
                                <label for="title"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title', $post->title) }}" required
                                        autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="post_desciption"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Post description') }}</label>

                                <div class="col-md-6">
                                        <textarea name="post_desciption" id="post_desciption" cols="30" rows="4" class="form-control @error('post_desciption') is-invalid @enderror" required autocomplete="post_desciption" autofocus>{{ $post->post_desciption }}</textarea>

                                    @error('post_desciption')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="country"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-6">

                                        {{-- <textarea name="country" id="country" cols="30" rows="4" class="form-control @error('country') is-invalid @enderror" required autocomplete="post_description" autofocus>{{ $post->country }}</textarea> --}}
                                        <input id="country" type="text"
                                        class="form-control @error('country') is-invalid @enderror" name="country"
                                        value="{{ old('country', $post->country) }}" required
                                        autocomplete="country" autofocus>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city"
                                    class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text"
                                        class="form-control @error('city') is-invalid @enderror" name="city"
                                        value="{{ old('city', $post->city) }}" required
                                        autocomplete="city" autofocus>

                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="hours_per_week"
                                    class="col-md-4 col-form-label text-md-right">{{ __('How many hours per week you are available?') }}</label>

                                <div class="col-md-6">
                                    <input id="hours_per_week" type="number"
                                        class="form-control @error('hours_per_week') is-invalid @enderror" name="hours_per_week"
                                        value="{{ old('hours_per_week', $post->hours_per_week) }}" required
                                        autocomplete="hours_per_week" autofocus>

                                    @error('hours_per_week')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="type"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Organization') }}</label>

                                {{-- <div class="col-md-6">
                                    <input id="organization" type="text"
                                        class="form-control @error('organization') is-invalid @enderror" name="organization"
                                        value="{{ old('organization', $post->organization) }}" required
                                        autocomplete="organization" autofocus>

                                    @error('organization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                
                            </div>

                            <div class="form-group row mb-3">
                                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Which type describes your availability best?') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="type" type="text" class="form-control @error('type') is-invalid @enderror"
                                        name="type" value="{{ old('type') }}" required autocomplete="type" autofocus> --}}
                                    <select name="type" class="form-control" aria-label="Default select example">
                                        <option selected value="{{$post->type}}">{{ $post->type }}</option>
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
                                        {{ __('Update post information') }}
                                    </button>
                                </div>
                            </div>
                            </div>
                            
                        </form>
                        <div class="m-2 p-2">
                                <form method="POST" action="{{ route('skilled-project-delete', $post->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete this post</button>
                                </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection