<?php
/**
 * 加载器
 * @Author: geekwho
 * @Date:   2018-09-20 01:42:18
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-05 01:14:23
 */
try {
    /**
     * Register the autoloader of composer.
     */
    $vendorLoader = dirname(__DIR__) . '/vendor/autoload.php';
    if (is_file($vendorLoader)) {
        $loader = require_once $vendorLoader;
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}
