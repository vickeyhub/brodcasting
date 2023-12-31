<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <title>Register</title>
</head>
<body>
    <div class="container mt-5 mx-auto border border-1 py-5 shadow" style="width: 350px; border-radius:16px;">
        <h2 class="text-center">Register</h2>
        <hr>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="form-group mb-3">
                <label for="email">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary mt-3">Login</button>
                <a class="mt-3" href="/register">Click here to Sign Up</a>
            </div>
        </form>
    </div>
</body>
</html>