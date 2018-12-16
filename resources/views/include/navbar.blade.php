<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Test Centre Gym') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">Cari info baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tryout">Ayo berlatih</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/log">Cek hasilmu</a>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
</nav>