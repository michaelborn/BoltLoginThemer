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
    $config = $this->getConfig();

    return '<style>
    body.login {
      position: relative;
    }
    body.login::after {
      background: url("https://source.unsplash.com/' . $config["type"] . '/' . $config["parameter"] . '/' . $config["size"] . '") no-repeat center center /cover;
      content: "";
      filter: brightness(' . $config["brightness"] . '%) saturate(' . $config["saturate"] . ') blur(' . $config["blur"] . 'px);
      
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
      'type' => 'collection',
      'parameter'     => '1922729',
      'size'          => '1200x700',
      'blur'          => 5,
      'saturate'      => 0,
      'brightness'    => '105'
    ];
  }
}
