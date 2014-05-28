<?php
ini_set("memory_limit","100M");

// The XML data file with whitespace such as tabs
$xml_file = "sea_level_rises.kml";
// Load xml data.
$xml = file_get_contents($xml_file);
// Strip whitespace between xml tags
$xml = preg_replace('~\s*(<([^>]*)>[^<]*</\2>|<[^>]*>)\s*~','$1',$xml);
// Convert CDATA into xml nodes.
file_put_contents('trimmed.kml',$xml);
?>


