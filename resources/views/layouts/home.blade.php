<html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

      <title>Chris McCluskey - Full Stack Web Developer</title>
      <link rel="stylesheet" type="text/css" href="/css/style.css" />
  </head>
  <body>
    <div id="container">
        <header>
            <div class="centered container">
                <div>
                    <h1><a href="/">Chris McCluskey</a></h1>
                    <span>Full Stack Web Developer</span>
                </div>
                <div>
                    <img src="/svg/logo.svg" alt="[Logo]" />
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <nav>
            <ul>
                <li class="portfolio">
                  <a class="button" href="/portfolio">
                    <button>Portfolio</button>
                  </a>
                </li>
                <li class="resume">
                  <a class="button" href="/resume">
                    <button>Resume</button>
                  </a>
                </li>
                <li class="about">
                  <a class="button" href="/about">
                    <button>About Me</button>
                  </a>
                </li>
                <li class="contact">
                  <a class="button" href="/contact">
                    <button>Contact Me</button>
                  </a>
                </li>
            </ul>
        </nav>

        <footer>

            <div>
                <img src="/svg/logo.svg" alt="[Logo]" width="144px" height="128px" />
            </div>
            <div>
            <a href="">about this site</a>
            </div>
        </footer>
    </div>
  </body>
</html>
