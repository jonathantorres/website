<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="Jonathan Torres">
        <meta name="description" content="Personal website of Jonathan Torres. A Web Developer.">
        <link rel="stylesheet" href="/css/main.css">

        <title>Jonathan Torres | Web Developer</title>
    </head>
    <body>
        <?php require_once('partials/nav.php'); ?>

        <div class="container">
            <div class="row main-intro">
                <div class="col-md-3">
                    <img class="media-object img-circle mee" src="/img/mee.jpg" alt="...">
                </div>
                <div class="col-md-9">
                    <h1>My name is <span class="red">Jonathan Torres.</span></h1>
                    <h1>I am a <span class="red">Web Developer.</span></h1>
                    <p class="lead">I enjoy writing great software, clean and maintainable code.</p>
                </div>
            </div>
            <hr>
            <div class="row ">
                <div class="col-md-6 projects">
                    <h1>Projects</h1>
                    <ul class="list-unstyled posts-list">
                        <li>
                            <a href="https://github.com/jonathantorres/construct" target="_blank"><h3>Construct</h3></a>
                            <p>PHP project/micro-package generator.</p>
                        </li>
                        <li>
                            <a href="https://github.com/jonathantorres/medium-sdk-php" target="_blank"><h3>Medium SDK for PHP</h3></a>
                            <p>Open source SDK for integrating Medium's OAuth2 API into your PHP application.</p>
                        </li>
                        <li>
                            <a href="https://github.com/Nobox/Lazy-Strings" target="_blank"><h3>Lazy Strings</h3></a>
                            <p>Laravel 5 package that creates localized strings from a Google Docs Spreadsheet.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="row about">
                        <div class="col-md-12">
                            <h1>Who I am?</h1>
                            <p>I was born and raised in Puerto Rico but I'm currently living in sunny Miami, FL. I enjoy playing basketball, running, sci-fi movies and video games.</p>
                        </div>
                    </div>
                    <div class="row contact">
                        <div class="col-md-12">
                            <h1>Get in touch</h1>
                            <p>Drop me a line at <a href="mailto:jonathantorres41@gmail.com">jonathantorres41@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <?php require_once('partials/footer.php'); ?>
        </div>

        <?php require_once('partials/scripts.php'); ?>
    </body>
</html>
