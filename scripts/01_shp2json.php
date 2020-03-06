<?php
$basePath = dirname(__DIR__);
$jsonPath = $basePath . '/json';
foreach(glob($basePath . '/raw/*/*.shp') AS $shpFile) {
    $p = pathinfo($shpFile);
    exec("/usr/bin/ogr2ogr --config SHAPE_ENCODING Shift_JIS -f GeoJSON {$jsonPath}/{$p['filename']}.json {$shpFile}");
}