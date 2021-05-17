<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style4.css">
    <title>sparksbank</title>
    <style>
        body {
            margin: 0%;
            padding: 0%;
            background-color: aliceblue;
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

        .figure {
            font-size: 20px;
            font-family: cursive;
        }
        
        .img {
            padding-left: 600px;
        }
        
        @media screen and (max-width: 800px) {
            .img {
                padding-left: 250px;
            }
        }
        
        .footer-inner {
            position: relative;
            bottom: 0%;
            width: 100%;
            height: 30px;
            margin-top: 50px;
        }
        
        .footer-inner p {
            text-align: center;
            padding-top: 5px;
        }
        
        .footer-inner p a {
            text-decoration: none;
            color: black;
            font-size: 18px;
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


    <figure class="figure">
        <img src="./images/4.png" class="img" alt="...">
        <p style="text-align: justify;">
            This is a demo website designed by <a href="https://www.linkedin.com/in/brunda-k-m-0380b4172" style="text-decoration: none;">Brunda km</a> in order to complete the internship opportunity provided to me by <a href="https://www.linkedin.com/in/the-sparks-foundation/"
                style="text-decoration: none;">The Sparks
                    Foundation</a>. Here you can view all the customers associated with our bank, and also you can make transfer from one customer's account to another. <br><br> This is the demo website for the task #1 in Web development and app designing
            internship domain.
        </p>
    </figure>




    <footer>
        <div class="footer-inner">
            <p>&copy; 2021 <a href="#"> Brunda km</a> &#124 <a href="#"> all rights reserved </a> </p>
        </div>
    </footer>

</body>

</html>