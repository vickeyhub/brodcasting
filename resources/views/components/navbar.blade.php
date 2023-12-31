<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Brodcast</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                </ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li>
                        <p class="nav-link">Welcome {{ Auth::user()->name }}!</p>
                    </li>
                    <li>
                        {{-- <a class="btn btn-outline-danger" href="/logout">Logout</a> --}}
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-danger" type="submit"><i class="bi bi-box-arrow-left"></i> Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="/login">Login</a>
                        {{-- <a class="btn btn-primary" href="/Register">Register</a> --}}
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
