<header>
    <div class="header container flex">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </a>
    
        <nav class="navbar">
            <ul>
                <li>
                    <a class="active" href="">comics</a>
                </li>
                <li>
                    <a href="{{ route('news') }}">news</a>
                </li>
            </ul>
        </nav>
    </div>
</header>