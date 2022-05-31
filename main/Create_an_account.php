<?php
require("script.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/main.css">

    <title>Document</title>
</head>

<body>
    <header class="header">
        <h1>Yo|a bank</h1>
        <nav class="navigation">
            <a href="http://localhost/vienaragiai/bankas/bankas/main/">Home</a>
            <a href="http://localhost/vienaragiai/bankas/bankas/main/Create_an_account.php">New account</a>
        </nav>
    </header>

    <form class="form" action="" method="POST">
        <label>Name</label>
        <input type="text" name="name">
        <label>Surname</label>
        <input type="text" name="surname">
        <label>Personal number</label>
        <input type="text" name="personalid">
        <label>Account number</label>
        <div>LT12 1000 0111 0100 <?php echo file_get_contents(__DIR__ . "/data/accountNr.json") ?></div>

        <button class="btn" type="submit">Submit</button>
        <p class="error"><?php echo @$error ?></p>
        <p class="success"><?php echo @$success ?></p>
    </form>


</body>

</html>