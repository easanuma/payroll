<?php
//2.DB接続
try{
    $pdo = new PDO('mysql:dbname=payroll_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
 exit('接続できませんでした' .$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM payroll_table ORDER BY month");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<tr>';
        $view .= '<td><a href="view.php?id='.$result["id"].'">' . $result["month"] . '</a></td>';
        $view .= '<td>' . $result["workd"] . '</td>';
        $view .= '<td>' . $result["workh"] . '</td>';
        $view .= '<td>' . $result["kekkin"] . '</td>';
        $view .= '<td>' . $result["tikokusoutai"] . '</td>';
        $view .= '<td>' . $result["kyuuyo"] . '</td>';
        $view .= '<td>' . $result["hikazeituukinhi"] . '</td>';
        $view .= '<td>' . $result["kekkinkouzyo"] . '</td>';
        $view .= '<td>' . $result["tikokusoutaikouzyo"] . '</td>';
        $view .= '<td>' . $result["sousikyuu"] . '</td>';
        $view .= '<td>' . $result["kazeisikyuu"] . '</td>';
        $view .= '<td>' . $result["hikazeisikyuu"] . '</td>';
        $view .= '<td>' . $result["kennkouhoken"] . '</td>';
        $view .= '<td>' . $result["kaigohoken"] . '</td>';
        $view .= '<td>' . $result["nenkinhoken"] . '</td>';
        $view .= '<td>' . $result["koyouhoken"] . '</td>';
        $view .= '<td>' . $result["ziyuminzei"] . '</td>';
        $view .= '<td>' . $result["syotokuzei"] . '</td>';
        $view .= '<td>' . $result["kouzyogoukei"] . '</td>';
        $view .= '<td>' . $result["goukei"] . '</td>';
        $view .= '</tr>';
        
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>賃金台帳</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<!-- Head[Start] -->
<header>
      <h2>賃金台帳</h2>
</header>
   
    <div>
    <table>
    <tr>
    <th>月</th>
    <th>出勤日数</th>
    <th>勤務時間</th>
    <th>欠勤日数</th>
    <th>遅刻早退時間</th>
    <th>給与</th>
    <th>非課税通勤費</th>
    <th>欠勤控除</th>
    <th>遅刻早退控除</th>
    <th>総支給額</th>
    <th>課税支給合計</th>
    <th>非課税支給合計</th>
    <th>健康保険</th>
    <th>介護保険</th>
    <th>厚生年金</th>
    <th>雇用保険</th>
    <th>住民税</th>
    <th>所得税</th>
    <th>控除合計</th>
    <th>差引支給額</th>
    </tr>
    
    <?php 
        print $view;
    ?>

    </table>
    </div>

</body>
</html>
