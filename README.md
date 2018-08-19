# Bolt Login Themer

Looking for a little more splash on your [Bolt][1] login screen? This extension allows you to display an image background from [Unsplash][2], your local repository, or any public URL. You can even use a CSS file to tweak the login page just how you want it.

![Bolt login screen with ocean background](/assets/bolt-login-themer-fullscreen.jpg)

For generic background images, we recommend using the [Unsplash API][3] to easily embed static images or even choose a random image from a [collection][4] or [search term.][5]

## Setup

1. Install extension.
1. Update the `image_url` in the extension config file to set your own background image.
1. Optional: update the `css_url` file path to embed a CSS file on the login screen for hardcore login designs.
1. Enjoy!

## TODO

* Add a settings page with an image uploader and CSS file.
* ADD `phpunit` tests?

## Changelog

* v0.1.0 - Bundle only, very simple login wallpaper via Unsplash.
* v0.2.0 - Switched to Bolt Extension, use image URL or CSS url instead of Unsplash.

## Thanks To

The [Unsplash Source API][3], used for the default background image.

[1]: https://bolt.cm/
[2]: https://unsplash.com/
[3]: https://source.unsplash.com/
[4]: https://source.unsplash.com/collection/574191/1600x900
[5]: https://source.unsplash.com/1600x900/?nature
