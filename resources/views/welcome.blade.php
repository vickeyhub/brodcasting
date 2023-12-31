<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>Home Page</title>
</head>

<body>
    <x-Navbar type="guest" />
    <div class="container">
        <div>
            <!-- Replace 'VIDEO_ID' with the actual YouTube video ID -->
            {{-- <video src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" controls></video> --}}
            <div class="row">
                @foreach ($videos as $video)
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                                <h5 class="card-title">{{ $video['title'] }}</h5>
                                <a href="/video/{{ $video['short_url'] }}" class="btn btn-success"><i class="bi bi-play-circle"></i> Play</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
