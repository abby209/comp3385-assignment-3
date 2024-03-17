@extends('layouts.app')

@section('content')

<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <h2>Create Client</h2>

    <div class="mb-3">
        <label for="name" class="form-label">Name *</label>
        <input type="name" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email *</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone *</label>
        <input type="phone" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
        <small>Format: xxx-xxx-xxxx</small>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address *</label>
        <input type="address" class="form-control" id="address" name="address" placeholder="Example: 3385 Antigua Ave, Five Islands Village, Antigua & Barbuda" required>
    </div>

    <div class="mb-3">
        <label for="company_logo" class="form-label">Company Logo *</label>
        <input type="file" class="form-control" id="company_logo" name="company_logo" accept="image/png, image/jpeg" required>
        <small>Only image files (e.g., jpg, png) are allowed. Files must be less than 2MB.</small>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection