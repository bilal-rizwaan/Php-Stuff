<?php
for($x=1;$x<=10;$x++){
    if($x==5){
        echo "Ignore 5". $x ."</br>";
        continue;
    }
    echo $x . "Continue Statement"."</br>";

}
?>