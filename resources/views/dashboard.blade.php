@extends('layouts.app')

@section('content')
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary float-end ms-2">Add Client</a>
    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>

    <h2 class="mt-4">Client List</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Address</th>
                <th>Company Logo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td>{{ $client->address }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $client->company_logo) }}" alt="Company Logo" style="max-width: 100px;">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
