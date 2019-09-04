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
        // header("location:details.php?ID=$messageID");
    } else { //送入資料庫
        $db = new PDO("mysql:host=localhost;dbname=message_board;port=3306", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET CHARACTER SET utf8");
        $sql = "INSERT INTO reply (ID ,messageID, memberID, reply) VALUES ('' , :messageID, :memberID, :reply);";
        $result = $db->prepare($sql);
        $result->bindValue(':messageID', $messageID);
        $result->bindValue(':memberID', $memberID);
        $result->bindValue(':reply', $reply);

        $result->execute();

        $db = NULL;
        

        // header("location:details.php?ID=$messageID");
    }
} catch (PDOException $err) {
    $db->rollback();
    echo "Error: " . $err->getMessage();
    exit();
}
