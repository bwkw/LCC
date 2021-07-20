<?php
$occupation = "社内SE";
session_start();
$_SESSION["array"] = "";
$_SESSION["URL"] = $_SERVER['REQUEST_URI'];

if (isset($_POST["answer_send"])) {
  $_SESSION["array"] = $_POST;
  header("Location: http://co-19-216.99sv-coco.com/lcc/service/In-house-SE/page2.php");
  exit;
}

if ($_SESSION["computer"]  === null || $_SESSION["computer"]  === "") {
  $_SESSION["URL"] = $_SERVER['REQUEST_URI'];
  header("Location: http://co-19-216.99sv-coco.com/lcc/user_judge.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php if ($_SESSION["computer"] === "pc") { ?>
      <link rel="stylesheet" href="page1_pc.css">
    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
      <link rel="stylesheet" href="page1_phone.css">
  <?php } ?>

  <title><?php echo $occupation; ?></title>
</head>
<body>

  <!-- 説明文等 -->
  <div class="description_div">
    <div class="cover_box">
      <?php if ($_SESSION["computer"] === "pc") { ?>
        <h1 class="description_h1 effect-fade"><?php echo $occupation; ?>を、目指すための自己分析<hr class="h1_hr"></h1>
      <?php } elseif ($_SESSION["computer"] === "phone") { ?>
        <h1 class="description_h1 effect-fade"><?php echo $occupation; ?>を<br>目指すための自己分析<hr class="h1_hr"></h1>
      <?php } ?>
      <h2 class="description_h2 effect-fade">全33問<span> </span>約10分</h2>
      <h3 class="description_h3 effect-fade"><?php echo $occupation; ?>に必須なスキルをあなたは持っていますか？
        この質問は<?php echo $occupation; ?>になる上で、あなたの不足したスキルを特定するものです。
        周りから一歩前進し、あなたも優秀な人材に！</h3>
      <h3 class="description_h3 effect-fade">--使用法--<hr class="h4_hr"></h3>
      <?php if ($_SESSION["computer"] === "pc") { ?>
        <p class="description_h3_p effect-fade">Q１-- Q３３の質問に答え、結果を送信を押してください。</p>
      <?php } elseif ($_SESSION["computer"] === "phone") { ?>
        <p class="description_h3_p effect-fade">Q１-- Q３３の質問に答え<br>結果を送信を押してください。</p>
      <?php } ?>
      <p class="description_h3_p effect-fade">(全ての質問に回答するようにお願いします)</p>
    </div>
  </div>
  
<!-- header用div -->
  <?php if ($_SESSION["computer"] === "pc") { ?>
    <header> 
      <div class="header_div">
        <div class="div_ul">
          <ul class="header_ul">
            <li class="logo_url">
              <div class="logo_url_div">
                <a  href="http://co-19-216.99sv-coco.com/lcc/home/home.php" class="logo_a">
                  <img class="img_lcc"src="../../img/4040.png">
                  <p class="header_text">LCC</p>
                </a>
              </div>
            </li>
            <li class=""><a  href="http://co-19-216.99sv-coco.com/lcc/service/home.php" class=""><p class="header_text">Service</p></a></li>
            <li class=""><a  href="" class=""><p class="header_text">Blog</p></a></li>
            <li class=""><a  href="" class=""><p class="header_text">Summary</p></a></li>
            <li class=""><a  href="" class=""><p class="header_text">SNS</p></a></li>
          </ul>
        </div>
      </div>
    </header>
  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
    <div class="phone_header">
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
  
      <nav class="globalMenuSp">
        <ul>
            <li><a href="http://co-19-216.99sv-coco.com/lcc/home/home.php">Home</a></li>
            <li><a href="http://co-19-216.99sv-coco.com/lcc/service/home.php">Service</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Summary</a></li>
            <li><a href="#">SNS</a></li>
        </ul>
      </nav>
  
      <header> 
        <div class="header_div">
          <div class="div_ul">
            <ul class="header_ul">
              <li class="logo_url">
                <div class="logo_url_div">
                  <a  href="http://co-19-216.99sv-coco.com/lcc/home/home.php" class="logo_a">
                    <img class="img_lcc"src="../../img/4040.png">
                    <p class="header_text">LCC</p>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </header>
    </div>
  <?php } ?>

<!-- 質問表示div -->
  <div class="questions_div">
    <!-- formの用意 -->
    <form method="post" action="http://co-19-216.99sv-coco.com/lcc/service/In-house-SE/page1.php" name="form" onsubmit="return formCheck()">

      <!-- 問題解決能力の質問 div -->
      <div class="questions_answer_div">

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q1</span>.&nbsp;&nbsp;スポーツ/勉強で行き詰まったことはありますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer1", value="5">何度もある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer1", value="4">何回かある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer1", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer1", value="2">あまりない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer1", value="1">全くない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q2</span>.&nbsp;&nbsp;Q1で「何度もある」/「何回かある」と答えた方は、その壁を乗り越える事はできましたか？<br>（&thinsp;Q1で「どちらとも言えない」/「あまりない」/「全くない」と答えた方は「いいえ」を選択してください&thinsp;）</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer2", value="5">はい<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer2", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer2", value="1">いいえ<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q3</span>.&nbsp;&nbsp;感覚や思い込みで考える/行動してしまいますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer3", value="1">そう思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer3", value="2">どちらかといえば思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer3", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer3", value="4">どちらかといえば思わない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer3", value="5">思わない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q4</span>.&nbsp;&nbsp;自分は行動力がある方だと思いますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer4", value="5">そう思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer4", value="4">どちらかといえば思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer4", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer4", value="2">どちらかといえば思わない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer4", value="1">思わない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q5</span>.&nbsp;&nbsp;自分は同じミスを繰り返すことが多いと思いますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer5", value="1">そう思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer5", value="2">どちらかといえば思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer5", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer5", value="4">どちらかといえば思わない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer5", value="5">思わない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q6</span>.&nbsp;&nbsp; 自分は物事を論理的に考える事が出来ていると思いますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer6", value="5">そう思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer6", value="4">どちらかといえば思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer6", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer6", value="2">どちらかといえば思わない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer6", value="1">思わない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q7</span>.&nbsp;&nbsp; 予想外の事態や出来事に対して焦ってしまいますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer7", value="1">そう思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer7", value="2">どちらかといえば思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer7", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer7", value="4">どちらかといえば思わない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer7", value="5">思わない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q8</span>.&nbsp;&nbsp; 普段からネットや本などを用いて、調べたりすることは得意ですか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer8", value="5">そう思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer8", value="4">どちらかといえば思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer8", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer8", value="2">どちらかといえば思わない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer8", value="1">思わない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q9</span>.&nbsp;&nbsp; ある目標に対して、きちんと課題や戦略を設定していますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer9", value="5">毎回する<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer9", value="4">大体するようにしている<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer9", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer9", value="2">あまりしない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer9", value="1">全くしない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q10</span>.&nbsp;&nbsp; Q9で「毎回する」/「大体するようにしている」と答えた方は、自分で設定した課題や戦略によって目標を達成できましたか？<br>（&thinsp;Q9で「どちらとも言えない」/「あまりしない」/「全くしない」と答えた方は「いいえ」を選択してください&thinsp;）</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer10", value="5">はい<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer10", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer10", value="1">いいえ<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q11</span>.&nbsp;&nbsp; 計画を立てて、予定通りに物事を進められますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer11", value="5">いつも進められる<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer11", value="4">大体進められる<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer11", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer11", value="2">あまり進められない/計画をあまり立てない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer11", value="1">全く進められない/計画を全く立てない<br>
              </label>
            </dt>
          </dl>
        </div>

        <!-- コミュニケーション能力の質問 div -->
        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q12</span>.&nbsp;&nbsp;あまり親しくない人といるときでも間を持たずに話が出来ますか？話を続けられますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer12", value="5">結構出来る/自信がある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer12", value="4">ある程度出来る<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer12", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer12", value="2">あまり出来ない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer12", value="1">出来ない/苦手だ<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q13</span>.&nbsp;&nbsp;相手の言っていることをきちんと理解出来ますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer13", value="5">理解出来る<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer13", value="4">大体理解出来る<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer13", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer13", value="2">理解出来ないことがある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer13", value="1">理解出来ない/理解するのが苦手だ<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q14</span>.&nbsp;&nbsp;自分の発言は相手にきちんと伝わりますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer14", value="5">伝わる<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer14", value="4">大体伝わる<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer14", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer14", value="2">伝わらないことがある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer14", value="1">伝わらない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q15</span>.&nbsp;&nbsp; 相手の気持ちを考える/汲むのは得意ですか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer15", value="5">そう思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer15", value="4">どちらかといえば思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer15", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer15", value="2">どちらかといえば思わない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer15", value="1">思わない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q16</span>.&nbsp;&nbsp; 自分は表情が豊かな方だと思いますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer16", value="5">そう思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer16", value="4">どちらかといえば思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer16", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer16", value="2">どちらかといえば思わない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer16", value="1">思わない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q17</span>.&nbsp;&nbsp; 相手と目を合わせて話すのは得意ですか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer17", value="5">そう思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer17", value="4">どちらかといえば思う<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer17", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer17", value="2">どちらかといえば思わない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer17", value="1">思わない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q18</span>.&nbsp;&nbsp; 大勢でいるよりも一人でいることを好みますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer18", value="1">好む<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer18", value="2">どちらかといえば好む<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer18", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer18", value="4">どちらかといえば好まない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer18", value="5">好まない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q19</span>.&nbsp;&nbsp; オンラインでのコミュニケーションに苦手意識を感じますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer19", value="1">感じる<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer19", value="2">どちらかといえば感じる<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer19", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer19", value="4">どちらかといえば感じない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer19", value="5">感じない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q20</span>.&nbsp;&nbsp; 見た目（清潔感）に気を遣えていますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer20", value="5">気を遣えている<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer20", value="4">どちらかといえば気を遣えている<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer20", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer20", value="2">どちらかといえば気を遣えていない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answe20", value="1">気を遣えていない<br>
              </label>
            </dt>
          </dl>
        </div>

        <!-- 必須スキル・知識の質問 div -->
        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q21</span>.&nbsp;&nbsp; 「基本情報技術者試験」という資格を持っていますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer21", value="5">持っている<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer21", value="1">持っていない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q22</span>.&nbsp;&nbsp; 「応用情報技術者試験」という資格を持っていますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer22", value="5">持っている<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer22", value="1">持っていない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q23</span>.&nbsp;&nbsp; PHPを触った経験はありますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer23" value="1">未経験<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer23" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer23" value="3">基礎的な部分は学習済<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer23" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer23" value="5">実務レベル<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q24</span>.&nbsp;&nbsp; Javaを触った経験はありますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer24" value="1">未経験<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer24" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer24" value="3">基礎的な部分は学習済<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer24" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer24" value="5">実務レベル<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q25</span>.&nbsp;&nbsp; C言語を触った経験はありますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer25" value="1">未経験<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer25" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer25" value="3">基礎的な部分は学習済<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer25" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer25" value="5">実務レベル<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q26</span>.&nbsp;&nbsp; データベースを触った経験はありますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer26" value="1">未経験<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer26" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer26" value="3">基礎的な部分は学習済<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer26" value="4">自分のアプリにDBを連携させられる<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer26" value="5">実務レベル<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q27</span>.&nbsp;&nbsp; ネットワークについての知識はありますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer27", value="5">十分知識がある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer27", value="4">ある程度の知識はある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer27", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer27", value="2">あまり知識がない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer27", value="1">知識が全くない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q28</span>.&nbsp;&nbsp; サーバーについての知識はありますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer28", value="5">十分知識がある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer28", value="4">ある程度の知識はある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer28", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer28", value="2">あまり知識がない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer28", value="1">知識が全くない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q29</span>.&nbsp;&nbsp; セキュリティについての知識はありますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer29", value="5">十分知識がある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer29", value="4">ある程度の知識はある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer29", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer29", value="2">あまり知識がない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer29", value="1">知識が全くない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q30</span>.&nbsp;&nbsp; 設計をした経験はありますか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer30", value="5">何度もある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer30", value="4">何回かある<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer30", value="3">どちらとも言えない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer30", value="2">あまりない<br>
              </label>
            </dt>
            <dt class="choices">
              <label>
                <input type="radio", name="answer30", value="1">全くない<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q31</span>.&nbsp;&nbsp; プレゼンの作成に躓いたことがある/聴衆を引きつけるプレゼンの資料作成を知らない</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer31", value="1">はい<br>
              </label>
            </dt>
            <dt class="choices">
              <label>      
                <input type="radio", name="answer31", value="5">いいえ<br>
              </label>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q32</span>.&nbsp;&nbsp; プレゼンでうまく話せないことがある/プレゼンでの聴衆を惹きつける話し方を知らない</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer32", value="1">はい<br>
              </label>
            </dt>
            <dt class="choices">
              <label>      
                <input type="radio", name="answer32", value="5">いいえ<br>
              </label>
            </dt>
          </dl>
        </div>

        <!-- 最後の社内SEに対しての質問 div -->
        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q33</span>.&nbsp;&nbsp; <?php echo $occupation; ?>向けの見ておくべきコンテンツを知りたいですか？</p>
            <dt class="choices">
              <label>
                <input type="radio", name="answer33", value="yes">はい<br>
              </label>
            </dt>
            <dt class="choices">
              <label>      
                <input type="radio", name="answer33", value="no">いいえ<br>
              </label>
            </dt>
          </dl>
        </div>

        <!-- 送信ボタン -->
        <div class="submit">
          <input type="submit" class="button" name="answer_send" value="結果を送信">
          <br><br>
        </div>
      </div>

    </form>
  </div>


<!-- footer用div -->
  <div class="footer_div"> 
    <div class="Instagram_div">
      <div class="Instagram_icon_div">
        <a target="_blank" class="Instagram_icon_a" href="https://www.instagram.com/lcc_it/">
          <img class="Instagram_icon" src="https://img.icons8.com/nolan/64/instagram-new.png"/>
        </a>
        <p class="Instagram_icon_p">Instagram [@LCC_IT]</p>
      </div>
    </div>
    <p class="footer_p">©︎ Life Can Change 2021</p>
  </div>


  <script>
    $(function(){
      $(window).scroll(function (){
        $('.effect-fade').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('effect-scroll');
            }
        });
      });
    });
    window.onload = function() {
      scroll_effect();
    
      $(window).scroll(function(){
        scroll_effect();
      });
      function scroll_effect(){
        $('.effect-fade').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight){
          $(this).addClass('effect-scroll');
        }
        });
      }
    };

    function formCheck(){
      flag=0;
      if((document.form.answer1.value == "")||(document.form.answer2.value == "")||(document.form.answer3.value == "")||(document.form.answer4.value == "")||(document.form.answer5.value == "")
      ||(document.form.answer6.value == "")||(document.form.answer7.value == "")||(document.form.answer8.value == "")||(document.form.answer9.value == "")||(document.form.answer10.value == "")
      ||(document.form.answer11.value == "")||(document.form.answer12.value == "")||(document.form.answer13.value == "")||(document.form.answer14.value == "")||(document.form.answer15.value == "")
      ||(document.form.answer16.value == "")||(document.form.answer17.value == "")||(document.form.answer18.value == "")||(document.form.answer19.value == "")||(document.form.answer20.value == "")
      ||(document.form.answer21.value == "")||(document.form.answer22.value == "")||(document.form.answer23.value == "")||(document.form.answer24.value == "")||(document.form.answer25.value == "")
      ||(document.form.answer26.value == "")||(document.form.answer27.value == "")||(document.form.answer28.value == "")||(document.form.answer29.value == "")||(document.form.answer30.value == "")
      ||(document.form.answer31.value == "")||(document.form.answer32.value == "")||(document.form.answer33.value == ""))
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


    $(function() {
      $('.hamburger').click(function() {
          $(this).toggleClass('active');
   
          if ($(this).hasClass('active')) {
              $('.globalMenuSp').addClass('active');
          } else {
              $('.globalMenuSp').removeClass('active');
          }
      });
    });

  </script>

  
</body>
</html>