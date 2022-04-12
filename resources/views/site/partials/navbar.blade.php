<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Wider<span>Travel Agency</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('packages') }}" class="nav-link">Destination</a>
                </li>
                <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item cta"><a href="{{ route('login') }}" class="nav-link">Agency Menu</a></li>

            </ul>
        </div>
    </div>
</nav>
