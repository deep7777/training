<?php
$headers = array(
  'User-Agent: Drupal (+http://drupal.org/)',
);
$request = curl_init('http://news.google.com/news?pz=1&hl=ar&q=سوريا&cf=all&output=rss');
curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
curl_setopt($request, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($request);

header('Content-Type: application/rss+xml; charset=utf-8');
print $data;
?>