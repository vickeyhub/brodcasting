<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>Home</title>
</head>

<body>
    <main>
        <div class="video-panel">
            <x-Navbar type="guest" />
            <div class="container mt-5">

                <div class="row">
                    @foreach ($videos as $video)
                        <div class="col-md-3 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $video['title'] }}</h5>
                                    <a href="/video/{{ $video['short_url'] }}" class="btn btn-success"><i
                                            class="bi bi-play-circle"></i> Play</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
        Echo.channel('NotificationEvent')
            .listen('NotificationAlertEvent', (e) => {
                console.log(e);
                $('main .video-panel').hide();
                $('main .alert-panel').show();
                $('main .alert-panel').append(`<div class="bg-dark text-white p-5"><h1><i class="bi bi-exclamation-triangle-fill"></i> ${e.data.title}</h1><hr><p>${e.data.description}</p>
        </div>`);
               setTimeout(() => {
                $('main .alert-panel').append("");
                $('main .alert-panel').hide();
                $('main .video-panel').show();
               }, e.data.duration * 1000);
            });
    </script>
</body>

</html>
