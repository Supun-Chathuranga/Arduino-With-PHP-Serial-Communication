<?php
$selectedPort=$_POST['port'];

if($_POST['Selector']=='1'){
    $comPort=fopen($selectedPort, "w+");
    fwrite($comPort, "o");
    echo "Light ON";
}
elseif($_POST['Selector']=='2'){
    $comPort=fopen($selectedPort, "w+");
    fwrite($comPort, "c");
    echo "Light OFF";

}



?>