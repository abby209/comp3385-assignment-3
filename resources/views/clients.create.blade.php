<h1>Add New Client</h1>

@if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session()->get('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-danger" role="alert">
    Please fix the following errors:
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


<form method="POST" action="{{ route('addClient') }}" enctype="multipart/form-data">
  @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <div class.form-group>
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="form-group">
    <label for="telephone">Telephone</label>
    <input type="text" class="form-control" id="telephone" name="telephone">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="company_logo">Company Logo</label>
    <input type="file" class="form-control-file" id="company_logo" name="company_logo">
  </div>

  <button type="submit" class="btn btn-primary">Create Client</button>
</form>
