<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/main.css">
    <link rel="stylesheet" href="./images/logo.png">
    <title>Main </title>
</head>

<body>
    <header class="header">
        <img href="./bankas/main/images/logo.png">
        <h1>Yo|a bank</h1>
        <nav class="navigation">
            <a href="http://localhost/vienaragiai/bankas/bankas/main/">Home</a>
            <a href="http://localhost/vienaragiai/bankas/bankas/main/Create_an_account.php">New account</a>
            <a href="http://localhost/vienaragiai/bankas/bankas/main/add_new.php">Cash in</a>
            <a href="http://localhost/vienaragiai/bankas/bankas/main/Cash_out.php">Cash out</a>
        </nav>
    </header>
    
    <table>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Personal Number</th>
            <th>Account number</th>
            <th>Amount</th>
        </tr>
        <?php
        $json_data = file_get_contents(__DIR__."/data/duomenys.json");
        $duomenys = json_decode($json_data, TRUE);
        if(count($duomenys)!=0){
            foreach($duomenys as $item){
                ?>
<tr>
    <td><?php echo $item['name']?></td>
    <td><?php echo $item['surname']?></td>
    <td><?php echo $item['personalid']?></td>
    <td><?php echo $item['accountid']?></td>
    <td><?php echo $item['amount']?></td>
    <td>
        <select name="action" id="action">
            <option value="">Select action</option> 
            <option value="Delete">Delete</option> 
            <option value="Add">Cash in</option> 
            <option value="cashout">Cash out</option> 
        </select>
        </td>
</tr>

                <?php
            }
        }

        ?>


    </table>
   



</body>
</html>