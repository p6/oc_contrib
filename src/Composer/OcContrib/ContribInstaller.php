<?php

namespace Composer\OcContrib;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ContribInstaller extends LibraryInstaller {

  /**
   * {@inheritDoc}
   */
  public function getInstallPath(PackageInterface $package) {
    $prefix = substr($package->getPrettyName(), 0, 23);
//    if ('/template-' !== $prefix) {
//      throw new \InvalidArgumentException(
//        'Unable to install template, phpdocumentor templates '
//        .'should always start their package name with '
//        .'"phpdocumentor/template-"'
//      );
//    }

    print_r($package->getPrettyName());die;
    return 'gjsingh/' . substr($package->getPrettyName(), 23);
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType) {
    return 'thissssss';//'oc-contrib-plugin' === $packageType;
  }
}