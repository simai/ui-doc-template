---
extends: _core._layouts.documentation
section: content
title: Installation
description: Installation
---

# Installation

Jigsaw requires PHP 8.1+ and Composer. Before installing Jigsaw, make sure you have [Composer](https://getcomposer.org/)
installed on your machine.

## Clone the repository with submodules:

This will copy the project to your local machine and include all core submodules:

```bash
git clone --recurse-submodules git@github.com:simai/ui-doc-template.git
```

```bash
cd <repo>
```

### Initialize submodules (if you didn't use --recurse-submodules)

This command fetches all submodules required by the project:

```bash
git submodule update --init --remote
```

### Install dependencies:

Install all required Node.js and PHP packages for development and building:

```bash
yarn install
```

```bash
composer install
```

## Run in development mode:

Launch the development server and watches for changes to auto-build your docs:

```bash
yarn run watch
```

The project will be rebuilt automatically whenever you modify the source files.

## Directory structure

A brief overview of the main directories and files:

<div class="files">
    <div class="folder">build_env</div>
    <div class="folder folder--open">source
        <div class="folder folder--open">_core
            <div class="folder folder--open">_assets
                <div class="folder">css</div>
                <div class="folder">js</div>
                <div class="folder">fonts</div>
                <div class="folder">img</div>
            </div>
            <div class="folder folder--open">_components
                <div class="file">language.blade.php</div>
                <div class="file">more.blade.php</div>
                <div class="file">right-top-menu.blade.php</div>
                <div class="file">settings.blade.php</div>
            </div>
            <div class="folder folder--open">_layouts
                <div class="file">core.blade.php</div>
                <div class="file">documentation.blade.php</div>
                <div class="file">head.blade.php</div>
                <div class="file">header.blade.php</div>
                <div class="file">logo.blade.php</div>
                <div class="file">main.blade.php</div>
                <div class="file">master.blade.php</div>
            </div>
            <div class="folder folder--open">_nav
                <div class="file">bottom-nav.blade.php</div>
                <div class="file">breadcrumbs.blade.php</div>
                <div class="file">menu.blade.php</div>
                <div class="file">menu-toggle.blade.php</div>
                <div class="file">search-input.blade.php</div>
                <div class="file">side-menu.blade.php</div>
                <div class="file">top-menu.blade.php</div>
            </div>
            <div class="folder folder--open">helpers
                <div class="folder folder--open">CommonMark
                    <div class="file">Attrs.php</div>
                    <div class="file">BaseTag.php</div>
                    <div class="file">CustomTagAdapter.php</div>
                    <div class="file">CustomTagNode.php</div>
                    <div class="file">CustomTagRegistry.php</div>
                    <div class="file">CustomTagRender.php</div>
                    <div class="file">CustomTagExtension.php</div>
                    <div class="file">CustomTagSpec.php</div>
                    <div class="file">TagRegistry.php</div>
                    <div class="file">UniversalBlockParser.php</div>
                    <div class="file">UniversalInlineParser.php</div>
                </div>
                <div class="folder folder--open">CustomTags
                    <div class="file">ExampleTag.php</div>
                </div>
                <div class="folder folder--open">Interface
                    <div class="file">CustomTagInterface.php</div>
                </div>
                <div class="file">Parser.php</div>
                <div class="file">Translate.php</div>
                <div class="file">Configurator.php</div>
            </div>
            <div class="file">.gitignore</div>
            <div class="file">404.blade.php</div>
            <div class="file">bootstrap.php</div>
            <div class="file">collections.php</div>
            <div class="file">composer.json</div>
            <div class="file">config.php</div>
            <div class="file">translate.config.php</div>
            <div class="file">copy-template-configs.js</div>
            <div class="file">eslint.config.js</div>
            <div class="file">favicon.ico</div>
            <div class="file">index.md</div>
            <div class="file">navigation.php</div>
            <div class="file">package.json</div>
            <div class="file">webpack.mix.js</div>
        </div>
        <div class="folder folder--open">_docs-(lang)
            <div class="folder">section-name</div>
            <div class="folder">section-name</div>
            <div class="folder">section-name</div>
            <div class="folder">section-name</div>
            <div class="file">.lang.php</div>
            <div class="file">.settings.php</div>
            <div class="file">index.md</div>
            <div class="file">page.md</div>
        </div>
        <div class="file">index.blade.md</div>
    </div>
    <div class="folder">vendor</div>
    <div class="file">.gitignore</div>
    <div class="file">.gitmodules</div>
    <div class="file">eslint.config.js</div>
    <div class="file">package.json</div>
</div>


