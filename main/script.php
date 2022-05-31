<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!file_exists(__DIR__ . "/data/clientNr.json")) {
        file_put_contents(__DIR__ . "/data/clientNr.json", json_encode(0));
    }
    $client = json_decode(file_get_contents(__DIR__ . "/data/clientNr.json"), TRUE);
    $client++;
    if (!file_exists((__DIR__ . "/data/accountNr.json"))) {
        file_put_contents(__DIR__ . "/data/accountNr.json", json_encode(rand(1, 3)));
    }
    $accountNr = json_decode(file_get_contents(__DIR__ . "/data/accountNr.json"), TRUE);
    $accountNr++;

    if (!file_exists(__DIR__ . "/data/duomenys.json")) {
        file_put_contents(__DIR__ . "/data/duomenys.json", json_encode([]));
    }
    $allAccounts = json_decode(file_get_contents(__DIR__ . "/data/duomenys.json"), TRUE);
    $amount = 0;
    file_put_contents(__DIR__ . "/data/duomenys.json", json_encode([
        ...$allAccounts, [...$_POST, "ID" => $client, "accountid" => $accountNr, "amount" => $amount]

    ]));
    file_put_contents(__DIR__ . "/data/clientNr.json", json_encode($client));
    file_put_contents(__DIR__ . "/data/accountNr.json", json_encode($accountNr));
}
