---
layout: post
title:  "Why I built construct?"
date:   2015-09-28 19:53:41
---

To give you context, construct is a PHP package that generates a basic PHP project. You can use it as a base template when you are starting to create your PHP project. At the core, it's not tied to any framework (the only dependency is the symfony console component). It creates a base class and a basic test suite with phpunit by default (you can select any other of the supported php testing frameworks) among other things you expect to have. It gives you a foundation on which to create a php package. And that's it, a class and a test suite with a specific directory structure.

## Now, why I did it?
I'm always experimenting and playing with diferent things, since we have tools like composer that you just require some package and it's downloaded and ready to play with. I found myself repeatedly creating a `src` folder, then a basic class, then a test suite, then the `composer.json` file manually and I just decided to automate the whole thing. Even though it only saves me like 5 minutes, but still it's time that I can spend doing something else and not on such a mundane task like creating files and folders. Just write the command, specify some extra options (if you want to) and that's it, a php project template ready for you.

It's been almost 5 months since the first release, feedback has been well received, developers have already contributed to the project and I've learned a ton about working on open source software. I already have been writing down some ideas for the next major release, these are coming up quite nicely.

To my surprise, even before I wrote a single line of code I googled all around to see if something similar was already done. I found almost nothing that would meet my needs. I saw a couple of repos with a basic template and some similar things but they had nothing that I could configure dynamically, some things like:

- A project name
- Main class name
- Test framework to use
- Namespaces etc etc.

Also, I don't know if amongst the PHP community we have a "standard" structure for a php project. But I hope construct gives a good starting point!

Construct is proudly hosted on [GitHub](https://github.com/jonathantorres/construct).
