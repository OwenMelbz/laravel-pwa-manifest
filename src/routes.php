<?php

Route::get('pwa-manifest.json', 'OwenMelbz\PwaManifest\Http\Controllers\PwaManifestController@manifestJson');
Route::get('pwa-icon/{size}/{filename}', 'OwenMelbz\PwaManifest\Http\Controllers\PwaManifestController@launcherIcon');
