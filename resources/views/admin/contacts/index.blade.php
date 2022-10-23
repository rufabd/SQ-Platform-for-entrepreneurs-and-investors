@extends('layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="row" style="margin-top: 100px; text-align:center; align-items:center; justify-content:center;">
        <div class="col-4 d-flex justify-content-center">
            <h1 class="text-center h3 mb-0 text-gray-800">Sent Messages</h1>
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
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('admin-messages-index') }}">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Search message by name or email of sender">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surnam</th>
                            <th scope="col">Email</th>
                            <th scope="col">Body</th>
                            <th scope="col">Organization</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $contact->id }}</th>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->surname }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->body }}</td>
                                <td>{{ $contact->organization }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin-messages-delete', $contact->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete Message</button>
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