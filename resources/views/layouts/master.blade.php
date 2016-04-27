<html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

      <title>Chris McCluskey - Full Stack Web Developer</title>
      <link rel="stylesheet" type="text/css" href="/css/main.css" />
      @include('common.google-analytics')
  </head>
  <body>
    <div id="container">
        <header>
            <div class="menu container">
                <div class="page title">
                    <h1><a href="/">Chris McCluskey</a></h1>
                    <span>Full Stack Web Developer</span>
                </div>
                <div class="menu link">
                    <a href="#" id="menu-button">
                        <span>MENU</span>
                        <img src="/svg/logo.svg" alt="[Logo]" />
                    </a>
                </div>
            </div>
        </header>

        @section('nav')
        <nav id="menu">
            <ul>
                @if ($section == 'portfolio')
                <li class="active portfolio">
                @else
                <li class="portfolio">
                @endif
                  <a class="button" href="/portfolio">
                    <button>Portfolio</button>
                  </a>
                </li>
                @if ($section == 'resume')
                <li class="active resume">
                @else
                <li class="resume">
                @endif
                  <a class="button" href="/resume">
                    <button>Resume</button>
                  </a>
                </li>
                @if ($section == 'about')
                <li class="active about">
                @else
                <li class="about">
                @endif
                  <a class="button" href="/about">
                    <button>About Me</button>
                  </a>
                </li>
                @if ($section == 'contact')
                <li class="active contact">
                @else
                <li class="contact">
                @endif
                  <a class="button" href="/contact">
                    <button>Contact Me</button>
                  </a>
                </li>
            </ul>
        </nav>
        @show

        <main>
            @yield('content')
        </main>

        <footer>
            <div>
                <img src="/svg/logo.svg" alt="[Logo]" width="144px" height="128px" />
            </div>
            <div>
            <a href="/about/this-site">credits / about this site</a>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
