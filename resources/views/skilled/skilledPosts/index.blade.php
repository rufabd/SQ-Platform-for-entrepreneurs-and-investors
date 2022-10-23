@extends('layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Your Posts</h1>
    </div>
    <div class="container" style="margin-top: 50px">
        <div class="row">
        <div class="card  mx-auto">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('skilled-posts-index') }}">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Jane Doe">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <a href="{{ route('skilled-posts-create') }}" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Hiring</th>
                            <th scope="col">Industry</th>
                            <th scope="col">Title</th>
                            {{-- <th scope="col">Description</th>
                            <th scope="col">Post Desc.</th>
                            <th scope="col">Country</th>
                            <th scope="col">Organization</th>
                            <th scope="col">Established</th>
                            <th scope="col">Proj. Stage</th>
                            <th scope="col">H/Week</th>
                            <th scope="col">Type</th>
                            <th scope="col">Investment</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skilledposts as $skilledpost)
                            @if ($skilledpost->skilled_profile->user_id == Auth::user()->id)
                            {{-- {{ dd($projectpost->founder_profile->user_id) }} --}}
                                <tr>
                                    {{-- {{ dd($projectpost->hiring_tag->name) }} --}}
                                    <th>{{ $skilledpost->hiring_tag->name }}</th>
                                    <td>{{ $skilledpost->industry_tag->name ?? 'No data' }}</td>
                                    <td>{{ $skilledpost->title }}</td>
                                    {{-- <td>{{ $projectpost->organization_description }}</td>
                                    <td>{{ $projectpost->post_description }}</td>
                                    <td>{{ $projectpost->country }}</td>
                                    <td>{{ $projectpost->city }}</td>
                                    <td>{{ $projectpost->organization }}</td>
                                    <td>{{ $projectpost->organization_year }}</td>
                                    <td>{{ $projectpost->project_stage }}</td>
                                    <td>{{ $projectpost->hours_per_week }}</td>
                                    <td>{{ $projectpost->type_week }}</td>
                                    <td>{{ $projectpost->investment }}</td> --}}
                                    <td>
                                        <a href="{{ route('skilled-post-edit-view', $skilledpost->id), }}" class="btn btn-success">Edit</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection