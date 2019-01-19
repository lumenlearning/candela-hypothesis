# Candela Hypothesis

A plugin that enables Hypothesis which is a web annotation tool that allows users to provide commentary, references, and insight on top of news, blogs, scientific articles, books, terms of service, ballot initiatives, legislation and regulations, software code and more.

## Installation

### Composer

1.  From the root Wordpress installation, add the following to `composer.json` (replacing `1.0.0` with desired version):

    ```json
    {
      "repositories": [
        {
          "type": "vcs",
            "url": "https://github.com/lumenlearning/candela-hypothesis"
        }
      ],
      "require": {
        "lumenlearning/candela-hypothesis": "1.0.0"
      }
    }
    ```

1.  Run `composer install` in the terminal

### Manually

1.  Download or clone Candela Hypothesis into your Wordpress multisite plugins directory: `/path/to/wordpress/wp-content/plugins`
1.  Log in to your Wordpress multisite instance and navigate to `Network Admin > Plugins` and activate the Candela Hypothesis plugin
