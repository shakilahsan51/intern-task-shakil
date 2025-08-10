<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Welcome, {{ Auth::user()->name }}!</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
        <a href="{{ route('profile.create') }}" class="btn btn-success m-2">Create Profile</a>
        <a href="{{ route('profiles.index') }}" class="btn btn-info m-2">View All Profiles</a>

        <p>You are logged in.</p>
    </div>
</body>
</html>