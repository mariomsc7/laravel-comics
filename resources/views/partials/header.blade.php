<header>
    <div class="header container flex">
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('images/dc-logo.png') }}" alt="">
        </a>
    
        <nav class="navbar">
            <ul>
                <li>
                    <a class="active" href="{{ route('home') }}">comics</a>
                </li>
                <li>
                    <a href="{{ route('news') }}">news</a>
                </li>
            </ul>
        </nav>
    </div>
</header>