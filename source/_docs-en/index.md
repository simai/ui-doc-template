---
extends: _core._layouts.documentation
section: content
title: Welcome
description: Welcome
---

# Installation

Jigsaw requires PHP 8.1+ and Composer. Before installing Jigsaw, make sure you have [Composer](https://getcomposer.org/) installed on your machine.

## Installing Jigsaw

You can install Jigsaw globally as a Composer dependency, or on a per-project basis.

### Installing Globally

To install Jigsaw globally on your system, run:

```bash
composer global require tightenco/jigsaw
```

Once installed, the `jigsaw` command will be available globally in your terminal.

### Installing Per-Project

To install Jigsaw as a dependency of a specific project, run the following command in your project directory:

```bash
composer require tightenco/jigsaw
```

This will add Jigsaw to your project's `composer.json` file.

## Creating a New Jigsaw Site

After installing Jigsaw, you can create a new site using the `init` command. In your terminal, run:

```bash
jigsaw init blog
```

This will create a new directory called `blog` with a fresh Jigsaw installation.

## Building and Previewing Your Site

Navigate into your new site’s directory:

```bash
cd blog
```

To build your site, run:

```bash
./vendor/bin/jigsaw build
```

To serve your site locally and preview it in your browser, use:

```bash
./vendor/bin/jigsaw serve
```

By default, your site will be available at [http://localhost:8000](http://localhost:8000).

> **Note:** If you have installed Jigsaw globally, you can use `jigsaw build` and `jigsaw serve` instead of the full path.
## Directory structure

source/
├── _assets/
│     ├── js/
│     │     └── main.js
│     └── sass/
│           └── main.scss
├── _layouts/
│     └── master.blade.php
├── assets/
├── build/
│     ├── js/
│     │     └── main.js
│     ├── sass/
│     │     └── main.css
│     ├── mix-manifest.json
│     └── images/
│           └── jigsaw.png
├── index.blade.php
├── tasks/
├── vendor/
├── bootstrap.php
├── composer.json
├── composer.lock
├── config.php
├── package.json
└── webpack.mix.js

## Next Steps

Now that your site is up and running, check out the rest of the [Jigsaw documentation](https://jigsaw.tighten.com/docs/).

