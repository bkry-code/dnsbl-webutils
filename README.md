dnsbl-webutils
==============

![](http://up.frd.mn/4TzB9.png)

Web based DNSBL (or RBL) utilities:

* __dnsbl-check__: Web based real time check against quite a few DNSBLs

### Requirements

* Web server (Nginx/Apache)
* PHP (tested with 5.5)
* Bower, Grunt, JSHint, JSCS (in case you build from master)

### Installation

##### Stable official release

1. Click on [GitHub releases](https://github.com/frdmn/dnsbl-webutils/releases).
1. Download the latest version.
1. Extract in your document root.
1. Copy and rename the default config to `config.php`:
  `cp config.example.php config.php`

##### Development git master branch

1. Make sure you've installed `node` and `npm`
1. Clone this repository:  
  `https://github.com/frdmn/dnsbl-webutils.git`
1. Open cloned repository:  
  `cd dnsbl-webutils`
1. Install requirements and dependencies:  
  `npm install -g grunt-cli bower jshint jscs`
  `npm install`
1. Download web libraries:  
  `bower install`
1. Compile assets:  
  `grunt dev` or `grunt`

Caution: When using the `dev` argument, Grunt won't minify your JS or CSS, so it's easier to debug. Once you run `grunt` (without the `dev`), the files are minified!

### Version

1.0.0
