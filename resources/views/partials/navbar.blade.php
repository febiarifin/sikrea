<header class="py-3 bg-white">
    <div class="container">
        <!-- Start Header -->
        <div class="header">
            <nav class="navbar navbar-expand-md navbar-light px-0">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('templates/assets/images/logo-icon.png') }}" alt="logo">
                    <span class="ml-2">
                        {{ config('app.name') }}
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-1">
                            <a href="{{ route('login') }}" class="btn btn-custom btn-info btn-lg mb-2">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="btn btn-custom btn-info btn-lg">Daftar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
