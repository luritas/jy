<?php
// 1. autoload composer
require 'vendor/autoload.php';

use League\Csv\Reader;

// 2. guzzle http client
$client = new \GuzzleHttp\Client();

// 3. open CSV
//$csv = new \League\Csv\Reader($argv[1]);
$csv = Reader::createFromPath($argv[1]);

foreach ($csv as $csvRow) {
    try {

        // 4. http call
        $httpResponse = $client->options($csvRow[2]);

        // 5. response
        if ($httpResponse->getStatusCode() >= 400) {
            throw new \Exception();
        }
    } catch (\Exception $e) {
        echo $csvRow[1] . PHP_EOL;
    }
}


