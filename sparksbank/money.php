<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sparksbank</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0px;
            padding: 0%;
        }
        
        nav {
            width: 100%;
            height: 70px;
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
            font-size: 18px;
        }
        
        .tablediv {
            float: center;
            padding: 8px;
            margin: 5px;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
            border: 2px solid white;
        }
        
        table {
            font-family: 'Trebuchet MS', sans-serif;
            font-weight: bold;
            padding: 5px;
            margin: 2px;
            background: linear-gradient( rgba(50, 50, 50, 0.1), rgba(250, 250, 250, 0.5));
            width: 100%;
            border: 1px solid white;
        }
        
        th {
            padding: 10px 10px;
            text-align: centre;
            font-weight: 500;
            font-size: 20px;
            color: blue;
            text-transform: uppercase;
            border-bottom: solid black;
        }
        
        td {
            padding: 8px;
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
            font-size: 18px;
            color: black;
            text-transform: capitalize;
            border-bottom: solid black;
        }
        
        @media screen and (max-width: 800px) {
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

    <?php
    include 'connect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>


    <!-- Nav bar -->
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
        <table>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Balance</th>
                <th>Action</th>
            </tr>
            <tbody>
                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                    <?php echo $rows['id'] ?>
                    </td>
                    <td class="text-center py-2">
                        <?php echo $rows['name'] ?>
                    </td>
                    <td class="text-center py-2">
                        <?php echo $rows['email'] ?>
                    </td>
                     <td class="text-center py-2">
                     <?php echo $rows['balance'] ?>
                     </td>
                    <td><a href="users.php?id= <?php echo $rows['id']; ?>"> <button class="btn btn-outline-dark btn">TRANSFER</button></a></td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
            

</body>

</html>
