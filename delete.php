<?php
require_once 'header.php';
$id = $_POST["msID"];
$memberID = htmlspecialchars($_POST["memberID"]);

try {
    loginCheck();
    if ($_SESSION['memberID'] != 1 && $memberID != $_SESSION['memberID']) {

        echo "<script> alert('找無對應文章 將導回首頁'); window.location.replace('index.php');</script>";
        exit;
    } else {
        $sql = "DELETE FROM message where ID = :ID and memberID = :memberID;";
        $result = $db->prepare($sql);
        $result->bindValue(':ID', $id);
        $result->bindValue(':memberID', $memberID);
        $result->execute();
        //echo "<script> alert('刪除成功'); window.location.replace('index.php');</script>";
        echo $result->execute();
    }
} catch (PDOException $err) {
    echo "Error: " . $err->getMessage();
    exit();
}
