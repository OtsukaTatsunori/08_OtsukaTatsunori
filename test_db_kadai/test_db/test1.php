<!DOCTYPE html>
    <html lang="ja">
        <head>
                <meta charset="UTF-8">
                <title>問題</title>
                <link rel="stylesheet" type="text/css" href="style.css">
                <style>div{padding: 10px;font-size:16px;}</style>
            </head>
            <body>
                        <div class="top_bg">
                            <div class="top1">
                                <p>プログラミング検定協会</p>
                            </div>
                            <div class="top2">
                                <a class="text1" href="index.php">トップページ</a>
                                <a class="text2" href="index.php"> サイトマップ </a>
                            </div>
                        </div>
                        <br>
                        <form action="insert.php" method="post">
                <div class="submit">
                    <label>名前：<input type="text" name="name" style="width:150px;height:20px"></label>
                    <div class="main">
                        <p class="q_color">問１　次のうち、●●に該当するものを一つ選べ。</p>
                    <form method="post" action="insert.php" >        
                            <input type="radio" name="q1" value="q1_1">正解&nbsp;
                            <input type="radio" name="q1" value="q1_2">あ&nbsp;
                            <input type="radio" name="q1" value="q1_3">い&nbsp;
                            <input type="radio" name="q1" value="q1_4">う&nbsp;
                        <br>
                        <p class="q_color">問２　次のうち、●●に該当するものを一つ選べ。</p>
                                
                            <form method="post" action="insert.php">
                                <input type="radio" name="q2" value="q2_1"> 正解&nbsp;
                                <input type="radio" name="q2" value="q2_2"> あ&nbsp;
                                <input type="radio" name="q2" value="q2_3"> い&nbsp;
                                <input type="radio" name="q2" value="q2_4"> う&nbsp;
                                    
                                <p class="q_color">問３　次のうち、●●に該当するものを一つ選べ。</p>

                            <form method="post" action="insert.php">
                                <input type="radio" name="q3" value="q3_1"> 正解&nbsp;
                                <input type="radio" name="q3" value="q3_2"> あ&nbsp;
                                <input type="radio" name="q3" value="q3_3"> い&nbsp;
                                <input type="radio" name="q3" value="q3_4"> う&nbsp;
                                                
                                <p class="q_color">問４　次のうち、●●に該当するものを一つ選べ。</p>
                    

                            <form method="post" action="insert.php">
                                <input type="radio" name="q4" value="q4_1"> 正解&nbsp;
                                <input type="radio" name="q4" value="q4_2"> あ&nbsp;
                                <input type="radio" name="q4" value="q4_3"> い&nbsp;
                                <input type="radio" name="q4" value="q4_4"> う&nbsp;
                                            
                                <p class="q_color">問５　次のうち、●●に該当するものを一つ選べ。</p>
                    

                            <form method="post" action="insert.php">
                                <input type="radio" name="q5" value="q5_1"> 正解&nbsp;
                                <input type="radio" name="q5" value="q5_2"> あ&nbsp;
                                <input type="radio" name="q5" value="q5_3"> い&nbsp;
                                <input type="radio" name="q5" value="q5_4"> う&nbsp;
                                                
                                <p class="q_color">問６　次のうち、●●に該当するものを一つ選べ。</p>
                    

                            <form method="post" action="insert.php">
                                <input type="radio" name="q6" value="q6_1"> 正解&nbsp;
                                <input type="radio" name="q6" value="q6_2"> あ&nbsp;
                                <input type="radio" name="q6" value="q6_3"> い&nbsp;
                                <input type="radio" name="q6" value="q6_4"> う&nbsp;
                
                    </div>

                    <input type="submit" id="finish" value="回答を送信する" style="width:100px;padding:20px" />
                </div>
                </form>
                </form>
                </form>
                </form>
                        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                                <script src="test.js"></script>
        </header>
    </body>
</html>
