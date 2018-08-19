# Bolt Login Themer

Looking for a little more splash on your [Bolt][1] login screen? This extension allows you to display an image background from [Unsplash][2], your local repository, or any public URL. You can even use a CSS file to tweak the login page just how you want it.

![Bolt login screen with ocean background](/assets/bolt-login-themer-fullscreen.jpg)

## Setup

1. Install extension.
1. Visit `/bolt/login`. You should see an Unsplash background image.

## Config

## Unsplash Image Backgrounds

By default, LoginThemer uses a single static background image from Unsplash:

```
image_url: https://source.unsplash.com/6ArTTluciuA/1600x900
```

You could use Unsplash to show a [random nature image][5]:

```
image_url: https://source.unsplash.com/featured/1600x900/?nature
```

Or a random image from a [premade collection][4]:

```
https://source.unsplash.com/collection/574191/1600x900
```

See [source.unsplash.com][3] for more Unsplash API tips.

## Local Image as Background

Finally, you may wish to just use your own background image from your Bolt theme:

```
image_url: /public/theme/myTheme/assets/images/login-background.jpg
```

## CSS Stylesheet

LoginThemer lets you use a custom CSS stylesheet for the login page:

```
css_url: /theme/myTheme/css/login-theme.css
```

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
