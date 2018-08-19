<?php

namespace Bolt\Extension\Mborn319\LoginThemer;

use Bolt\Extension\SimpleExtension;
use Bolt\Asset\Snippet\Snippet;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;
use Bolt\Asset\Target;

/**
 * An extremely basic (thus far) login wallpaper extension.
 *
 * Spice up your /bolt/login screen by pulling images from Unsplash
 * and displaying them as the login background.
 *
 */
class LoginThemerExtension extends SimpleExtension
{
  /**
   * {@inheritdoc}
   */
  protected function registerAssets() {
    $config = $this->getConfig();

    if ( $config["css_url"] ) {
      $asset = Stylesheet::Create()
                  ->setPath($config["css_url"])
                  ->setZone(Zone::BACKEND)
                  ->setLocation(Target::AFTER_META);
    } else {
      $asset = Snippet::Create()
                  ->setCallback([$this, 'printWallpaperSnippet'])
                  ->setZone(Zone::BACKEND)
                  ->setLocation(Target::AFTER_META);

    }
    return [ $asset ];
  }

  public function printWallpaperSnippet() {
    $config = $this->getConfig();

    return '<style>
    body.login {
      background: url("' . $config["image_url"] . '") no-repeat center center /cover;
    }
    </style>';
  }

  /**
   * {@inheritdoc}
   */
  protected function getDefaultConfig() {
    return [
      'image_url'  => 'https://source.unsplash.com/plJyhN8LdWo/1600x900',
      'css_url'    => ''
    ];
  }
}
