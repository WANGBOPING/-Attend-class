<?php
//header('Content-Type: text/plain'); //設定檔頭，告訴用戶端內容為純文字

$ar = [
    'name' => '小新',
    'age' => 27,
    'data' => [1, 3, 5]
];

//is_array() 用來判斷是不是陣列
//implode() 陣列接乘字串

foreach ($ar as $k => $v) {
    if (is_array($v)) $v = implode(',', $v);
    echo "$k : $v<br>";
}
