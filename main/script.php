<?php 
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    print_r ($_POST);
        if(!file_exists(__DIR__."/data/duomenys.json")){
            file_put_contents(__DIR__."/data/duomenys.json", json_encode([]));
        }
        $allAccounts = json_decode(file_get_contents(__DIR__."/data/duomenys.json"),TRUE);
  file_put_contents(__DIR__."/data/duomenys.json", json_encode([...$allAccounts, $_POST

  ]));
  
}
