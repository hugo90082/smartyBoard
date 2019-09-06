<?php
require_once 'header.php';

$id = htmlspecialchars($_GET["ID"]);
//顯示主題及內容的SQL
$result = $db->prepare("select * from message
							message left join member
                            ON message.memberID = member.memberID
							where ID = :ID");
$result->bindValue(':ID', $id, PDO::PARAM_STR);
$result->execute();
$row = $result->fetch();
$rowCount = $result->rowCount();
//顯示主題及內容的SQL
if ((!preg_match("/^([0-9]+)$/", $id)) || ($rowCount == 0)) {
	echo "<script> alert('找無對應文章 將導回首頁'); window.location.replace('index.php');</script>";
} else {
	$rowCount = $result->rowCount();
}
//顯示回復的SQL
$resultReply = $db->prepare("
		select reply.ID, reply.reply, reply.datetime, mail from message 
			message join reply 
				ON message.ID = reply.messageID 
			join member 
				ON reply.memberID = member.memberID 
		where message.ID = :ID
		ORDER BY reply.ID");
$resultReply->bindValue(':ID', $id, PDO::PARAM_STR);
$resultReply->execute();
//$rowReply = $resultReply->fetch();


$NoValue = isset($_SESSION['NoValue']) ? $_SESSION['NoValue'] : "<br>";

$smarty->assign('id', $id);
$smarty->assign('NoValue', $NoValue);
$smarty->assign('resultReply', $resultReply);
$smarty->assign('row', $row);
unset($_SESSION['NoValue']);
$smarty->display('details.html');
