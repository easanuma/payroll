<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>給与明細</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="main.js"></script>

</head>
<body>

<!-- Main[Start] -->
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
    <td><input type="workd" name="workd"></td>
    <td><input type="workh" name="workh"></td>
    <td><input type="kekkin" name="kekkin"></td>
    <td><input type="tikokusoutai" name="tikokusoutai"></td>
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
    <td><input type="kyuuyo" name="kyuuyo" id="kyuuyo"></td>
    <td><input type="hikazeituukinhi" name="hikazeituukinhi" id="hikazeituukinhi"></td>
    <td><input type="kekkinkouzyo" name="kekkinkouzyo" idkekkinkouzyotd>
    <td><input type="tikokusoutaikouzyo" name="tikokusoutaikouzyo" id="tikokusoutaikouzyo"></td>
    <td><input type="sousikyuu" name="sousikyuu" id="sousikyuu"></td>
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
    <td><input type="kazeisikyuu" name="kazeisikyuu"></td>
    <td><input type="hikazeisikyuu" name="hikazeisikyuu"></td>
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
    <td><input type="kennkouhoken" name="kennkouhoken"></td>
    <td><input type="kaigohoken" name="kaigohoken"></td>
    <td><input type="nenkinhoken" name="nenkinhoken"></td>
    <td><input type="koyouhoken" name="koyouhoken"></td>
    <td><input type="ziyuminzei" name="ziyuminzei"></td>
    <td><input type="syotokuzei" name="syotokuzei"></td>
    <td><input type="kouzyogoukei" name="kouzyogoukei"></td>
</tr>
</table>
</div>

<div class="sasihikisikyuu">
<table>
<tr>
    <th>差引支給額</th>
</tr>
<tr>
    <td><input type="goukeir" name="goukei"></td>
</tr>
</table>
</div>

<div class="submit">
     <input type="submit" class="submit" value="登録">
</div>
</form>
<!-- Main[End] -->

</body>
</html>
