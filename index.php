<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Temperature conversion</h1>

        <div class="main">
            <div class="left">
                <img src="ctof.jpg" alt="">
            </div>
            <div class="right">

                <form method="POST">

                    <input type="text" name="num" placeholder="Enter  number" class="input1">
                    <div class="selection">
                        <input type="radio" name="units" value="cel"> Celsius
                        <input type="radio" name="units"> Farenheit
                    </div>
                    <input type="submit" name="submit" value="Convert" class="btn">

                </form>

                <div>
                   
                </div>

            </div>





        </div>




    </header>

<div class="pdiv">



<p style=>
<?php
if(isset($_POST['submit'])){
$num=$_POST['num'];
$temp=$_POST['units'];
if($temp=="cel"){
    $result= ($num * 9 )/ 5 + 32;
  
    echo "Celsius to farenhiet is= ".$result;
}
else{
    $result = ($num - 32) * 5 / 9;
    echo "Farenhiet to celsius is= ".$result;
}



}



?>



                    </p>

</div>

</body>

</html>