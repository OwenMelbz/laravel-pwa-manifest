<?php

namespace OwenMelbz\PwaManifest;

use Image;

class PwaLauncherIcon {

    public function generate($filename, $size)
    {
        return Image::cache(function ($image) use ($filename, $size) {
            $image->make($filename)
                ->resize($size, $size)
                ->sharpen(5);
        }, 1440, true)->response('png');
    }

}
