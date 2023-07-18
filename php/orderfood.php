<?php
include 'MySQL Connect.php';

$chicken = $_POST["chicken_number"];
$sweetfood = $_POST["sweetfood_number"];
$FrenchFries = $_POST["FrenchFries_number"];
$bloodcake = $_POST["bloodcake_number"];
$vegetable = $_POST["vegetable_number"];
$mushroom = $_POST["mushroom_number"];
$seasoning = $_POST["seasoning_number"];
// 取得資料
$sql = "SELECT * FROM `foodorder`";
$result = mysqli_query($con, $sql);

echo "雞排: " . $chicken;
echo "甜不辣: " . $sweetfood;
echo "黃金脆薯: " . $FrenchFries;
echo "豬血糕: " . $bloodcake;
echo "花椰菜: " . $vegetable;
echo "杏鮑菇: " . $mushroom;
echo "口味:" . $seasoning;

// 獲得資料筆數
if ($result) {
    $num = mysqli_num_rows($result);
    //echo "FoodOrder"." 資料表有 " . $num . " 筆資料<br>";
    $sql_S = "INSERT INTO `foodorder` (`ID`, `chicken`, `vegetable`, `sweetfood`, `FrenchFries`, `bloodcake`, `mushroom`, `seasoning`, `time`) VALUES (NULL, '$chicken', '$vegetable', '$sweetfood', '$FrenchFries', '$bloodcake', '$mushroom', '$seasoning', CURRENT_TIMESTAMP);";
    $result_S = mysqli_query($con, $sql_S);
    if ($result_S) {
        echo "[[已向" . "FoodOrder" . "送出資料!]]";
    } else {
        echo "[[資料送出失敗!]]";
    }
}
// --- 顯示資料 --- //

// echo "<br><br>顯示資料：<br>";
// $json = array();
// $result = mysqli_query($con, $sql);
// while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
//     $json[] = $row;
// }
// echo urldecode(json_encode($json, JSON_UNESCAPED_UNICODE));

// 釋放記憶體
mysqli_free_result($result);

// 關閉連線
mysqli_close($con);
