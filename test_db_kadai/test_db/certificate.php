<?php
try {
    $pdo = new PDO('mysql:dbname=test_db;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }
    
    //２．データ登録SQL作成
    //作ったテーブル名を書く場所  xxxにテーブル名を入れます
    $stmt = $pdo->prepare("SELECT * FROM test_table");
    $status = $stmt->execute();

     //３．データ表示 
     $view="";
     if($status==false){
       //execute（SQL実行時にエラーがある場合）
       $error = $stmt->errorInfo();
       exit("ErrorQuery:".$error[2]);
     }else{
       //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
       while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
         $view .= "<p>";
         $view .= $result["id"]." : ".+$result["name"]." : ".+$result["score"];
         $view .= "</p>";
         $id = $result["id"];
         $name = $result["name"];
         $score = $result["score"];
       }
     }
?>
     

<!DOCTYPE html>
<html lang="ja">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" >

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
      <body>
          <div class="c_number">
            <p>受験番号：<?php echo $id;?></p>
          </div>
            <br>
          <div class="c_title">
            <p>プログラミング検定合格証書</p> 
          </div>
          <div class="c_class">
            <p>初級</p>
          </div>
          <div class="c_name">
            <p><?php echo $name;?>&nbsp;殿</p>        
          </div>
              <br>
          <div class="c_main1">
            <p>プログラミング検定協会第1回プログラミング検定試験</p>
            <p>において、頭書の級に合格したことを証明する</p>        
          </div>
            <br>
          <div class="c_main2">
            <p>プログラミング検定協会</p>
            <p>会長&nbsp;鈴木１郎</p>
            <img src="https://1.bp.blogspot.com/-ePh2ItxNOog/Uj_2472kyVI/AAAAAAAAYDo/ipvm9FX56Uo/s400/hanko_taihenyokudekimashita.png" alt="">
          <input type="button" value="印刷する" class="print"/>
          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
              <script src="test.js"></script></div>
      </body>
</html>