<?php
//入力チェック
if(
//    !isset($_POST["name"]) || $_POST["name"]=="" ||
    !isset($_POST["month"]) || $_POST["month"]=="" ||
    !isset($_POST["workd"]) || $_POST["workd"]=="" ||
    !isset($_POST["workh"]) || $_POST["workh"]=="" ||
    !isset($_POST["kekkin"]) || $_POST["kekkin"]=="" ||
    !isset($_POST["tikokusoutai"]) || $_POST["tikokusoutai"]=="" ||
    !isset($_POST["kyuuyo"]) || $_POST["kyuuyo"]=="" ||
    !isset($_POST["hikazeituukinhi"]) || $_POST["hikazeituukinhi"]=="" ||
    !isset($_POST["kekkinkouzyo"]) || $_POST["kekkinkouzyo"]=="" ||
    !isset($_POST["tikokusoutaikouzyo"]) || $_POST["tikokusoutaikouzyo"]=="" ||
    !isset($_POST["sousikyuu"]) || $_POST["sousikyuu"]=="" ||
    !isset($_POST["kazeisikyuu"]) || $_POST["kazeisikyuu"]=="" ||
    !isset($_POST["hikazeisikyuu"]) || $_POST["hikazeisikyuu"]=="" ||
    !isset($_POST["kennkouhoken"]) || $_POST["kennkouhoken"]=="" ||
    !isset($_POST["kaigohoken"]) || $_POST["kaigohoken"]=="" ||
    !isset($_POST["ziyuminzei"]) || $_POST["ziyuminzei"]=="" ||
    !isset($_POST["syotokuzei"]) || $_POST["syotokuzei"]=="" ||
    !isset($_POST["kouzyogoukei"]) || $_POST["kouzyogoukei"]=="" ||
    !isset($_POST["goukei"]) || $_POST["goukei"]==""
){
    exit('ParamError');
}

//1. POSTデータ取得
$name = $_POST["name"];
$month = $_POST["month"];
$workd = $_POST["workd"];
$workh = $_POST["workh"];
$kekkin	= $_POST["kekkin"];
$tikokusoutai = $_POST["tikokusoutai"];
$kyuuyo = $_POST["kyuuyo"];
$hikazeituukinhi = $_POST["hikazeituukinhi"];
$kekkinkouzyo = $_POST["kekkinkouzyo"];
$tikokusoutaikouzyo = $_POST["tikokusoutaikouzyo"];
$sousikyuu = $_POST["sousikyuu"];
$kazeisikyuu = $_POST["kazeisikyuu"];
$hikazeisikyuu = $_POST["hikazeisikyuu"];
$kennkouhoken = $_POST["kennkouhoken"];
$kaigohoken = $_POST["kaigohoken"];
$nenkinhoken = $_POST["nenkinhoken"];
$koyouhoken = $_POST["koyouhoken"];
$ziyuminzei = $_POST["ziyuminzei"];
$syotokuzei = $_POST["syotokuzei"];
$kouzyogoukei = $_POST["kouzyogoukei"];
$goukei = $_POST["goukei"];

//2.DB接続
try{
    $pdo = new PDO('mysql:dbname=payroll_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
 exit('DbConnectError:' .$e->getMessage());
}

//3.データ登録SQL作成
$sql = "INSERT INTO payroll_table(id, name, month, workd,
workh, kekkin, tikokusoutai, kyuuyo, hikazeituukinhi, kekkinkouzyo, tikokusoutaikouzyo, sousikyuu, kazeisikyuu, hikazeisikyuu, kennkouhoken, kaigohoken, nenkinhoken, koyouhoken, ziyuminzei, syotokuzei, kouzyogoukei, goukei)VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, :a10, :a11, :a12, :a13, :a14, :a15, :a16, :a17, :a18, :a19, :a20, :a21)";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $month, PDO::PARAM_INT);
$stmt->bindValue(':a3', $workd, PDO::PARAM_INT);
$stmt->bindValue(':a4', $workh, PDO::PARAM_INT);
$stmt->bindValue(':a5', $kekkin, PDO::PARAM_INT);
$stmt->bindValue(':a6', $tikokusoutai, PDO::PARAM_INT);
$stmt->bindValue(':a7', $kyuuyo, PDO::PARAM_INT);
$stmt->bindValue(':a8', $hikazeituukinhi, PDO::PARAM_INT);
$stmt->bindValue(':a9', $kekkinkouzyo, PDO::PARAM_INT);
$stmt->bindValue(':a10', $tikokusoutaikouzyo, PDO::PARAM_INT);
$stmt->bindValue(':a11', $sousikyuu, PDO::PARAM_INT);
$stmt->bindValue(':a12', $kazeisikyuu, PDO::PARAM_INT);
$stmt->bindValue(':a13', $hikazeisikyuu, PDO::PARAM_INT);
$stmt->bindValue(':a14', $kennkouhoken, PDO::PARAM_INT);
$stmt->bindValue(':a15', $kaigohoken, PDO::PARAM_INT);
$stmt->bindValue(':a16', $nenkinhoken, PDO::PARAM_INT);
$stmt->bindValue(':a17', $koyouhoken, PDO::PARAM_INT);
$stmt->bindValue(':a18', $ziyuminzei, PDO::PARAM_INT);
$stmt->bindValue(':a19', $syotokuzei, PDO::PARAM_INT);
$stmt->bindValue(':a20', $kouzyogoukei, PDO::PARAM_INT);
$stmt->bindValue(':a21', $goukei, PDO::PARAM_INT);
$status = $stmt->execute();

//データ登録後処理
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: select.php");
    exit;
}

?>
