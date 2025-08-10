<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $profile->full_name }} Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Profile of {{ $profile->full_name }}</h1>
            <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Back to Profiles</a>
        </div>
        <div class="card">
            @if($profile->profile_image)
                <img src="{{ asset('storage/' . $profile->profile_image) }}" class="card-img-top" alt="Profile Image" style="max-height: 400px; object-fit: cover;">
            @endif
            <div class="card-body">
                <p class="card-text"><strong>Full Name:</strong> {{ $profile->full_name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $profile->email }}</p>
                <p class="card-text"><strong>Phone:</strong> {{ $profile->phone }}</p>
                <p class="card-text"><strong>Address:</strong> {{ $profile->address }}</p>
                <p class="card-text"><strong>Bio:</strong> {{ $profile->bio }}</p>
                <p class="card-text"><strong>Hobbies:</strong> {{ $profile->hobbies }}</p>
                <p class="card-text"><strong>Date of Birth:</strong> {{ $profile->date_of_birth }}</p>
            </div>
        </div>
    </div>
</body>
</html>