<?php

Route::group(['namespace' => 'OwenMelbz\PwaManifest\Http\Controllers'], function () {
    Route::get('pwa-manifest.json', 'PwaManifestController@manifestJson')
        ->name('pwa.manifest');

    Route::get('pwa-icon/{size}/{filename?}', 'PwaManifestController@launcherIcon')
        ->where('size', '(48|96|192)')
        ->where('filename', '(.*)')
        ->name('pwa.icon');
});
