<?php

namespace OwenMelbz\PwaManifest\Http\Controllers;

use OwenMelbz\PwaManifest\PwaManifest;
use OwenMelbz\PwaManifest\PwaLauncherIcon;
use Illuminate\Routing\Controller;

class PwaManifestController extends Controller {

    public function manifestJson()
    {
        $output = (new PwaManifest)->generate();

        return response()->json($output);
    }

    public function launcherIcon($size, $filename)
    {
        return (new PwaLauncherIcon)->generate();
    }
}
