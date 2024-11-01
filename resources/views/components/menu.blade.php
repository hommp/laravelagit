<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    nav {
        font-family: 'Poppins', sans-serif;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://cdn.freelogovectors.net/wp-content/uploads/2023/09/nike-nocta-logo-freelogovectors.net_.png"
                alt="Logo" width="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto fw-bold">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list') }}">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                @if(!Auth::check())
                <a href="{{ route('signup') }}" class="btn btn-dark me-2 fw-bold">Signup</a>
                <a href="{{ route('signin') }}" class="btn btn-dark fw-bold">Signin</a>
                @else
                <a href="{{ route('logout') }}" class="btn btn-dark fw-bold">Logout</a>
                @endif
            </div>
        </div>
    </div>
</nav>