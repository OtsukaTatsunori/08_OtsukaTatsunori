
<?php
 $q1 = $_POST['q1']; //ラジオボタンの内容を受け取る
 $q2 = $_POST['q2']; //ラジオボタンの内容を受け取る
 $q3 = $_POST['q3']; //ラジオボタンの内容を受け取る
 $q4 = $_POST['q4']; //ラジオボタンの内容を受け取る
 $q5 = $_POST['q5']; //ラジオボタンの内容を受け取る
 $q6 = $_POST['q6']; //ラジオボタンの内容を受け取る

$name = $_POST['name'];

$score1 = 0; 
$score2 = 0; 
$score3 = 0; 
$score4 = 0; 
$score5 = 0; 
$score6 = 0; 


if($q1 == "q1_1"){
    $result1 = "正解";
    $score1 =+1;
   }
 
   if($q2 == "q2_1"){
    $result2 = "正解";
    $score2 =+1;
   }
   if($q3 == "q3_1"){
    $result3 = "正解";
    $score3 =+1;
   }
   if($q4 == "q4_1"){
    $result4 = "正解";
    $score4 =+1;
   }
   if($q5 == "q5_1"){
    $result5 = "正解";
    $score5 =+1;
   }
   if($q6 == "q6_1"){
    $result6 = "正解";
    $score6 =+1;
   }
 
 $score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6;

//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
  $pdo = new PDO('mysql:dbname=test_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare("INSERT INTO test_table(id,name,q1,q2,q3,q4,q5,q6,score)
VALUES(NULL, :name, :q1, :q2, :q3,:q4,:q5,:q6, :score)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q1', $q1, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q2', $q2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q3', $q3, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q4', $q4, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q5', $q5, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q6', $q6, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':score', $score, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)


$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: score.php");
  exit;
}
?>