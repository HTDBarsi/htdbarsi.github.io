<?php
if ($_POST['send']){
    $file = fopen("lol","w");
    fwrite($file,$_POST['chatbox']);
    fclose($file);
}
?>