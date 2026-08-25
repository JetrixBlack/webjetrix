<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: public, max-age=300');

// Cache en memoria (persiste entre invocaciones warm)
static $cache = null;
static $cacheTime = 0;

$ttl = 300; // 5 minutos

if ($cache && (time() - $cacheTime) < $ttl) {
    echo json_encode($cache);
    exit;
}

$rates = ['usd' => 0, 'eur' => 0, 'updated' => '', 'source' => ''];

$ch = curl_init('https://www.bcv.org.ve/');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 15,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
]);
$html = curl_exec($ch);


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

    // Fecha
    $dateNode = $xpath->query("//div[contains(@class, 'dinpro')]//span[contains(@class, 'date-display-single')]");
    if ($dateNode->length > 0) {
        $rates['updated'] = trim($dateNode->item(0)->textContent);
    }

    $rates['source'] = 'BCV';
}

if (!$rates['usd']) $rates['usd'] = 60;
if (!$rates['eur']) $rates['eur'] = 65;
if (!$rates['updated']) $rates['updated'] = date('Y-m-d H:i:s');

$cache = $rates;
$cacheTime = time();

echo json_encode($rates);
