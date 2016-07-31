@extends('layouts.master')

@section('content')
  <article>
    <div class="resume masthead"><h2>R&eacute;sum&eacute;</h2></div>

    <section>
        <div class="solid background">
            <h3><a name="print-version">Print Version</a></h3>
            <p>If you would rather download a concise, printable version of my r&eacute;sum&eacute; you may do so by clicking the button below.</p>
            <div class="centered">
                <a href="/pdf/resume-of-chris-mccluskey.pdf" target="resume-pdf"><button>Download PDF (55KB)</button></a>
            </div>
        </div>
    </section>
    <section>
        <div class="solid background">
            <h3><a name="availability">Availability</a></h3>
            <p>I am currently employed and am not seeking employment. I am available for off-hours consulting on a case by case basis.</p>
        </div>
    </section>
            <h3><a name="skills">Skills</a></h3>
    <section>
        <div class="solid background">
            <h4>Web Development</h4>
            <h5>Programming Languages</h5>
            <ul>
                <li>PHP</li>
                <li>SQL</li>
                <li>Python</li>
                <li>JavaScript</li>
            </ul>
            <h5>Markup, Style, Preprocessors</h5>
            <ul>
                <li>HTML</li>
                <li>SVG</li>
                <li>CSS / LESS / SASS</li>
                <li>CoffeeScript</li>
            </ul>
            <h5>Frameworks & Libraries</h5>
            <ul>
                <li>Angular</li>
                <li>jQuery</li>
                <li>Celery</li>
                <li>Kohana</li>
                <li>CodeIgniter</li>
                <li>Laravel</li>
                <li>Django</li>
                <li>Flask</li>
                <li>Bottle</li>
                <li>D3.js</li>
                <li>SQLAlchemy</li>
            </ul>
            <h5>Version Control</h5>
            <ul>
                <li>Git</li>
                <li>Mercurial</li>
                <li>Subversion</li>
            </ul>
        </div>
        <div class="solid background">
            <h4>DevOps</h4>
            <h5>Continuous Integration & Build Automation</h5>
            <ul>
                <li>Jenkins</li>
                <li>Gulp</li>
                <li>Grunt</li>
            </ul>
            <h5>Configuration Management</h5>
            <ul>
                <li>Salt Stack</li>
            </ul>
            <h5>Virtualization & Containerization</h5>
            <ul>
                <li>VirtualBox</li>
                <li>Vagrant</li>
                <li>Docker</li>
            </ul>
            <h5>PaaS / IaaS / CaaS</h5>
            <ul>
                <li>Heroku</li>
                <li>Docker Cloud</li>
                <li>Google Cloud Engine</li>
                <li>Amazon Web Services</li>
            </ul>
            <h5>Web Servers & Proxies</h5>
            <ul>
                <li>NGINX</li>
                <li>Apache</li>
                <li>HAProxy</li>
            </ul>
        </div>
        <div class="solid background">
            <h4>IT Operations</h4>
            <h5>Server Administration</h5>
            <ul>
                <li>Ubuntu</li>
                <li>Debian</li>
                <li>CentOS</li>
                <li>FreeBSD</li>
                <li>CoreOS</li>
            </ul>
            <h5>Voice over IP / Telephony</h5>
            <ul>
                <li>Asterisk</li>
            </ul>
            <h5>Network Administration</h5>
            <ul>
                <li>pfSense</li>
                <li>OpenVPN</li>
            </ul>
            <h5>Workstation Administration</h5>
            <ul>
                <li>Mac OS X</li>
                <li>Windows '95 - 8</li>
            </ul>
        </div>
    </section>

    <h3><a name="employment">Employment</a></h3>

    <section>
        <div class="solid background">
            <div class="employer">
                <h4>Digital Trends</h4>
                <h5>SR. WEB DEVELOPER</h5>
                <h6>2016 - Present</h6>
            </div>

            <div class="employer">
                <h4>Ethology</h4>
                <h5>DIRECTOR OF TECHNOLOGY</h5>
                <h5>DIRECTOR OF INTERNAL APPLICATIONS</h5>
                <h6>2011 - 2016</h6>
                <ul>
                    <li>Rebuilt python-based reporting backend and IP-rotating web proxy to include multi-processing rate limiting. Refactored later to distribute work over multiple machines.</li>
                    <li>Built content analysis tool with site crawling / archival, version controlled CMS, project management, NLP-based content identification and browser automation.</li>
                    <li>Moved hosted infrastructure to SaltStack configuration management, built cross-platform team development environment to match production using Vagrant and VirtualBox, maintained entire linux production stack for all applications, and moved to Jenkins-based continuous integration workflow. </li>
                </ul>
            </div>

            <div class="employer">
                <h4>EngineWorks</h4>
                <h5>DIRECTOR OF TECHNOLOGY</h5>
                <h6>2005 - 2011</h6>
                <ul>
                    <li>Hired as first employee, built IT infrastructure, handled all tech support / Linux system administration and internal application development. EngineWorks was acquired by Tallwave in 2011 to become “Ethology”.</li>
                    <li>Built web analytics and tracking suite / customer portal “EngineRoom”, maintained on BSD server / LAMP stack.</li>
                    <li>Wrote search engine scraper with custom IP-rotating proxy and reporting system.</li>
                </ul>
            </div>

            <div class="employer">
                <h4>My Little Salesman</h4>
                <h5>COMPUTER PROGRAMMER</h5>
                <h6>2004 - 2005</h6>
                <ul>
                    <li>Contributed code on a small team maintaining an online auctioneering web application “VIHN.net” for heavy equipment buyers. </li>
                    <li>Refactored back end to close bug that reduced page load from 3-5 minutes to under a second. Helped port classic ASP code from VBScript to ASP.Net / C#.</li>
                </ul>
            </div>

            <div class="employer">
                <h4>Marketing By Mail</h4>
                <h5>MANAGER OF TECHNICAL WEB OPERATIONS</h5>
                <h6>2003 - 2004</h6>
                <ul>
                    <li>Built HTML and Flash-based WYSIWYG postcard designer web application that interfaced with a digital printing press and accepted credit cards. </li>
                    <li>Deployed and managed the Linux production environment for the system. Implemented secure firewall, off-site backups, managed mail, and DNS.</li>
                </ul>
            </div>

            <div class="employer">
                <h4>Modulus</h4>
                <h5>WEB APPLICATIONS ENGINEER</h5>
                <h6>2002 - 2003</h6>
                <ul>
                    <li>Built, deployed and managed web application for Java Server Pages in a Tomcat and Linux environment. </li>
                </ul>
            </div>

            <div class="employer">
                <h4>Net Solutions</h4>
                <h5>WEB APPLICATIONS ENGINEER</h5>
                <h6>2001 - 2002</h6>
                <ul>
                    <li>Built CMS system with Custom JavaScript WYSIWYG Editor. Authored FTP client as HTML embedded ActiveX control for large file uploads. Wrote PHP-based PDF generator and web-based calendar / scheduling system. </li>
                </ul>
            </div>
        </div>
    </section>
    <h3><a name="employment">Employment</a></h3>
    <section>
        <div class="solid background">
            <h4>Lane Community College</h4>
            <h5>AAS Computer Programming</h5>
            <h6>2004</h6>
        </div>
    </section>
  </article>
@stop
