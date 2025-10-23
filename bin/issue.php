<?php
require_once __DIR__ . '/../src/Signer.php';
require_once __DIR__ . '/../src/Client.php';
if ($argc < 2) { echo "usage: php bin/issue.php examples/invoice.json\n"; exit(1); }
$payload = json_decode(file_get_contents($argv[1]), true);
$xml = '<Invoice>...</Invoice>'; // build from $payload
$signed = Signer::sign($xml, getenv('CERT_PATH'), getenv('CERT_PASS'));
$client = new Client();
$res = $client->submit($signed);
echo json_encode($res, JSON_PRETTY_PRINT), PHP_EOL;
