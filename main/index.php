<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/main.css">
    <!-- <link rel="stylesheet" href="./images"> -->
    <title>Main </title>
</head>

<body>
    <header class="header">
        <!-- <img href="./bankas"> -->
        <h1>Yo|a bank</h1>
        <nav class="navigation">
            <a href="http://localhost/vienaragiai/bankas/bankas/main/">Home</a>
            <a href="http://localhost/vienaragiai/bankas/bankas/main/Create_an_account.php">New account</a>
        </nav>
    </header>

    <table class="table">
        <tr>
            <th>Surname</th>
            <th>Name</th>
            <th>Client number</th>
            <th>Personal Number</th>
            <th>Account Number</th>
            <th>Amount</th>
            <th>Delete</th>
            <th>Add </th>
            <th>Take out</th>
        </tr>
        <?php
        $json_data = file_get_contents(__DIR__ . "/data/duomenys.json");
        $duomenys = json_decode($json_data, TRUE);
        if (count($duomenys) != 0) {
            foreach ($duomenys as $item) {
        ?>
                <tr>
                    <td><?php echo $item['surname'] ?></td>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['ID'] ?></td>
                    <td><?php echo $item['personalid'] ?></td>
                    <td>LT12 1000 0111 0100 <?php echo $item['accountid'] ?></td>
                    <td><?php echo $item['amount'] ?> $</td>
                    <td><button id="delete">Delete</button></td>
                    <td><a href="http://localhost/vienaragiai/bankas/bankas/main/add_new.php">Cash in</a></td>
                    <td><a href="http://localhost/vienaragiai/bankas/bankas/main/Cash_out.php">Cash out</a></td>
                </tr>

        <?php

            }
        }


        ?>


    </table>




</body>

</html>