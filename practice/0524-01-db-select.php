<?php
require __DIR__. '/connect_db.php';  //字串的串接


//  方法的多載,過載 overload

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 5");

// $row = $stmt->fetch(PDO::FETCH_NUM); // 以索引式陣列的格式取得資料
$rows = $stmt->fetchAll(); // 取出 RecordSet 所有資料

echo json_encode($rows);
