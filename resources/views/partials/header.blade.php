<header>
    <div class="container">
        <div class="row">
            <div class="logo col-2">
                <a href="/">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc-logo">
                </a>
            </div>
            <div class="col-10">
                <nav>
                    <ul>
                        <li>
                            <a class="{{Route::currentRouteName() == 'characters' ? 'active' : ''}}" href="{{ route('characters')}}">characters</a>
                        </li>
                        <li>
                            <a class="{{Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{ route('comics')}}">comics</a>
                        </li>
                        <li>
                            <a class="{{Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{ route('movies')}}">movies</a>
                        </li>
                        <li>
                            <a class="{{Route::currentRouteName() == 'tv' ? 'active' : ''}}" href="{{ route('tv')}}">tv</a>
                        </li>
                        <li>
                            <a class="{{Route::currentRouteName() == 'games' ? 'active' : ''}}" href="{{ route('games')}}">games</a>
                        </li>
                        <li>
                            <a class="{{Route::currentRouteName() == 'collectibles' ? 'active' : ''}}" href="{{ route('collectibles')}}">collectibles</a>
                        </li>
                        <li>
                            <a class="{{Route::currentRouteName() == 'videos' ? 'active' : ''}}" href="{{ route('videos')}}">videos</a>
                        </li>
                        <li>
                            <a class="{{Route::currentRouteName() == 'fans' ? 'active' : ''}}" href="{{ route('fans')}}">fans</a>
                        </li>
                        <li>
                            <a class="{{Route::currentRouteName() == 'news' ? 'active' : ''}}" href="{{ route('news')}}">news</a>
                        </li>
                        <li>
                            <a class="{{Route::currentRouteName() == 'shop' ? 'active' : ''}}" href="{{ route('shop')}}">shop</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>