<?php
namespace ocContrib\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ContribInstallerPlugin implements PluginInterface {

  /**
   * Register custom installer with Composer.
   */
  public function activate(Composer $composer, IOInterface $io) {
    $installer = new ContribInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}
