    @extends('layout')
        @section('content')
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <button class="btn btn-primary">Pilotos</button>
                                    </div>
                                    <div class="col-lg-3">
                                        <button class="btn btn-primary">Eventos</button>
                                    </div>
                                    <div class="col-lg-3">
                                        <button class="btn btn-primary">Organizadores</button>
                                    </div>
                                    <div class="col-lg-3">
                                        <button class="btn btn-primary">Usuarios</button>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ url('/login') }}">Login</a>
                                <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif

                <div class="content">
                    <!-- <div class="links">
                        <a href="https://laravel.com/docs">Documentation</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div> -->
                </div>
            </div>
        @stop