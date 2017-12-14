<?php

namespace OwenMelbz\PwaManifest;

class PwaManifest {

    public function generate()
    {
        $basicManifest =  [
            'name' => config('pwa_manifest.name'),
            'short_name' => config('pwa_manifest.short_name'),
            'start_url' => asset(config('pwa_manifest.start_url')),
            'display' => config('pwa_manifest.display'),
            'theme_color' => config('pwa_manifest.theme_color'),
            'background_color' => config('pwa_manifest.background_color'),
        ];

        if (config('pwa_manifest.icon')) {
            $basicManifest['icons'] = $this->generateIcons();
        } else {
            $basicManifest['icons'] = config('pwa_manifest.icons');
        }

        return $basicManifest;
    }

    private function generateIcons()
    {
        $fileName = ltrim(config('pwa_manifest.icon'), '/');

        return [

            [
                'src' => asset('/pwa-icon/48/' . $fileName),
                'type' => 'image/png',
                'sizes' => '48x48'
            ],

            [
                'src' => asset('/pwa-icon/96/' . $fileName),
                'type' => 'image/png',
                'sizes' => '96x96'
            ],

            [
                'src' => asset('/pwa-icon/192/' . $fileName),
                'type' => 'image/png',
                'sizes' => '192x192'
            ],

        ];
    }

}
