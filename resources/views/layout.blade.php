<!DOCTYPE html >
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" />
    <link href="/css/fonts.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{ mix('css/app/css')}}">  Laravel mix --}}
    <link rel="stylesheet" href="css/app.css">

    @yield('head')

    {{-- //// --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="/">SimpleWork</a></h1>
                </div>
                <div id="menu">
                    <ul>
                        <li class="{{Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
                        <li class="{{Request::is('about' ) ? 'current_page_item' : ''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
                        <li class="{{Request::path() === 'articles' ? 'current_page_item' : ''}}"><a href="/articles" accesskey="4" title="">Articles</a></li>
                        <li class="{{Request::path() === 'contact' ? 'current_page_item' : ''}}"><a href="#" accesskey="6" title="">Contact Us</a></li>
                        {{-- <li class="{{Request::path() === 'login' ? 'current_page_item' : ''}}"><a href="/login" accesskey="7" title="">Sign in</a></li> --}}
                     
                          <!-- Authentication Links -->
                          @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class=" dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} 
                              </a>

                              <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                  <a style="color: black" class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                        
                    </ul>
                    
                </div>
            </div>

            {{-- header-feature --}}
            @yield('header')
            
        </div>
        @yield('content')
    </body>
</html>
