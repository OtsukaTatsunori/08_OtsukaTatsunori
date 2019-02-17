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

    $stmt2 = $pdo->prepare("SELECT * FROM test_table ORDER BY score DESC;");
    $status2 = $stmt2->execute();


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
    
    $view2="";
    if($status2==false){
      $error2 = $stmt2->errorInfo();
      exit("ErrorQuery:".$error2[2]);
    }else{
      while( $result2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
        $view2 .= "<p>";
        $view2 .= $result2["id"]." : ".$result2["name"]." : ".$result2["score"];
        $view2 .= "</p>";
        // $id2 = $result2["id"];
        // $name2 = $result2["name"];
        // $q12 = $result["q1"];
        // $q2 = $result["q2"];
        // $q3 = $result["q3"];
        // $score = $result["score"];


      }
    }
// echo $view;
// $score1 = 0; 
// $score2 = 0; 
// $score3 = 0; 

// if($q1 == "q1_1"){
//     $result1 = "正解";
//     $score1 =+1;
//    }
 
//    if($q2 == "q2_1"){
//     $result2 = "正解";
//     $score2 =+1;
//    }
//    if($q3 == "q3_1"){
//     $result3 = "正解";
//     $score3 =+1;
//    }
 
?>
<!DOCTYPE html>
    <html lang="ja">
      <head>
        <meta charset="UTF-8">
        <title>結果</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>div{padding: 10px;font-size:16px;}</style>
      </head>
    <body>  
      <div class="flexscore">
        <div class="box5">
          <p>受験番号：<?php echo $id;?>
          </p>
          <p>名前：<?php echo $name;?>
          </p>
          <p>得点：<?php echo $score;?>
          </p>
            <br>
          <div class="testresult">
            <p><?php
              if($score > 2){
              echo "合格";
              }else{
              echo "不合格"; 
              }
              ?>
            </p>
              <a href="certificate.php" class="request">証書を発行する</a>
        </div>
        </div>

        <div class="box6">
        <div class="test_desc">
          <p>試験結果</p>
        </div>
        <table>
        <tr>
            <th>受験番号</th>
            <th>名前</th>
            <th>得点</th>
        </tr>
        
        <tr>
            <td><?php print htmlspecialchars($result2['id'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php print htmlspecialchars($result2['name'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php print htmlspecialchars($result2['score'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
 
    </table>
       <?php echo $view2;?>
        </div>
      </div>
</body>
</html>
