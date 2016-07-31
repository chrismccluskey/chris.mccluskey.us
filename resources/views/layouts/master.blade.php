<html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

      <title>{{ $title }}Chris McCluskey - Full Stack Web Developer</title>
      <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="/css/main.css" />
      @include('common.google-analytics')
  </head>
  <body>
    <a name="top"></a>
    <div id="container">
        <header>
            <div class="menu container">
                <div class="page title">
                    <h1><a href="/">Chris McCluskey</a></h1>
                    <span>Full Stack Web Developer</span>
                </div>
                <div class="menu link">
                    <a id="menu-button">
                        <span id="menu-button-label">MENU</span>
                        <img src="/svg/logo.svg" alt="[Logo]" />
                    </a>
                </div>
            </div>
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
        </header>


        <main>
            @yield('content')
        </main>

        <footer>
            <div>
                <img src="/svg/logo.svg" alt="[Logo]" width="144px" height="128px" />
            </div>
            <div class="social icons">
                <a href="http://linkedin.com/in/ternetgeek" target="linkedin-profile"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="http://github.com/chrismccluskey" target="github-profile"><i class="fa fa-github" aria-hidden="true"></i></a>
                <a href="http://stackoverflow.com/cv/chris-mccluskey" target="stack-overflow-profile"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                <a href="http://angel.co/chris-mccluskey-us" target="angelist-profile"><i class="fa fa-angellist" aria-hidden="true"></i></a>
                <a href="skype:chris.mccluskey.us?chat&topic=website"><i class="fa fa-skype" aria-hidden="true"></i></a>
                <a href="http://soundcloud.com/subprocess" target="soundcloud-profile"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>
                <a href="http://mixcloud.com/subprocess" target="mixcloud-profile"><i class="fa fa-mixcloud" aria-hidden="true"></i></a>
            </div>
            <div>
                <a href="/about/this-site">credits / about this site</a>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
