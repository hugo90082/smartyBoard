<?php
require_once 'header.php';

$id = $_GET["ID"];
$memberID = $_SESSION['memberID'];
loginCheck();


$result = $db->prepare("select * from message where ID = :ID and memberID = :memberID");
$result->bindValue(':ID', $id, PDO::PARAM_STR);
$result->bindValue(':memberID', $memberID, PDO::PARAM_STR);
$result->execute();
$row = $result->fetch();
$rowCount = $result->rowCount();

if ((!preg_match("/^([0-9]+)$/", $id)) || ($rowCount == 0)) {
    echo "<script> alert('找無對應文章 將導回首頁'); window.location.replace('index.php');</script>";
} else {
    $rowCount = $result->rowCount();
}

//$NoValue = $_SESSION['NoValue'];


$smarty->assign('id', $id);
$smarty->assign('row', $row);
$smarty->display('edit.html');
