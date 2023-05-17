<?php
include("connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
    header{
        width:100%;
        height:30px;
        background-color:black;
        display:flex;
        flex-direction:row;
    }
    header ul li {
     
        list-style:none;
    }
    header ul li a {
        text-decoration:none;
        color:white;
    }
        </style>
</head>
<body>
<header>
        <ul class="links">
<li> <a href ="add_products.php"> اضافة منتج </a> </li>
<li> <a href ="add_products.php"> اضافة منتج </a> </li>
<li> <a href ="add_products.php"> اضافة منتج </a> </li>
<li> <a href ="add_products.php"> اضافة منتج </a> </li>
</ul>
</header>
</body>
</html>