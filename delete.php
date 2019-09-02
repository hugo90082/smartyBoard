<?php
    require_once 'header.php';
    $id = $_POST["msID"];
    $memberID = htmlspecialchars($_POST["memberID"]);
    //$memberID = $_SESSION['memberID']??"";
    try
    {
        loginCheck();
        
        if($memberID!=$_SESSION['memberID']){

            echo "<script> alert('找無對應文章 將導回首頁'); window.location.replace('index.php');</script>";
            exit;
        }
        
        $db = new PDO("mysql:host=localhost;dbname=message_board;port=3306", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET CHARACTER SET utf8");
        
        $sql = "DELETE FROM message where ID = :ID and memberID = :memberID;";
        $result = $db->prepare($sql);
        $result->bindValue(':ID',$id);
        $result->bindValue(':memberID',$memberID);
        $result->execute();

        $db = NULL;
        echo "<script> alert('刪除成功'); window.location.replace('index.php');</script>";
    } catch (PDOException $err) {
        $db->rollback();
        echo "Error: " . $err->getMessage();
        exit();
    }
?>