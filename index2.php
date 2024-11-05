<?php 
$result=69;
$result2=69;
$string="Fucking Great";
$string2="Fucking Sad";
if($result>69){
    echo"Hello World! I`m ".$string. " and " .$result + $result2;
}
else if($result <69){
    echo"Hello World! I`m ".$string2. " and " .$result;
}
else echo"Hello World! I`m ".$string2. " and " .$result + $result2."<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        for($z=5;$z>=$j;$z--){
            echo "x";
        }
        echo "*";
    }
    echo "<br>";
}

$car=array("asanagi","fannohitori","aiue");
echo "I like $car[0], $car[1],and $car[2].<br>";

$age=array("Peter"=>"35", "Jane"=>"25", "Ben"=>"45");
echo "Peter is ". $age['Peter']. " years old.";

$artist=array(
    array("Ecchi", 227144, 336990),
    array("H", 3.1215, 9.81),
    array("Furry",34,12)
);
echo $artist[0][0]. " in stock: " .$artist[0][1]. " sold: " .$artist[0][2]."<br>";
echo $artist[1][0]. " in stock: " .$artist[1][1]. " sold: " .$artist[1][2]."<br>";
echo $artist[2][0]. " in stock: " .$artist[2][1]. " sold: " .$artist[2][2]."<br>";


?>
