<?php

namespace OwenMelbz\PwaManifest\Http\Controllers;

use OwenMelbz\PwaManifest\PwaManifest;
use Illuminate\Routing\Controller;

class PwaManifestController extends Controller {

    public function txt()
    {
        $output = (new PwaManifest)->generate();

        header('Content-Type: text/plain; charset=utf-8');
        exit($output);
    }
}
