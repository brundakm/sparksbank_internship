<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sparksbank</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background-image: url("./images/1.jpg");
            background-size: cover;
        }
        
        #abc {
            width: 100%;
            height: 100vh;
            background-image: url(img2.jpg);
            background-size: cover;
        }
        
        nav {
            width: 100%;
            height: 70px;
            background-color: #0005;
            line-height: 50px;
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
        
        .name {
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            position: absolute;
            padding-top: 250px;
            padding-left: 150px;
            font-size: 22px;
            line-height: 13px;
        }
        
        .read-more-btn {
            background-image: linear-gradient(to right, #1c03b5, #5c8bef);
            padding: 5px 12px 8px;
            border-radius: 20px;
            line-height: 50px;
            font-size: 22px;
            color: #fff;
            border: none!important;
            text-decoration: none;
            margin-left: 50px;
        }
        
        .read-more-btn:hover {
            background-image: linear-gradient(to right, #006417, #00b128);
            text-decoration: none;
            color: #fff;
        }
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>

    <div class="name">
        <h1>welcome to sparks bank</h1>
        <p>now bank at your fingertip</p>

        <a href="money.php" class="read-more-btn">view customers</a>
        <br>
        <a href="history.php" class="read-more-btn">view transactions</a>
    </div>

    <div id="abc">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="money.php">view customers</a></li>
                <li><a href="history.php">view transactions</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>

    </div>

</body>

</html>