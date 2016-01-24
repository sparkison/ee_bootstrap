# ee_bootstrap
ExpressionEngine starter project
---

ee_bootstrap is an ExpressionEngine starter project based on HTML5 Boilerplate, gulp, Bower, and Bootstrap Sass to help make your ExpressionEngine builds more productive.

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| Node.js 0.12.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

For more installation notes, refer to the [Install gulp and Bower](#install-gulp-and-bower) section in this document.

## Features

* [gulp](http://gulpjs.com/) build script that compiles both Sass and Less, checks for JavaScript errors, optimizes images, and concatenates and minifies files
* [BrowserSync](http://www.browsersync.io/) for keeping multiple browsers and devices synchronized while testing, along with injecting updated CSS and JS into your browser while you're developing
* [Bower](http://bower.io/) for front-end package management
* [asset-builder](https://github.com/austinpray/asset-builder) for the JSON file based asset pipeline
* [Bootstrap](http://getbootstrap.com/)

## Installation

There are many ways to do this, two of which we will cover here.

### via Command-line

`cd` into your projects root directory and issue `git clone https://github.com/sparkison/ee_bootstrap.git`. Done!

### via Download

Simply use the **Download ZIP** button at the top of this repo to download the source and copy into your projects root.

## Setup

Download your copy of [ExpressionEngine](ellislab.com/expressionengine) and copy the contents of the **images** and **themes** folders into the **app** directory. Next, copy the **system/ee** folder into **system**. Finally, copy the contents of the **system/user** folder into **system/user** (making sure **not to overwrite the config file** as it contains bootstrapping to allow for deployment across multiple environments).

### Install gulp and Bower

Build requirements: [node.js](http://nodejs.org/download/). We recommend you update to the latest version of npm: `npm install -g npm@latest`.

From the command line:

1. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
2. Navigate to the **app** directory, then run `npm install`
3. Run `bower install`

You now have all the necessary dependencies to run the build process.

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

### Using BrowserSync

To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `assets/manifest.json` to reflect your local development hostname.

For example, if your local development URL is `http://myEEproject.dev` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://myEEproject.dev"
  }
...
```
If your local development URL looks like `http://localhost:8888/myEEproject/` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://localhost:8888/myEEproject/"
  }
...
```

## Contributing

Contributions are welcome from everyone!
