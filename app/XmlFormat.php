<?php

namespace App;

class XmlFormat implements DataFormat
{
    public function encode($data)
    {
        $xml = new \SimpleXMLElement('<root/>');
        array_walk_recursive($data, function ($value, $key) use ($xml) {
            $xml->addChild($key, $value);
        });
        return $xml->asXML();
    }

    public function decode($data)
    {
        return simplexml_load_string($data);
    }
}