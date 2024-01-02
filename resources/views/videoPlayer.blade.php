<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>Home Page</title>
</head>

<body>
    <main>
        <div class="video-panel">
            <x-Navbar type="guest" />
            <div class="container">
                <div><a href="/" class="btn btn-primary my-2"><i class="bi bi-chevron-left"></i> Go Back</a></div>
                <div>
                    <video src="{{ $url }}" controls autoplay style="width:100%;" id="video-player"></video>
                </div>
            </div>
        </div>
        <div class="alert-panel"></div>
    </main>

    <script>
        {!! Vite::content('resources/js/app.js') !!}
    </script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script>
        var video = $("#video-player")[0];
        Echo.channel('NotificationEvent')
            .listen('NotificationAlertEvent', (e) => {
                // console.log(e);
                $('main .video-panel').hide();
                $('main .alert-panel').show();

                video.pause();
                $('main .alert-panel').append(`<div class="bg-dark text-white p-5"><h1><i class="bi bi-exclamation-triangle-fill"></i> ${e.data.title}</h1><hr><p>${e.data.description}</p>
        </div>`);
                setTimeout(() => {
                    $('main .alert-panel').hide();
                    $('main .alert-panel').append("");
                    $('main .video-panel').show();
                    video.play();
                }, e.data.duration * 1000);
            });
    </script>
</body>

</html>
