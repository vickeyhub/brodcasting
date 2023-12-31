<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>Home Page</title>
</head>

<body>
    <x-Navbar type="guest" />
    <div class="container">
        <div><a href="/" class="btn btn-primary my-2"><i class="bi bi-chevron-left"></i> Go Back</a></div>
        <div>
            <video src="{{ $url }}" controls autoplay></video>
        </div>
    </div>
</body>

</html>
