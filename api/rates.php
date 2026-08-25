<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache');

$cacheFile = __DIR__ . '/rates_cache.json';
$cacheTime = 300;

if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {
    echo file_get_contents($cacheFile);
    exit;
}

$rates = ['usd' => 0, 'eur' => 0, 'updated' => '', 'source' => ''];

$ch = curl_init('https://www.bcv.org.ve/');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
]);
$html = curl_exec($ch);
curl_close($ch);

if ($html) {
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // USD
    $usdNode = $xpath->query("//div[@id='dolar']//strong[contains(@class, 'strong-tb')]");
    if ($usdNode->length > 0) {
        $val = trim($usdNode->item(0)->textContent);
        $val = str_replace(',', '.', $val);
        $rates['usd'] = (float)$val;
    }

    // EUR
    $eurNode = $xpath->query("//div[@id='euro']//strong[contains(@class, 'strong-tb')]");
    if ($eurNode->length > 0) {
        $val = trim($eurNode->item(0)->textContent);
        $val = str_replace(',', '.', $val);
        $rates['eur'] = (float)$val;
    }

    // Date
    $dateNode = $xpath->query("//div[contains(@class, 'dinpro')]//span[contains(@class, 'date-display-single')]");
    if ($dateNode->length > 0) {
        $rates['updated'] = trim($dateNode->item(0)->textContent);
    }

    $rates['source'] = 'BCV';
}

if (!$rates['usd']) $rates['usd'] = 60;
if (!$rates['eur']) $rates['eur'] = 65;
if (!$rates['updated']) $rates['updated'] = date('Y-m-d H:i:s');

file_put_contents($cacheFile, json_encode($rates));
echo json_encode($rates);
