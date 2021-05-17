<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>sparksbank</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

<style>
 body {
            margin: 0px;
            padding: 0%;
        }
        
        nav {
            width: 100%;
            height: 50px;
            background-color: black;
            line-height: 50px;
            opacity: 0.7;
        }
        
        nav ul {
            float: right;
            margin-right: 10px;
        }
        
        nav ul li {
            list-style-type: none;
            display: inline-block;
            transition: 0.7s all;
        }
        
        nav ul li:hover {
            background-color: rgb(134, 173, 233);
        }
        
        nav ul li a {
            text-decoration: none;
            color: #fff;
            padding: 30px;
            font-size: 16px;
        }
        

        .tablediv {
            float: center;
            padding: 8px;
            margin: 5px;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
            overflow-x: auto;
        }
        
        table {
            font-family: 'Trebuchet MS', sans-serif;
            font-weight: bold;
            padding: 5px;
            margin: 1px;
            background: linear-gradient( rgba(50, 50, 50, 0.1), rgba(250, 250, 250, 0.5));
            width: 100%;
            border: 1px solid white;
            border-collapse: collapse;
        }
        
        th {
            padding: 10px 10px;
            text-align: center;
            font-weight: 500;
            font-size: 20px;
            color: blue;
            text-transform: uppercase;
            border-bottom: solid black;
        }
        
        td {
            padding: 8px;
            text-align: left;
            vertical-align: middle;
            font-weight: bold;
            font-size: 18px;
            color: black;
            border-bottom: solid black;
        }
        
        @media screen and (max-width: 800px) {
            body {
                background-size: cover;
                background-position: right;
            }
            div.tablediv {
                width: 100%;
                margin-left: 0%;
                margin-right: 0%;
                padding: 0px;
                margin: 0px;
            }
            table {
                padding: 0px;
                margin: 0px;
            }
        }
</style>
</head>

<body>
<div id="abc">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="money.php">view customers</a></li>
                <li><a href="history.php">view transactions</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
</div>
<div class="tablediv">
        <br><br>
        <table>
            <tr>
                <th>S.No.</th>
                <th>Sender</th>
                <th>Recevier</th>
                <th>Amount</th>
                <th>Date & time</th>
            </tr>
        <tbody>
        <?php

include 'connect.php';

$sql ="SELECT * FROM transaction";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr style="color : black;">
            <td class="text-center py-2"><?php echo $rows['sno']; ?></td>
            <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
            <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
            <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
            <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>

        <?php
}

        ?>
        </tbody>
    </table>


</div>

    


    
</body>

</html>
