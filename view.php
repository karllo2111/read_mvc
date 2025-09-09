<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>id</th>
        <th>brand</th>
        <th>size</th>
        <th>price</th>
    </tr>
    <?php while($row = $users->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['brand']; ?></td>
            <td><?php echo $row['size']; ?></td>
            <td><?php echo $row['price']; ?></td>
        </tr>
    <?php } ?>

    </table>
</body>
</html>