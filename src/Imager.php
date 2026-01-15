<?php

namespace DimansitDev\Imager;

/**
 * Class for image processing
 */
class Imager
{

    public function __construct(
        public        $file,
        public string $imagePathOut = '',
        public string $fileNameOut = ''
    )
    {
        if (!class_exists(\Imagick::class)) {
            throw new \RuntimeException('Imagick class not found');
        }
    }

}