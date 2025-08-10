<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>All Profiles</h1>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Go to Dashboard</a>
        </div>

        <div class="row">
            @foreach($profiles as $profile)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($profile->profile_image)
                        <img src="{{ asset('storage/' . $profile->profile_image) }}" class="card-img-top" alt="Profile Image">
                    @else
                        <img src="https://via.placeholder.com/300x200.png?text=No+Image" class="card-img-top" alt="Placeholder Image">
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $profile->full_name }}</h5>
                        <p class="card-text">{{ $profile->email }}</p>
                        <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>