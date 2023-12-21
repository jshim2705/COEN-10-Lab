<!DOCTYPE html>
<html>
<head>
<title>Lottery Game - Jaewon Shim</title>
</head>

<body>
<h1 style="center">COEN 10 Introduction to Engineering</h1>
<p style="center">by: Jaewon Shim</p>
<h3 style="center">Let's Play the Lottery!</h3>

<?php
   $inputArray = array($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"]);
   $lotteryNum = array(rand(0,20), rand(0,20), rand(0,20), rand(0,20), rand(0,20));

   $cnt = 0;

   for($i=0; $i<5; $i++) {
     for($j=0; $j<5; $j++) {
       if($inputArray[i]==$lotteryNum[j]) cnt++;
     }
   }
?>

The random numbers were: <?php echo $lotteryNum[0] . " " . $lotteryNum[1] . " " . $lotteryNum[2] . " " . $lotteryNum[3] . " " . $lotteryNum[4]; ?><br>
You guessed the 5 numbers: <?php echo $inputArray[0] . " " . $inputArray[1] . " " . $inputArray[2] . " " . $inputArray[3] . " " . $inputArray[4]; ?><br>

The number of matches found is: <?php echo $cnt; ?>.

<form action="lab4-main.html" method="POST">
    <input type="submit" value="Try again" />
</form>

</body>
</html>
