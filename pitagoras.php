<html>
<body>
<?php 
function pitagorize (){
$Adjacent=$_GET["adjacent"];
$Opposite=$_GET["opposite"];
//Hypotenuse
$Hypotenuse1 = (pow($Adjacent,2)) + (pow($Opposite,2));
$Hypotenuse1=sqrt($Hypotenuse1);
echo "\nHypotenuse: ".$Hypotenuse1;
return $Hypotenuse1;
}
?>

<?= "Side one: ".$_GET["adjacent"]?>
<br>
<?="Side two: ". $_GET["opposite"]?>
<br> 
<?="Hypotenuse: ". pitagorize();?>
<br><br>

<a href="index.php">Reset</a>
</body>
</html>