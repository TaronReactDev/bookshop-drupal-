<?php

declare(strict_types = 1);

namespace Drupal\views_slideshow_cycle\Commands;

use Drush\Commands\DrushCommands;

/**
 * Drush commands for Views Slideshow Cycle.
 */
class ViewsSlideshowCycleCommands extends DrushCommands {

  /**
   * Download and install the jQuery Cycle library.
   *
   * @command views:slideshow:cycle
   * @aliases dl-cycle,views-slideshow-cycle-cycle
   */
  public function downloadCycle() {
    $this->installLibrary(
      'jQuery Cycle',
      'libraries/jquery.cycle',
      'jquery.cycle.all.js',
      'https://raw.githubusercontent.com/malsup/cycle/3.0.3/jquery.cycle.all.js'
    );
  }

  /**
   * Download and install the JSON2 library.
   *
   * @command views:slideshow:json2
   * @aliases dl-json2,views-slideshow-cycle-json2
   */
  public function downloadJson2() {
    $this->installLibrary(
      'JSON2',
      'libraries/json2',
      'json2.js',
      'https://raw.githubusercontent.com/douglascrockford/JSON-js/master/json2.js'
    );
  }

  /**
   * Download and install the jquery.hoverIntent library.
   *
   * @command views:slideshow:hoverintent
   * @aliases dl-hoverintent,views-slideshow-cycle-hoverintent
   */
  public function downloadHoverIntent() {
    $this->installLibrary(
      'jQuery HoverIntent',
      'libraries/jquery.hover-intent',
      'jquery.hoverIntent.js',
      'https://raw.githubusercontent.com/briancherne/jquery-hoverIntent/master/jquery.hoverIntent.js'
    );
  }

  /**
   * Download and install the jQuery.pause library.
   *
   * @command views:slideshow:pause
   * @aliases dl-pause,views-slideshow-cycle-pause
   */
  public function downloadPause() {
    $this->installLibrary(
      'jQuery Pause',
      'libraries/jquery.pause',
      'jquery.pause.js',
      'https://raw.githubusercontent.com/tobia/Pause/master/jquery.pause.js'
    );
  }

  /**
   * Download and install the jQuery Cycle.
   *
   * Download and install JQuery hoverIntent, JSON2 and Pause libraries.
   *
   * @command views:slideshow:lib
   * @aliases dl-cycle-lib,views-slideshow-cycle-lib
   */
  public function downloadLib() {
    $this->downloadCycle();
    $this->downloadHoverIntent();
    $this->downloadJson2();
    $this->downloadPause();
  }

  /**
   * Helper function to download a library in the given directory.
   *
   * @param string $name
   *   The user friendly name of the download.
   * @param string $path
   *   The directory to download to.
   * @param string $filename
   *   The filename to expect.
   * @param string $url
   *   The url to download the file from.
   */
  protected function installLibrary(string $name, string $path, string $filename, string $url): void {
    // Create the path if it does not exist.
    if (!is_dir($path)) {
      drush_op('mkdir', $path, 0755, TRUE);
      $this->logger()->info(dt('Directory @path was created', ['@path' => $path]));
    }

    // Be sure we can write in the directory.
    $perms = substr(sprintf('%o', fileperms($path)), -4);
    if ($perms !== '0755') {
      $this->processManager()->process(['chmod', 755, $path])->start();
    }
    else {
      $perms = NULL;
    }

    $dir = getcwd();

    // Download the JavaScript file.
    if (is_file($path . '/' . $filename)) {
      $this->logger()->notice(dt('@name appears to be already installed.', [
        '@name' => $name,
      ]));
    }
    $download = $this->processManager()->process(['wget', $url], $path);
    $download->start();
    if ($download->wait() === 0) {
      $this->logger()->success(dt('The latest version of @name has been downloaded to @path', [
        '@name' => $name,
        '@path' => $path,
      ]));
    }
    else {
      $this->logger()->warning(dt('Drush was unable to download the @name library to @path, error: @error', [
        '@name' => $name,
        '@path' => $path,
        '@error' => $download->getErrorOutput(),
      ]));
    }

    chdir($dir);

    // Restore the previous permissions.
    if ($perms) {
      $this->processManager()->process(['chmod', $perms, $path])->start();
    }
  }

}
