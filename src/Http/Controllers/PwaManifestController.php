<?php

namespace OwenMelbz\PwaManifest\Http\Controllers;

use Exception;
use OwenMelbz\PwaManifest\PwaManifest;
use OwenMelbz\PwaManifest\PwaLauncherIcon;
use Illuminate\Routing\Controller;

class PwaManifestController extends Controller {

    public function manifestJson()
    {
        $output = (new PwaManifest)->generate();

        return response()->json($output);
    }

    public function launcherIcon($size, $filename = null)
    {
        if ($filename === null) {
            throw new Exception('Image path not found');
        }

        return (new PwaLauncherIcon)->generate($filename, $size);
    }
}
