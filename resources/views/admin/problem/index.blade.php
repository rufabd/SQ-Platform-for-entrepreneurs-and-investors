@extends('layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="row" style="margin-top: 100px; text-align:center; align-items:center; justify-content:center;">
        <div class="col-4 d-flex justify-content-center">
            <h1 class="text-center h3 mb-0 text-gray-800">Reported Problems</h1>
        </div>
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
            {{-- <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('admin-reported-problems') }}">
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
                        <a href="{{ route('admin-users-create') }}" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>
            </div> --}}
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Reporter email</th>
                            <th scope="col">Report</th>
                            <th scope="col">Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($problems as $problem)
                            <tr>
                                <th scope="row">{{ $problem->id }}</th>
                                <td>{{ $problem->user->email }}</td>
                                <td>{{ $problem->body }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin-problem-delete', $problem->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection