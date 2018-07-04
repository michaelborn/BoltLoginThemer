# Bolt Login Wallpapers

Show a little [Unsplash][1] goodness on your login screen in [Bolt CMS][2].

![Bolt login screen with vibrant purple ocean background](/bolt-login-unsplash-background.jpg)

## Setup

Bear with me! This extension hasn't really been tested all that much. This was initially developed as a bundle, so I'm not sure how the config stuff works yet.

1. Clone the extension to your `src/` directory.
1. Update your site root `.bolt.yml` or `composer.json` to reference the `loginScreenExtension` bundle. `Bundle\loginScreen\LoginScreenExtension`
1. Add some config, for now just by copying `config/config.yml.dist` to `app/config/extensions/loginscreen.bundle.yml`
1. Visit `/bolt/login`. You should see a background image load in from Unsplash.

Thanks! Good luck!

## TODO

* Switch from a `Bundle` to a `SimpleExtension`, whatever the difference is.
* Allow `daily` or `weekly` API endpoints so the images will load much faster. (Cached for a week, ya?)

## Thanks To

The [Unsplash Source API][3]. Obviously, this extension ain't much good without Unsplash behind it.

[1]: https://unsplash.com/
[2]: https://bolt.cm/
[3]: https://source.unsplash.com/
