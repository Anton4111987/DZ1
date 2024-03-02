<?
$colorR=$_POST["colorR"];
$colorG=$_POST["colorG"];
$colorB=$_POST["colorB"];

$colorText= "rgb(" . (255 - $colorR) . "," . (255 - $colorG) . "," . (255 - $colorB) . ")";
$colorBackground="rgb($colorR, $colorG, $colorB)";
     echo "<span style= 'color:rgb(" . (255 - $colorR) . "," . (255 - $colorG) . "," . (255 - $colorB) . "); background:rgb($colorR, $colorG, $colorB);' >"."Фон текста будет изменяться в зависимости от введенных значений выше!!!". "</span>"; 
     echo "<br/><br/> ";
     echo "<span style= ' color:$colorText; background:$colorBackground;' >"."Фон текста будет изменяться в зависимости от введенных значений выше!!!". "</span>"; 

?>   
