<?php

namespace GeneralPurposeIO\SPI\Adapters;

use GeneralPurposeIO\Common\ConfirmPOSIXDependencies;
use GeneralPurposeIO\Contracts\Common\GPIOException;
use GeneralPurposeIO\SPI\SPICommunicationAdapter;

class PosixSPIAdapter extends SPICommunicationAdapter
{
    protected function confirmDependencies(): void
    {
        ConfirmPOSIXDependencies::run('SPI');

        if (!function_exists('spi_open')) {
            throw new GPIOException('The POSIX SPI adapter requires the SPI package. Require it with composer require microscrap/spi');
        }
    }
}