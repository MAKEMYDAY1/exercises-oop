<?php

namespace App;

class AppVersion
{
    private static string $version;

    public function __construct($version) {
        self::$version = $version;
    }
    public static function getVersion(): string
    {
        return self::$version;
    }

    public static function updateVersion($newVersion) {
        return self::$version = $newVersion;
    }
}