<?php 
if(isset($_POST['submit'])){
    $new_data = array(
        "name" => $_POST['name'],
        "surname"=>$_POST['surname'],
        "personalid"=>$_POST['personal ID'],
        "accountid"=>$_POST['accountID'],
        "amount"=>$_POST['amount'],
    );
    if(filesize("duomenys.json") == 0){
        $first_record =array($new_account);
        $data_to_save = $first_record;
    } else {
        $old_records = json_decode(file_get_contents("duomenys.json"));
        $data_to_save = $old_records;
    }
    if(!file_put_contents("duomenys.json", json_encode($data_to_save, JSON_PRETTY_PRINT),LOCK_EX)){
        $error = "Error, please try again";
    } else {
        $success = "New account created";
    }
}