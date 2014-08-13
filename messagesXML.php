<?php

$rss = new DOMDocument();
$rss->load('http://cbmcpa.com/int/category/news/feed/');

$feed = array();
$z = 0;
foreach ($rss->getElementsByTagName('item') as $node) {
	$item = array ( 
		'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
		'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
		'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
		'cat' => $node->getElementsByTagName('category')->item(0)->nodeValue,
		);
	array_push($feed, $item);
	$z++;
}

//$xmlM=simplexml_load_file("messages.xml");

?>