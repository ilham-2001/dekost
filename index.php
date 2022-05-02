<?php

require("config/db.connect.php");
require("php-query/fetch.db.data.php");

$collections = getalldata("users");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/custom.style.css">
</head>

<body>
    <h1>Hello</h1>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php $row_index = 1; ?>
                <?php foreach ($collections as $data) : ?>
                <tr>
                    <th scope="row"><?php echo $row_index ?></th>
                    <td><?php echo $data["id"] ?></td>
                    <td><?php echo $data["nama"] ?></td>
                    <td><?php echo $data["custodian"] ?></td>
                    <td><?php echo $data["bank"] ?></td>
                    <?php $row_index++; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>