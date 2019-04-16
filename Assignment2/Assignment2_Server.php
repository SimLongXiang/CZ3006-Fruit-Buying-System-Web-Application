
<head> 
<title>Fruit Buying System - Confirmation</title>
</head>


<body>

<?php

      date_default_timezone_set('Asia/Singapore');

      $name = $_POST["user"];
      $appleqty = $_POST["apple"];
      $orangeqty = $_POST["orange"];
      $bananaqty = $_POST["banana"];
      $payment = $_POST["payment"];
      $date = date('l, jS \of F Y');
      $time = date('h:i:s A');

      $applecost = $appleqty * 0.69;
      $bananacost = $bananaqty * 0.39;
      $orangecost = $orangeqty * 0.59;
      $totalcost = $applecost + $bananacost + $orangecost;
?>

<div align ="center">=============================================<br>
FRUIT BUYING SYSTEM<br>
<?php print("$date<br> $time<br><br> Name:$name<br><br>"); ?>
</div>

<table border = "border" align="center">
      <caption> Order Information </caption>
      <tr>
        <th> Product </th>
        <th> Unit Price </th>
        <th> Quantity Ordered </th>
        <th> Item Cost </th>
      </tr>
      <tr align = "center">
        <td> Apple </td>
        <td> $0.69 </td>
        <td> <?php print ("$appleqty"); ?> </td>
        <td> <?php printf ("$ %4.2f", $applecost); ?>
        </td>
      </tr>
      <tr align = "center">
        <td> Banana </td>
        <td> $0.39 </td>
        <td> <?php print ("$bananaqty"); ?> </td>
        <td> <?php printf ("$ %4.2f", $bananacost); ?>
        </td>
        </tr>
      <tr align = "center">
        <td> Orange </td>
        <td> $0.59 </td>
        <td> <?php print ("$orangeqty"); ?> </td>
        <td> <?php printf ("$ %4.2f", $orangecost); ?>
        </td>
      </tr>
      </table>
    <p /> <p />

<div align ="center">
<?php printf ("Total Amount: $ %4.2f<br>Payment Mode: %s",$totalcost, $payment); ?>
<br><br>Thank You for Buying ! <br>
=============================================<br>
</div>

<?php
$myfile = fopen("order.txt", "w") or die("Unable to open file!");
fwrite($myfile, "total numbers of apples:$appleqty"."\r\n");
fwrite($myfile, "total numbers of oranges:$orangeqty"."\r\n");
fwrite($myfile, "total numbers of bananas:$bananaqty"."\r\n");
fclose($myfile);
?>

</body>


