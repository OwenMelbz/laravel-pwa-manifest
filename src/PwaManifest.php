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
            foreach (config('pwa_manifest.icons') as $size => $file) {
                $fileInfo = pathinfo($file);

                $basicManifest['icons'][] = [
                    'src' => asset($file),
                    'type' => 'image/' . $fileInfo['extension'],
                    'sizes' => $size
                ];
            }
        }

        return $basicManifest;
    }

    private function generateIcons()
    {
        $fileName = ltrim(config('pwa_manifest.icon'), '/');

        return [

            [
                'src' => route('pwa.icon', [
                    'size' => 48,
                    'filename' => $fileName
                ]),
                'type' => 'image/png',
                'sizes' => '48x48'
            ],

            [
                'src' => route('pwa.icon', [
                    'size' => 192,
                    'filename' => $fileName
                ]),
                'type' => 'image/png',
                'sizes' => '96x96'
            ],

            [
                'src' => route('pwa.icon', [
                    'size' => 192,
                    'filename' => $fileName
                ]),
                'type' => 'image/png',
                'sizes' => '192x192'
            ],

        ];
    }

}
