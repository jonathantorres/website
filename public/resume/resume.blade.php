@extends('_layouts.master')

@section('body')
    <div class="row resume">
        <div class="col-md-12">
            <h1>Resume</h1>
            <p class="lead">I enjoy writing great software, clean and maintainable code.</p>
        </div>
    </div>

    <hr>

    <div class="row resume">
        <div class="col-md-12">
            <h1>Skills</h1>
            <p class="skills-lead">I'm a Web Developer with over 7 years of experience, mainly focused on the back-end and PHP in the past 3 years. I enjoy learning new techniques and practices that improves the way I write code. Testing, writing tools for the command line and software design are among my main interests.</p>
            <ul>
                <li>Object Oriented PHP (Laravel, CodeIgniter)</li>
                <li>JavaScript (NodeJS, VueJS, AngularJS)</li>
                <li>SQL, MySQL, Redis, MongoDB and PostgreSQL.</li>
                <li>Unit, integration and acceptance testing. TDD.</li>
                <li>Database and schema design.</li>
                <li>HTML5, CSS3.</li>
                <li>Version control with Git.</li>
                <li>Continuous Integration (TravisCI, Codeship)</li>
                <li>Build tools (Gulp, Grunt)</li>
                <li>Nginx and Apache.</li>
                <li>Ruby, Python and Shell Script.</li>
                <li>Unix, Linux, Mac OS X and Windows.</li>
            </ul>
        </div>
    </div>

    <hr>

    <div class="row resume position">
        <div class="col-md-12">
            <h1>Experience</h1>
            <h4>Nobox</h4>
            <small>Web Developer, May 2011 - Present</small>
            <ul>
                <li>Object Oriented PHP. LEMP and LAMP stack.</li>
                <li>Designed and developed an internal API using analytics and social media API's (Facebook, Twitter, Instagram and Google Analytics).</li>
                <li>Developed real time workers to track hashtags on social media for several campaigns.</li>
                <li>Developed an internal tool to build and download npm dependencies with NodeJS and Redis.</li>
                <li>Built client dashboards with analytics, social media, email and campaign performance reports.</li>
                <li>Developed campaign websites for clients like PlayStation, Netflix, Copa Airlines, Volkswagen, Mozilla, Samsung among others.</li>
            </ul>
        </div>
    </div>

    <div class="row resume position">
        <div class="col-md-12">
            <h4>Rubali Professionals Inc.</h4>
            <small>Web Developer, Oct 2009 - May 2010</small>
            <ul>
                <li>Built web-based custom dashboard and client administration tool with PHP and MySQL.</li>
                <li>Re-designed and developed the company website.</li>
                <li>Designed and developed various websites for company clients.</li>
                <li>Flash animated banners, ads and rich media.</li>
            </ul>
        </div>
    </div>

    <div class="row resume position">
        <div class="col-md-12">
            <h4>Freelance Web Developer</h4>
            <small>Jul 2008 - April 2011</small>
            <ul>
                <li>Converting PSD's into hand-coded HTML, CSS and JavaScript with jQuery.</li>
                <li>Back-end dashboards in PHP and MySQL.</li>
                <li>Interactive websites made in Flash.</li>
                <li>Worked on several projects with Joomla!</li>
            </ul>
        </div>
    </div>

    <hr>

    <div class="row resume">
        <div class="col-md-12">
            <h1>Education</h1>
            <h4>Atlantic College</h4>
            <small>Bachelor's Degree on Animation, Sep 2003 - May 2008</small>
            <ul>
                <li>Mainly focused on animation, multimedia and Flash Development.</li>
                <li>Gained my first experience on coding websites by hand with HTML and CSS.</li>
            </ul>
        </div>
    </div>
@endsection
