<?php

namespace OwenMelbz\PwaManifest;

class PwaManifestMeta {

    public function render()
    {
        if ($this->isChromium()) {
            return '
        <!-- Web Application Manifest -->
        <link rel="manifest" href="' . route('pwa.manifest') . '">
            ';
        }

        return view(
            __DIR__.'/resources/robots.txt'
        );
    }

    private function isChromium()
    {
        $ua = request()->server('HTTP_USER_AGENT');

        return preg_match('/(Chrome|CriOS)\//i', $ua)
            && !preg_match('/(Aviator|ChromePlus|coc_|Dragon|Edge|Flock|Iron|Kinza|Maxthon|MxNitro|Nichrome|OPR|Perk|Rockmelt|Seznam|Sleipnir|Spark|UBrowser|Vivaldi|WebExplorer|YaBrowser)/i', $ua);
    }
}
