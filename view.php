<?php
//1.GETでid取得
$id = $_GET["id"];


//2.DB接続
try{
    $pdo = new PDO('mysql:dbname=payroll_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
 exit('DbConnectError:' .$e->getMessage());
}

//3.SELECT
$sql = "SELECT * FROM payroll_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4.データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    $row = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表示</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</head>
<body>
<form method="post" action="insert.php">
<div>
<h2>給与明細作成</h2>
</div>

<div class="name">
氏名
<select name="name" id="name">
    <option value="1">AAAAA</option>
    <option value="2">BBBBB</option>
</select>
</div>

<div class="styled-select">
給与計算月
<select name="month" id="month">
    <option value="1">1月</option>
    <option value="2">2月</option>
    <option value="3">3月</option>
    <option value="4">4月</option>
    <option value="5">5月</option>
    <option value="6">6月</option>
    <option value="7">7月</option>
    <option value="8">8月</option>
    <option value="9">9月</option>
    <option value="10">10月</option>
    <option value="11">11月</option>
    <option value="12">12月</option>
</select>
</div>

<div class="kintai">
<table>
<tr>
    <td rowspan="2">勤怠</td>
    <th>出勤日数</th>
    <th>勤務時間</th>
    <th>欠勤日数</th>
    <th>遅刻早退時間</th>
</tr>
<tr>
    <td><input type="workd" name="workd" value="<?=$row["workd"]?>"></td>
    <td><input type="workh" name="workh" value="<?=$row["workh"]?>"></td>
    <td><input type="kekkin" name="kekkin" value="<?=$row["kekkin"]?>"></td>
    <td><input type="tikokusoutai" name="tikokusoutai" value="<?=$row["tikokusoutai"]?>"></td>
</tr>
</table>
</div>

<div class="sikyuu">
<table>
<tr>
    <td rowspan="2">支給</td>
    <th>給与</th>
    <th>非課税通勤費</th>
    <th>欠勤控除</th>
    <th>遅刻早退控除</th>
    <th>総支給額</th>
</tr>
<tr>
    <td><input type="kyuuyo" name="kyuuyo" id="kyuuyo" value="<?=$row["kyuuyo"]?>"></td>
    <td><input type="hikazeituukinhi" name="hikazeituukinhi" id="hikazeituukinhi" value="<?=$row["hikazeituukinhi"]?>"></td>
    <td><input type="kekkinkouzyo" name="kekkinkouzyo" id="kekkinkouzyo" value="<?=$row["kekkinkouzyo"]?>"></td>
    <td><input type="tikokusoutaikouzyo" name="tikokusoutaikouzyo" id="tikokusoutaikouzyo" value="<?=$row["tikokusoutaikouzyo"]?>"></td>
    <td><input type="sousikyuu" name="sousikyuu" id="sousikyuu" value="<?=$row["sousikyuu"]?>"></td>
</tr>
</table>
</div>

<div class="sikyuugoukei">
<table>
<tr>
    <th>課税支給合計</th>
    <th>非課税支給合計</th>
</tr>
<tr>
    <td><input type="kazeisikyuu" name="kazeisikyuu" value="<?=$row["kazeisikyuu"]?>"></td>
    <td><input type="hikazeisikyuu" name="hikazeisikyuu" value="<?=$row["hikazeisikyuu"]?>"></td>
</tr>
</table>
</div>

<div class="kouzyo">
<table>
<tr>
    <td rowspan="2">控除</td>
    <th>健康保険</th>
    <th>介護保険</th>
    <th>厚生年金</th>
    <th>雇用保険</th>
    <th>住民税</th>
    <th>所得税</th>
    <th>控除合計</th>
</tr>
<tr>
    <td><input type="kennkouhoken" name="kennkouhoken" value="<?=$row["kennkouhoken"]?>"></td>
    <td><input type="kaigohoken" name="kaigohoken" value="<?=$row["kaigohoken"]?>"></td>
    <td><input type="nenkinhoken" name="nenkinhoken" value="<?=$row["nenkinhoken"]?>"></td>
    <td><input type="koyouhoken" name="koyouhoken" value="<?=$row["koyouhoken"]?>"></td>
    <td><input type="ziyuminzei" name="ziyuminzei" value="<?=$row["ziyuminzei"]?>"></td>
    <td><input type="syotokuzei" name="syotokuzei" value="<?=$row["syotokuzei"]?>"></td>
    <td><input type="kouzyogoukei" name="kouzyogoukei" value="<?=$row["kouzyogoukei"]?>"></td>
</tr>
</table>
</div>

<div class="sasihikisikyuu">
<table>
<tr>
    <th>差引支給額</th>
</tr>
<tr>
    <td><input type="goukeir" name="goukei" value="<?=$row["goukei"]?>"></td>
</tr>
</table>
</div>

<div class="submit">
     <input type="submit" class="submit" value="登録">
</div>
</form>
</body>
</html>