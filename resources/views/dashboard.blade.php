@extends('layouts.app')

@section('content')
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary float-end ms-2">Add Client</a>
  
    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>

    <h2 class="mt-4">Client List</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">  @foreach($clients as $client)
      <div class="col">
        <div class="card">
          <img src="{{ asset('storage/app/public/logos' . $client->company_logo) }}" class="card-img-top" alt="Company Logo" style="max-width: 100px;">
          <div class="card-body">
            <h5 class="card-title">{{ $client->name }}</h5>
            <p class="card-text">
              <span class="fw-bold">Email:</span> {{ $client->email }}<br>
              <span class="fw-bold">Phone:</span> {{ $client->phone }}<br>
              <span class="fw-bold">Address:</span> {{ $client->address }}
            </p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
