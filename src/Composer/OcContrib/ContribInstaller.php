<?php

namespace Composer\OcContrib;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ContribInstaller extends LibraryInstaller {

  /**
   * {@inheritDoc}
   */
  public function getInstallPath(PackageInterface $package) {
    return 'gjsingh';
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType) {
    return 'some-type';
//    return 'project' === $packageType;
  }
}