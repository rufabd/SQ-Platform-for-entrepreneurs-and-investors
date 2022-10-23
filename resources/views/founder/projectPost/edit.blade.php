@extends('layouts.app')

@section('content')

    <!-- Page Heading -->
    
    <div class="container" style="margin-top: 100px;">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Update Project Post Information') }}
                        <a href="{{ route('founder-project-posts-index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('founder-post-update', $post->id) }}">
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
                                <label for="organization_description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Organization description') }}</label>

                                <div class="col-md-6">
                                        <textarea name="organization_description" id="organization_description" cols="30" rows="4" class="form-control @error('organization_description') is-invalid @enderror" required autocomplete="organization_description" autofocus>{{ $post->organization_description }}</textarea>

                                    @error('organization_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="post_description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Post description') }}</label>

                                <div class="col-md-6">

                                        <textarea name="post_description" id="post_description" cols="30" rows="4" class="form-control @error('post_description') is-invalid @enderror" required autocomplete="post_description" autofocus>{{ $post->post_description }}</textarea>

                                    @error('post_description')
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
                                <label for="organization"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Organization') }}</label>

                                <div class="col-md-6">
                                    <input id="organization" type="text"
                                        class="form-control @error('organization') is-invalid @enderror" name="organization"
                                        value="{{ old('organization', $post->organization) }}" required
                                        autocomplete="organization" autofocus>

                                    @error('organization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="organization_year"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Organization established') }}</label>

                                <div class="col-md-6">
                                    <input id="organization_year" type="date"
                                        class="form-control @error('organization_year') is-invalid @enderror" name="organization_year"
                                        value="{{ old('organization_year', $post->organization_year) }}" required
                                        autocomplete="organization_year" autofocus>

                                    @error('organization_year')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="project_stage"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Stage of the project') }}</label>

                                <div class="col-md-6">
                                    <input id="project_stage" type="text"
                                        class="form-control @error('project_stage') is-invalid @enderror" name="project_stage"
                                        value="{{ old('project_stage', $post->project_stage) }}" required
                                        autocomplete="project_stage" autofocus>

                                    @error('project_stage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="hours_per_week"
                                    class="col-md-4 col-form-label text-md-right">{{ __('How many hours/week working is enough?') }}</label>

                                <div class="col-md-6">
                                    <input id="hours_per_week" type="number" min="0" oninput="this.value = Math.abs(this.value)"
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
                                <label for="type_week"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Type of the job') }}</label>

                                <div class="col-md-6">
                                    <input id="type_week" type="text"
                                        class="form-control @error('type_week') is-invalid @enderror" name="type_week"
                                        value="{{ old('type_week', $post->type_week) }}" required
                                        autocomplete="type_week" autofocus>

                                    @error('type_week')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="investment"
                                    class="col-md-4 col-form-label text-md-right">{{ __('How much investment you got till today?') }}</label>

                                <div class="col-md-6">
                                    <input id="investment" type="number" min="0" oninput="this.value = Math.abs(this.value)"
                                        class="form-control @error('investment') is-invalid @enderror" name="investment"
                                        value="{{ old('investment', $post->investment) }}" required
                                        autocomplete="investment" autofocus>

                                    @error('investment')
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
                                <form method="POST" action="{{ route('founder-project-delete', $post->id) }}">
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