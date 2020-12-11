<?php

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Active</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background-color: #606060;
        color: #fff;
    }
    td {
       background-color: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>company</th>
            <th>place</th>
            <th>item</th>
            <th>money</th>
            <th>nalcost</th>
            <th>ostatcost</th>
            <th>osencost</th>
            <th>marketcost</th>
            <th>address</th>
        </tr>
        <?php
            $products = mysqli_query($connect, "SELECT * FROM `active`");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product){
            ?>
                <tr>
                    <td><?= $product[0] ?></td>
                    <td><?= $product[1] ?></td>
                    <td><?= $product[2] ?></td>
                    <td><?= $product[10] ?></td>
                    <td>
                        <?php if(!($product[3]==''))
                        {
                            echo $product[3];
                            echo $product[9];
                        }
                        ?>
                    </td>
                    <td>
                        <?php if(!($product[5]==''))
                        {
                            echo $product[5];
                            echo $product[9];
                        }
                        ?>
                    </td>
                    <td>
                        <?php if(!($product[6]==''))
                        {
                            echo $product[6];
                            echo $product[9];
                        }
                        ?>
                    </td>
                    <td>
                        <?php if(!($product[7]==''))
                        {
                            echo $product[7];
                            echo $product[9];
                        }
                        ?>
                    </td>
                    <td>
                        <?php if(!($product[8]==''))
                        {
                            echo $product[8];
                            echo $product[9];
                        }
                        ?>
                    </td>
                    <td><?= $product[4] ?></td>
                    <td><a href="update.php?id=<?= $product[0] ?>">update</a></td>
                    <td><a style="color: black" href="vendor/delete.php?id=<?= $product[0] ?>">delete</a></td>
                </tr>
            <?php
            }
        ?>
    </table>
    <h3>Add new activity</h3>
    <form action="vendor/create.php" method="post">
        <p>company</p>
        <input type="text" name="company">
        <p>place</p>
        <textarea name="place"></textarea>
        <p>item</p>
        <textarea name="item"></textarea>
        <p>money</p>
        <input type="number" name="money">
        <p>address</p>
        <textarea name="address"></textarea>
        <p>nalcost</p>
        <input type="number" name="nalcost">
        <p>ostatcost</p>
        <input type="number" name="ostatcost">
        <p>osencost</p>
        <input type="number" name="osencost">
        <p>marketcost</p>
        <input type="number" name="marketcost">
        <p>value</p>
        <input type="text" name="value"></br></br>
        <button type="submit">add new activity</button>
    </form>
</body>
</html>

