# Bolt Login Wallpapers

Show a little [Unsplash][1] goodness on your login screen in [Bolt CMS][2].

# Setup

Bear with me! This extension hasn't really been tested all that much. This was initially developed as a bundle, so I'm not sure how the config stuff works yet.

* Clone the extension to your `src/` directory.
* Update your site root `.bolt.yml` or `composer.json` to reference the `loginScreenExtension` bundle. `Bundle\loginScreen\LoginScreenExtension`
* Add some config, for now just by copying `config/config.yml.dist` to `app/config/extensions/loginscreen.bundle.yml`

You should be all set! Good luck!

[1]: https://unsplash.com/
[2]: https://bolt.cm/
