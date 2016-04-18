@extends('layouts.master')

@section('content')
  <article>
    <h2 class="masthead">Portfolio</h2>
    <h3><a name="top">Categories</a></h3>

    <ul>
        <li><a href="#browser-extensions">Browser Extensions</a></li>
        <li><a href="#machine-learning">Machine Learning</a></li>
        <li><a href="#site-analysis-and-reporting">Site Analysis & Reporting</a></li>
        <li><a href="#site-content-authoring-and-auditing">Site Content Auditing & Authoring</a></li>
        <li><a href="#team-development-environments">Team Development Environments</a></li>
        <li><a href="#video-websites">Video Websites</a></li>
        <li><a href="#web-analytics-and-client-portals">Web Analytics & Client Portals</a></li>
        <li><a href="#web-crawling">Web Crawling</a></li>
        <li><a href="#web-proxies">Web Proxies</a></li>
        <li><a href="#web-toys-and-experiments">Web Toys & Experiments</a></li>
    </ul>

    <hr />

    <h3><a name="browser-extensions">Browser Extensions</a></h3>
    <div class="card">
        <h4>MESH</h4>
        <img src="http://placehold.it/300x200" />
        <div class="description">
            <p>MESH was a chrome extension which allowed users to selectively block ads from brands / companies they disliked while allowing ads from brands they loved.</p>
        </div>
    </div>
    <a href="#top">Back to Top</a>

    <h3><a name="machine-learning">Machine Learning</a></h3>
    <div>
        <h4>Gumby</h4>
        <img src="http://placehold.it/300x200" />
        <p>Project gumby was a Python-based backend application which used Natural Language Processing techniques to categorize blocks of text automatically.</p>
    </div>
    <a href="#top">Back to Top</a>

    <h3><a name="site-analysis-and-reporting">Site Analysis & Reporting</a></h3>
    <div>
        <h4>Data Reporting Engine</h4>
        <img src="http://placehold.it/300x200" />
        <p>The data reporting engine was responsible for capturing data from a variety of different sources and reporting it to clients, employees and to other external services. The engine was designed to be flexible in order to specifically cater to changing business needs.</p>
    </div>
    <a href="#top">Back to Top</a>

    <h3><a name="site-content-authoring-and-auditing">Site Content Auditing & Authoring</a></h3>
    <div>
        <h4>Content Tool</h4>
        <img src="http://placehold.it/300x200" />
        <p>The Content Tool was designed to assist employees with site planning and content strategy efforts for clients. The tool worked in conjunction with other projects (Gumby and Hogna) to crawl, analyze, catalog, and edit / author site content. The tool also contained versioning, device emulation (with screenshots at different resolutions) and project planning features.</p>
    </div>
    <a href="#top">Back to Top</a>

    <h3><a name="team-development-environments">Team Development Environments</a></h3>
    <div>
        <h4>DevStack</h4>
        <img src="http://placehold.it/300x200" />
        <p>Powered by vagrant and salt stack, DevStack was an internal tool used to mimic our production environment to other developers who were not used to working on their own copy of the code. It came with a web interface that let devs choose technologies needed for each project which were later saved to a JSON file that lived with the source code.</p>
    </div>
    <a href="#top">Back to Top</a>

    <h3><a name="video-websites">Video Websites</a></h3>
    <div>
        <h4><a href="http://www.curativegroove.com">Curative Groove</a></h4>
        <img src="http://placehold.it/300x200" />
        <p>Chalaina is a therapist who wanted to speak directly to her site visitors via an interactive video tour of her private practice.</p>
    </div>
    <a href="#top">Back to Top</a>

    <h3><a name="web-analytics-and-client-portals">Web Analytics & Client Portals</a></h3>
    <div>
        <h4>EngineRoom</h4>
        <img src="http://placehold.it/300x200" />
        <p>Before Google Analytics was released, EngineRoom reported web analytics information to its clients in a simple manner. EngineRoom performed its own tracking and analysis by way of embedded JavaScript and a proxy for paid advertising campaigns. Clients were able to speak directly to account representatives via the web interface.</p>
    </div>
    <a href="#top">Back to Top</a>

    <h3><a name="web-crawling">Web Crawling</a></h3>
    <div>
        <h4>Hogna</h4>
        <img src="http://placehold.it/300x200" />
        <p>A versatile web crawler used for the analysis and tracking of client site content.</p>
    </div>
    <a href="#top">Back to Top</a>

    <h3><a name="web-proxies">Web Proxies</a></h3>
    <div>
        <h4>Naga</h4>
        <img src="http://placehold.it/300x200" />
        <p>An anonymizing HTTP proxy with IP rotating capabilities.</p>
    </div>
    <a href="#top">Back to Top</a>

    <h3><a name="web-toys-and-experiments">Web Toys & Experiments</a></h3>
    <div>
        <h4><a href="http://rainbo.ws">Rainbo.ws</a></h4>
        <img src="http://placehold.it/300x200" />
        <p>I enjoy playing around with new technologies. While playing around with drawing on canvas with JavaScript, I created this little web toy.</p>
    </div>
    <a href="#top">Back to Top</a>
  </article>
@stop
