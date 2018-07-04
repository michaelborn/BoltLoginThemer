<?php

namespace Bundle\loginScreen;

use Bolt\Extension\SimpleExtension;
use Bolt\Asset\Snippet\Snippet;
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
    $snippet = Snippet::Create()
                ->setCallback([$this, 'printWallpaperSnippet'])
                ->setZone(Zone::BACKEND)
                ->setLocation(Target::AFTER_META);
    return [
      $snippet
    ];
  }

  public function printWallpaperSnippet() {
    return '<style>
    body.login {
      position: relative;
    }
    body.login::after {
      background: url("https://source.unsplash.com/collection/1922729/1200x700") no-repeat center center /cover;
      content: "";
      filter: brightness(105%) saturate(0) blur(5px);
      
      position: absolute;
      z-index: -1;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
    }  
    </style>';
  }
}
