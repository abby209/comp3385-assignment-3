<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <h2>Create Client</h2>

    <div class="mb-3">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="mb-3">>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Format: xxx-xxx-xxxx" required>
    </div>

    <div class="mb-3">
        <label for="address">Address:</label>
        <textarea id="address" name="address" placeholder="Example: 3385 Antigua Ave, Five Islands Village, Antigua & Barbuda" required></textarea>
    </div>

    <div class="mb-3">
        <label for="company_logo">Company Logo:</label>
        <input type="file" id="company_logo" name="company_logo" accept="image/png, image/jpeg" required>
        <small>Only image files (e.g., jpg, png) are allowed. Files must be less than 2MB.</small>
    </div>

    <button type="submit">Create</button>
</form>
