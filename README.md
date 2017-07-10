# Personal Website
Source code for my personal website. Lives here [http://www.jonathantorres.com](http://www.jonathantorres.com) using [Jigsaw](http://jigsaw.tighten.co/).

## Installation
Clone the project
```bash
git clone https://github.com/jonathantorres/jonathantorres.github.io jonathantorres
```

If you haven't, make sure you install Jigsaw globally with composer. Make sure that `~/.composer/vendor/bin` is in your `$PATH`.
```bash
composer global require tightenco/jigsaw
```

Install npm dependencies
```bash
npm install
```

Once all the dependencies are installed, run `gulp watch` which uses browser sync to launch the site and watch for changes. The website should be running locally on `http://localhost:3000`
```bash
gulp watch
```

## Run the Jigsaw server
You can also run the default php server with jigsaw. Make sure that you compile your assets first.
```bash
gulp && jigsaw serve
```

## Using Laravel Valet
If you're using laravel valet, just compile your assets with `gulp` and valet should be running your site on your parked directory under `http://jonathantorres.dev`.
```bash
gulp
```

## Deploying to production
To compile your assets to the production environment just run jigsaw with the environment flag. And serve the compiled `build_production` folder to your web server.
```bash
jigsaw build production
```
