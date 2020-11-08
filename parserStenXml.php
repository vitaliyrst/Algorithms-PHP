<?php

$xml = new DOMDocument();
$xml->encoding = "utf-8";
$xml->xmlVersion = "1.0";
$xml->load('00000-00099.xml');

$result = [];
$weapon = [];

foreach ($xml->getElementsByTagName('item') as $item) {
    $result['id'] = $item->getAttribute('id');
    $result['type'] = $item->getAttribute('type');
    $result['name'] = $item->getAttribute('name');
    foreach ($item->getElementsByTagName('set') as $set) {
        if ($set->hasAttribute('stat')) {
            $result[$set->getAttribute('stat')] = $set->getAttribute('val');
            continue;
        }
        $result[$set->getAttribute('name')] = $set->getAttribute('val');
    }
    foreach ($item->getElementsByTagName('for') as $add) {
        if ($add->hasAttribute('stat')) {
            $result[$add->getAttribute('stat')] = $add->getAttribute('val');
            continue;
        }
    }
    $weapon[] = $result;
}

echo json_encode($weapon);
