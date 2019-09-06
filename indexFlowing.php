<?php
require_once 'header.php';
$trLength = $_GET['trLength'] ?? 0;
// 1. 連接資料庫伺服器

// 2. 執行 SQL 敘述
$result = $db->prepare("select * from 
                            message left join member
                            ON message.memberID = member.memberID 
                        order by ID desc 
                        limit 5 offset $trLength"); //join 發文的人帳號
$result->execute();
// 3. 處理查詢結果 
// 4. 結束連線

$memberMail = $_SESSION['memberMail'] ?? "";
$_SESSION['NoValue'] = "";

$smarty->assign('result', $result);
$smarty->assign('memberMail', $memberMail);


$smarty->display('indexFlowing.html');
