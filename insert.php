<?php
require_once 'header.php';

$topic = htmlspecialchars($_POST["topic"]);
$content = htmlspecialchars($_POST["content"]);
if (isset($_SESSION['memberID'])) {
    $memberID = $_SESSION['memberID'];
}




try {
    $_SESSION['NoValue'] = "";
    loginCheck();

    if ($topic == "" || $content == "") { //判斷是否空值

        $_SESSION['NoValue'] = "標題或內容不得為空值";
        header("location:create.php");
    } else { //送入資料庫
        $db = new PDO("mysql:host=localhost;dbname=message_board;port=3306", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET CHARACTER SET utf8");

        $sql = "INSERT INTO message (ID, memberID, topic,content) VALUES ('', :memberID, :topic, :content)";
        $result = $db->prepare($sql);
        $result->bindValue(':memberID', $memberID);
        $result->bindValue(':topic', $topic);
        $result->bindValue(':content', $content);

        $result->execute();

        $db = NULL;
        header("location:index.php");
    }
} catch (PDOException $err) {

    echo "Error: " . $err->getMessage();
   
}
header("location:index.php");
