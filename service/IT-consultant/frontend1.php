<?php
session_start();
$_SESSION["array"]="";


if (count($_POST)==20){
    $_SESSION["array"] = $_POST;
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $ua = $_SERVER['HTTP_USER_AGENT'];
      } else {
        $ua = "";
      }
      if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) 
      {
        $user_Num = 1;
      } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) 
      {
        $user_Num = 2;
      } else 
      {
        $user_Num = 3;
      }
      
      if ($user_Num === 1) {
        header('Location: frontend2_phone.php');
      }elseif ($user_Num === 2 || $user_Num === 3) {
        header('Location: frontend2_pc.php');
      }
}

$occupation="ITコンサルタント";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $occupation;?></title>
    <link rel="stylesheet" href="/service1/In-house-SE/front1.css">
</head>

<body  style="background-color:#EEFFFF;">
    <div class="all">
        <h1 class="occupation"><?php echo $occupation;?>を目指すあなたに！</h1>
        <div class="num-time">
        全19問  約5分
        </div>
        <div class="description">
        <?php echo $occupation;?>に<span class="des-skill">必須のスキル</span>をあなたは持っていますか？<br>
        この質問は<?php echo $occupation;?>になる上で、あなたの不足したスキルを特定するものです。<br>
        周りから一歩前進し、あなたも優秀な人材に！！！
        </div>
        <br>
        <div class="use">
            <p class="howtouse">使用法</p></br>
            Q1〜Q19の質問に答え、結果を送信を押してください。</br>
            (全ての質問に回答するようにお願いします)       
        </div>  

        <br>
        <hr class="separate1">
        

        <div class="main">
            <form method="post" action="frontend1.php" name="form" onsubmit="return formCheck()">
                
                    <dl class="question"><span class="q">Q1</span>.&nbsp;&nbsp;スポーツ/勉強で行き詰まったことはありますか？</br>
                        <dt class="choices">
                             <input type="radio", name="answer1", value="yes", >はい<br>
                        </dt>
                        <dt class="choices">
                             <input type="radio", name="answer1", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q2</span>.&nbsp;&nbsp;Q1ではいと答えた方は、その壁を乗り越える事はできましたか？<br>
                        <p class="brackets">（&thinsp;Q1でいいえと答えた方はいいえを選択してください&thinsp;）</p>
                            <dt class="choices">
                                <input type="radio", name="answer2", value="yes", >はい<br>
                            </dt>
                            <dt class="choices">   
                                <input type="radio", name="answer2", value="no">いいえ<br>
                            </dt>
                    </dl>
                
                    <dl class="question"><span class="q">Q3</span>.&nbsp;&nbsp;あまり親しくない人といるときでも間を持たずに話が出来ますか？話を続けられますか？<br>
                        <dt class="choices">
                             <input type="radio", name="answer3", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                             <input type="radio", name="answer3", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q4</span>.&nbsp;&nbsp;他人の言っていることをきちんと理解できないことがありますか？<br>
                        <dt class="choices">
                             <input type="radio", name="answer4", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                             <input type="radio", name="answer4", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q5</span>.&nbsp;&nbsp;自分の言っていることが他人に伝わらないことがありますか？<br>
                        <dt class="choices">
                             <input type="radio", name="answer5", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                             <input type="radio", name="answer5", value="no">いいえ<br>
                        </dt>
                    </dl>
                
                    <dl class="question"><span class="q">Q6</span>.&nbsp;&nbsp;システムインテグレーション(SI)についての知識は十分にありますか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer6" value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer6" value="no">いいえ<br>
                        </dt>
                    </dl>
                
                    <dl class="question"><span class="q">Q7</span>.&nbsp;&nbsp;ある目標に対して、課題や戦略を設定する癖はついていますか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer7", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer7", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q8</span>.&nbsp;&nbsp;Q7ではいと答えた方は、自分で設定した課題や戦略によって目標を達成できましたか？<br>
                        <p class="brackets">（&thinsp;Q7でいいえと答えた方はいいえを選択してください&thinsp;）</p>
                            <dt class="choices">
                                <input type="radio", name="answer8", value="yes">はい<br>
                            </dt>
                            <dt class="choices">        
                                <input type="radio", name="answer8", value="no">いいえ<br>
                            </dt>
                    </dl>

                    <dl class="question"><span class="q">Q9</span>.&nbsp;&nbsp;計画を立てても思い通りにいかないことがありますか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer9", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer9", value="no">いいえ<br>
                        </dt>
                    </dl>
                
                    <dl class="question"><span class="q">Q10</span>.&nbsp;&nbsp;プレゼンの作成に躓いたことがある/聴衆を引きつけるプレゼンの資料作成を知らない<br>
                        <dt class="choices">
                            <input type="radio", name="answer10", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer10", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q11</span>.&nbsp;&nbsp;プレゼンでうまく話せないことがある/プレゼンでの聴衆を惹きつける話し方を知らない<br>
                        <dt class="choices">
                            <input type="radio", name="answer11", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer11", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q12</span>.&nbsp;&nbsp;日頃からやればできるという考え方が出来ていますか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer12", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer12", value="no">いいえ<br>
                        </dt>
                    </dl>
                
                    <dl class="question"><span class="q">Q13</span>.&nbsp;&nbsp;ストレスを溜めがちですか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer13", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer13", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q14</span>.&nbsp;&nbsp;目的と手段の違いを意識的に捉えながら物事を考えることが出来ますか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer14", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer14", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q15</span>.&nbsp;&nbsp;仮説を立ててから物事を実践していますか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer15", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer15", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q16</span>.&nbsp;&nbsp;物事を論理的に考えることが得意ですか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer16", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer16", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q17</span>.&nbsp;&nbsp;感情や主観に流されずに物事を判断することは出来ますか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer17", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer17", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q18</span>.&nbsp;&nbsp;ヒアリング能力に自信がありますか？(ヒアリング能力を知らない方はいいえを選んでください)<br>
                        <dt class="choices">
                            <input type="radio", name="answer18", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer18", value="no">いいえ<br>
                        </dt>
                    </dl>

                    <dl class="question"><span class="q">Q19</span>.&nbsp;&nbsp;ITコンサルタント向けの見ておくべきコンテンツを知りたいですか？<br>
                        <dt class="choices">
                            <input type="radio", name="answer19", value="yes">はい<br>
                        </dt>
                        <dt class="choices">
                            <input type="radio", name="answer19", value="no">いいえ<br>
                        </dt>
                    </dl>

                <br><br>
                
                <div class="submit">
                    <input type="submit" class="button" name="answer_send" value="結果を送信">
                    <br><br>
                </div>
            </form> 
        </div>
    <br><br><br><br>
                
    </div>

    <script>
    function formCheck(){
        flag=0;
        if((document.form.answer1.value == "")||(document.form.answer2.value == "")||(document.form.answer3.value == "")||(document.form.answer4.value == "")||(document.form.answer5.value == "")
        ||(document.form.answer6.value == "")||(document.form.answer7.value == "")||(document.form.answer8.value == "")||(document.form.answer9.value == "")||(document.form.answer10.value == "")
        ||(document.form.answer11.value == "")||(document.form.answer12.value == "")||(document.form.answer13.value == "")||(document.form.answer14.value == "")||(document.form.answer15.value == "")
        ||(document.form.answer16.value == "")||(document.form.answer17.value == "")||(document.form.answer18.value == "")||(document.form.answer19.value == ""))
        {
            flag = 1;
        }

        if(flag == 1) {
            alert("未入力の項目があります");
            return false;
        }
        else{
            return true;
        }
    }
    </script>

</body>
</html>