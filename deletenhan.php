<?php
    include_once("model/nhan.php");
    //var_dump($_GET);
    // $id = $_REQUEST["id1"];
    // $idlable = $_REQUEST["idlable1"];
    $id = $_POST["id1"];
    $idlable = $_POST["idlable1"];
    Nhan::deletenhan($id,$idlable);
?>