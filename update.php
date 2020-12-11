<?php
    require_once 'config/connect.php';


    $activity_id = $_GET['id'];
    $activity = mysqli_query($connect, "SELECT * FROM `active` WHERE `id` = '$activity_id'");
    $activity = mysqli_fetch_assoc($activity);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>update</title>
</head>
<body>
    <h3>Update activity</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $activity['id']?>">
        <p>company</p>
        <input type="text" name="company" value="<?= $activity['company']?>">
        <p>place</p>
        <textarea name="place" ><?= $activity['place']?></textarea>
        <p>item</p>
        <input type="text" name="item" value="<?= $activity['item']?>">
        <p>money</p>
        <input type="number" name="money" value="<?= $activity['money']?>">
        <p>address</p>
        <textarea name="address"><?= $activity['address']?></textarea>
        <p>nalcost</p>
        <input type="number" name="nalcost" value="<?= $activity['nalcost']?>" >
        <p>ostatcost</p>
        <input type="number" name="ostatcost" value="<?= $activity['ostatcost']?>">
        <p>osencost</p>
        <input type="number" name="osencost" value="<?= $activity['osencost']?>">
        <p>marketcost</p>
        <input type="number" name="marketcost" value=<?= $activity['marketcost']?>>
        <p>value</p>
        <input type="text" name="value" value="<?= $activity['value']?>"></br></br>
        <button type="submit">add new activity</button>
    </form>
</body>
</html>