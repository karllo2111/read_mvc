<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }  

        table {
            width: 50%;
            border-collapse: collapse;
            margin-left: 330px;
            margin-top: 150px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            position: relative;
            animation:hehe 4s infinite;
        }

        @keyframes hehe {
            0%   {background-color:red; left:0px; top:0px;}
            25%  {background-color:yellow; left:200px; top:0px;}
            50%  {background-color:blue; left:200px; top:200px;}
            75%  {background-color:green; left:0px; top:200px;}
            100% {background-color:red; left:0px; top:0px;}
}
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            animation:hehe 4s infinite;
        }

        tr:hover{
            background-color: #c9c9c9ff;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
        }

        .navbar a {
            margin-left: 20px;
            float: left;
            color: #f2f2f2;
            padding: 20px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            color: green;
        }

    </style>
</head>
<body>
    <div class="navbar">
        <a href="">Home</a>
        <a href="">Contact</a>
        <a href="">Project</a>
        <a href="">Service</a>
    </div>
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