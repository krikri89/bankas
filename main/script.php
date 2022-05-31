<?php 
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    
    if (!file_exists(__DIR__."/data/clientNr.json")){
        file_put_contents(__DIR__."/data/clientNr.json",json_encode(0));
    }
    $client = json_decode(file_get_contents(__DIR__."/data/clientNr.json"), TRUE);
    $client++;
    
    if(!file_exists(__DIR__."/data/duomenys.json")){
        file_put_contents(__DIR__."/data/duomenys.json", json_encode([]));
    }
    $allAccounts = json_decode(file_get_contents(__DIR__."/data/duomenys.json"),TRUE);
    file_put_contents(__DIR__."/data/duomenys.json", json_encode([...$allAccounts, [...$_POST,"ID"=>$client ]  
]));
file_put_contents(__DIR__."/data/clientNr.json", json_encode($client));
  
}
