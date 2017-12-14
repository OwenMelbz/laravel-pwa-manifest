<?php

namespace OwenMelbz\PwaManifest;

class PwaManifestMeta {

    public function render()
    {
        if ($this->isChromium() || $this->isAndroid()) {
            return implode("\n", [
                '<!-- Web Application Manifest -->',
                '        <link rel="manifest" href="' . route('pwa.manifest') . '">',
                ''
            ]);
        }

        $config = (new PwaManifest)->generate();

        return view('pwa_manifest::meta-manifest')->with($config);
    }

    private function isChromium()
    {
        $ua = request()->server('HTTP_USER_AGENT');

        return preg_match('/(Chrome|CriOS)\//i', $ua)
            && !preg_match('/(Aviator|ChromePlus|coc_|Dragon|Edge|Flock|Iron|Kinza|Maxthon|MxNitro|Nichrome|OPR|Perk|Rockmelt|Seznam|Sleipnir|Spark|UBrowser|Vivaldi|WebExplorer|YaBrowser)/i', $ua);
    }

    private function isAndroid()
    {
        $ua = strtolower(
            request()->server('HTTP_USER_AGENT')
        );

        return str_contains($ua, 'android');
    }
}
