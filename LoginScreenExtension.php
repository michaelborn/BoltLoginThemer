<?php

namespace Bundle\loginScreen;

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
class LoginScreenExtension extends SimpleExtension
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
      position: relative;
    }
    body.login::after {
      background: url("' . $config["image_url"] . '") no-repeat center center /cover;
      content: "";
      
      position: absolute;
      z-index: -1;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
    }  
    </style>';
  }

  /**
   * {@inheritdoc}
   */
  protected function getDefaultConfig() {
    return [
      'image_url'    => 'https://source.unsplash.com/plJyhN8LdWo/1600x900',
      'css_url'    => ''
    ];
  }
}
