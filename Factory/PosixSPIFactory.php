<?php

namespace GeneralPurposeIO\SPI\Factory;

use GeneralPurposeIO\Contracts\SPI\SPIDriver;

class PosixSPIFactory extends SPIFactory
{
    public int $bits_per_word = 8;
    public function bitsPerByte(int $value): static
    {
        $this->bits_per_word = $value;

        return $this;
    }

    protected function assertReady(): void
    {
        // TODO: Implement assertReady() method.
    }

    public function driver(): SPIDriver
    {
        // TODO: Implement driver() method.
    }
}