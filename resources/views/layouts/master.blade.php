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
        <div id="header">
            <div class="centered container">
                <div>
                    <h1><a href="/">Chris McCluskey</a></h1>
                    <span>Full Stack Web Developer</span>
                </div>
                <div>
                    <img src="/svg/logo.svg" alt="[Logo]" />
                </div>
            </div>
        </div>

        <div id="content">
            @yield('content')
        </div>

        <div id="footer">

            <ul class="menu">
                <li class="portfolio item">
                  <span>
                    <a class="button" href="/portfolio">Portfolio</a>
                  </span>
                </li>
                <li class="resume item"><a class="button" href="/resume">Resume</a></li>
                <li class="about item"><a class="button" href="/about">About Me</a></li>
                <li class="contact item"><a class="button" href="/contact">Contact Me</a></li>
            </ul>

            <div>
                <img src="/svg/logo.svg" alt="[Logo]" width="144px" height="128px" />
            </div>
            <div>
            <a href="">about this site</a>
            </div>
        </div>
    </div>
  </body>
</html>
