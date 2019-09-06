<?php
require_once 'header.php';
$messageID = $_POST["ID"];
$reply = htmlspecialchars($_POST["reply"]);
$memberID = isset($_SESSION['memberID']) ? $_SESSION['memberID'] : "";



try {
    $_SESSION['NoValue'] = "";
    loginCheck();

    if ($reply == "") { //判斷是否空值

        $_SESSION['NoValue'] = "回復不得為空值";
        return;
        // header("location:details.php?ID=$messageID");
    } else { //送入資料庫
        
        $sql = "INSERT INTO reply (ID ,messageID, memberID, reply) VALUES ('' , :messageID, :memberID, :reply);";
        $result = $db->prepare($sql);
        $result->bindValue(':messageID', $messageID);
        $result->bindValue(':memberID', $memberID);
        $result->bindValue(':reply', $reply);

        $result->execute();
        $_GET["ID"] = $messageID;

        include_once('details.php');



        // header("location:details.php?ID=$messageID");
    }
} catch (PDOException $err) {
    echo "Error: " . $err->getMessage();
    exit();
}
