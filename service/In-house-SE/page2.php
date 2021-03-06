<?php
session_start();
$occupation = "社内SE";

if ($_SESSION["computer"]  === null || $_SESSION["computer"]  === "") {
  $_SESSION["URL"] = $_SERVER['REQUEST_URI'];
  header("Location: http://co-19-216.99sv-coco.com/lcc/user_judge.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>In-house SE</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <?php if ($_SESSION["computer"] === "pc") { ?>
    <link rel="stylesheet" href="page2_pc.css">
  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
    <link rel="stylesheet" href="page2_phone.css">
  <?php } ?>
</head>
<body>

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

  <div class="body_div">
    <!-- / 社内SEの見出し / -->
    <div class="midashi_div">
      <h1 class="midashi_h1">
      In-house SE
      </h1>
    </div>

    <!-- / 説明文 画像 / -->
    <div class="guide_div">
      <div class="cover_box_guide">
        <div class="guide_p_div">
          <div class="guide_p_1_div">
            <p class="guide_p_1 white_p">
              あなたが<?php echo $occupation; ?>になる上で、力不足な項目に対して、
            </p>
            <p class="guide_p_1 white_p">
              本・動画・その他コンテンツ（記事、Webサービス等）をおすすめしています。
            </p>
          </div>
          <div class="guide_p_2_div">
            <p class="guide_p_2 white_p">
              ※ 以下の『問題解決能力』/『コミュニケーション能力』/『必須スキル・専門知識』
            </p>
            <p class="guide_p_2 white_p">
              は押すとページが切り替わります！
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- レベルを可視化 -->
    <?php
      $num = count($_SESSION["array"]);
      $sum = 5*($num-2);
      $lowest_point = 1*($num-4);
      $your_sum = 0;
      for($i=1; $i<$num-1; $i++)
      {
        $your_sum += (int)($_SESSION["array"]["answer".$i]);
      }
      $exclude_from_your_sum = (int)($_SESSION["array"]["answer1"])+(int)($_SESSION["array"]["answer9"]);
      $your_sum -= $exclude_from_your_sum;
      $your_sum -= $lowest_point;
      $sum -= $lowest_point;
      $your_percentage = round($your_sum/$sum * 100, 1);
    ?>

    <div>
      <h1 class="level" style="margin: 10px 0px; text-align: center;">あなたの<?php echo $occupation; ?>としてのレベルは、<span style="color: red;"><?php echo $your_percentage; ?></span>です。</h1>
      <div class="bar_all" style="width:80%; height:5vh; margin:10px auto; background-color:#EEEEEE;">
          <div class="your_percentage" style="width:<?php echo $your_percentage ?>%; height:5vh; background-color: #77F9C3; position: relative;"><div style="position: absolute; right: 5px; bottom: 0;"><?php echo $your_percentage; ?></div></div>
          <div class="the_rest_of_percentage" style="position: relative;"><div style="position: absolute; right: 5px; bottom: 0;">100</div></div>
      </div>
    <div>
    
    <!-- //////////////// 回答結果切替 //////////////////  -->
    <div class="change_div">
      <div class="hr_25"></div>
      <ul class="change_ul">
        <li class="change_li active" data-id="advantage">
          <p class="change_li_p">あなたの長所</p>
        </li>
        <li class="change_li www" data-id="disadvantage">
          <p class="change_li_p">あなたの短所</p>
        </li>
        <li class="change_li" data-id="roadmap">
          <p class="change_li_p">ロードマップ</p>
        </li>
      </ul>
      <div class="hr_25"></div>
    </div>

    <!-- 問題解決能力のレベル -->
    <?php
      $solving_problem_num = 11;
      $solving_problem_lowest_point = 9;
      $solving_problem_sum = 5*($solving_problem_num-2);
      $your_solving_problem_sum = 0;
      for($i=1; $i<=$solving_problem_num; $i++)
      {
        $your_solving_problem_sum += (int)($_SESSION["array"]["answer".$i]);
      }
      $exclude_from_your_solving_problem_sum = (int)($_SESSION["array"]["answer1"])+(int)($_SESSION["array"]["answer9"]);
      $your_solving_problem_sum -= $exclude_from_your_solving_problem_sum;
      $your_solving_problem_sum -= $solving_problem_lowest_point;
      $solving_problem_sum -= $solving_problem_lowest_point;
      $your_solving_problem_percentage = round($your_solving_problem_sum/$solving_problem_sum * 100, 1);
      echo $your_solving_problem_percentage;
    ?>

    <!-- コミュニケーション能力のレベル -->
    <?php
      $communication_num = 9;
      $communication_lowest_point = 9;
      $communication_sum = 5*$communication_num;
      $your_communication_sum = 0;
      for($i=12; $i<=20; $i++)
      {
        $your_communication_sum += (int)($_SESSION["array"]["answer".$i]);
      }
      $your_solving_problem_sum -= $communication_lowest_point;
      $solving_problem_sum -= $communication_lowest_point;
      $your_communication_percentage = round($your_communication_sum/$communication_sum * 100, 1);
      echo $your_communication_percentage;
    ?>

    <!-- /////////////////////// 回答結果表示 answers //////////////////////////  -->
    <div class="answers_div">
      <?php if($_SESSION["array"] !== "") {?>

      <!-- 長所 -->
      <div class="answers active" id="advantage">
        
        <!-- 問題解決能力 -->
        <?php if($your_solving_problem_percentage>=50) {?>
          <div class="monndai">
          
            <h2 class="answer_h2">問題解決能力</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEの現場では、日々問題が発生します。そのため、いついかなる時も「問題解決能力」というものは重要視されます。ただ、「問題解決能力」を意識して向上させようとした経験がある方はあまりいないのではないでしょうか？「問題解決能力」はセンスではなく、努力次第で向上させることが出来るものです。是非この機会に、自分の「問題解決能力」を確認し、向上させましょう！
              </div>
            </div>
           
            <ul class="answer_ul">
              
              <?php if($your_solving_problem_percentage>=75) {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd9250a7279113cb73d7a45eb1e43b9cc%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=10757403&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0273%2F9784478490273.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd9250a7279113cb73d7a45eb1e43b9cc%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >考える技術・書く技術新版 問題解決力を伸ばすピラミッド原則 [ バーバラ・ミント ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd9250a7279113cb73d7a45eb1e43b9cc%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd9250a7279113cb73d7a45eb1e43b9cc%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd9250a7279113cb73d7a45eb1e43b9cc%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=10757403&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0273%2F9784478490273.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd9250a7279113cb73d7a45eb1e43b9cc%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >考える技術・書く技術新版 問題解決力を伸ばすピラミッド原則 [ バーバラ・ミント ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">考える技術・書く技術新版</h4>
                      <p class="answer_text_p">この本は、「書く」「考える」「問題解決」「表現」の4つの技術について解説しています。本気でロジカルシンキングを鍛えたい方向けの一冊となっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/aL2KGPuDLQ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">一生モノの問題解決メソッド｜<br/>あとから条件が整ってくる『宇宙の法則』</h4>
                      <p class="answer_text_p"> YouTube講演家 鴨頭嘉人（かもがしら よしひと）さんの経験から話す、問題解決への行動力やそのやり方、条件についての動画です。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif(75>$your_solving_problem_percentage){?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fae5f5fc99c0e715e12fc11f4a3627a1d%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=14063593&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0852%2F9784862760852.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fae5f5fc99c0e715e12fc11f4a3627a1d%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >イシューからはじめよ 知的生産の「シンプルな本質」 [ 安宅和人 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fae5f5fc99c0e715e12fc11f4a3627a1d%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fae5f5fc99c0e715e12fc11f4a3627a1d%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fae5f5fc99c0e715e12fc11f4a3627a1d%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=14063593&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0852%2F9784862760852.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fae5f5fc99c0e715e12fc11f4a3627a1d%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >イシューからはじめよ 知的生産の「シンプルな本質」 [ 安宅和人 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">イシューからはじめよ</h4>
                      <p class="answer_text_p">この本では、問題解決を考える前に本当に解決すべき問題を見極めることが重要であると述べています。生産性の高い人の具体的な問題解決の流れを学ぶことが出来る一冊となっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/aL2KGPuDLQ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">一生モノの問題解決メソッド｜<br/>あとから条件が整ってくる『宇宙の法則』</h4>
                      <p class="answer_text_p"> YouTube講演家 鴨頭嘉人（かもがしら よしひと）さんの経験から話す、問題解決への行動力やそのやり方、条件についての動画です。</p>
                    </div>
                  </div>
                </li>
              <?php }?>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>
        <?php }?>

        <!-- コミュニケーション能力 -->
        <?php if($your_communication_percentage>=50) {?>
          <div class="monndai">

            <h2 class="answer_h2">コミュニケーション能力</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEの仕事は一日中パソコンに向かって行う作業であると思っている人が多いと思いますが、実はその認識は誤りです。コーディングや設計書の作成は一人で取り組むものではなく、チーム内での作業分担、チームメンバーでの仕事の方針のすり合わせ、仕事の進捗の共有など多くのコミュニケーションを必要とします。ただ、IT知識や技術があれば良いと思っている方はその認識を改め、是非この機会に、自分の「コミュニケーション能力」を向上させましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
              
              <?php if($your_communication_percentage>=75) {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F34dfd54e455cb51a9d355d0deda25d94%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18672621&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3446%2F9784797393446.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F34dfd54e455cb51a9d355d0deda25d94%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >大人の語彙力ノート 誰からも「できる！」と思われる [ 齋藤 孝 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F34dfd54e455cb51a9d355d0deda25d94%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F34dfd54e455cb51a9d355d0deda25d94%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F34dfd54e455cb51a9d355d0deda25d94%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18672621&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3446%2F9784797393446.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F34dfd54e455cb51a9d355d0deda25d94%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >大人の語彙力ノート 誰からも「できる！」と思われる [ 齋藤 孝 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">大人の語彙力ノート</h4>
                      <p class="answer_text_p">同じ意味でも言葉の伝え方によって相手の感じ方は大きく変わります。あなたは既にコミュニケーション能力がかなり備わっているので、次は教養あふれる言葉遣いを学びましょう！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/-SMVyQAu8XM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【一流の雑談力①】<br/>コミュ力を身につければ仕事も人間関係も良くなる</h4>
                      <p class="answer_text_p"> YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す「雑談の一流、二流、三流」という本を参考にした【一流の雑談力】についての動画です。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif(75>$your_communication_percentage){?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0755b388e620b8f398824810e5ebb242%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18952445&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5235%2F9784797395235.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0755b388e620b8f398824810e5ebb242%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >1分で話せ 世界のトップが絶賛した大事なことだけシンプルに伝える技術 [ 伊藤 羊一 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0755b388e620b8f398824810e5ebb242%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0755b388e620b8f398824810e5ebb242%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0755b388e620b8f398824810e5ebb242%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18952445&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5235%2F9784797395235.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0755b388e620b8f398824810e5ebb242%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >1分で話せ 世界のトップが絶賛した大事なことだけシンプルに伝える技術 [ 伊藤 羊一 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">１分で話せ</h4>
                      <p class="answer_text_p">相手に何かを伝えるときどのようにすれば良いでしょうか？この本は、相手に自分の伝えたいことを伝え、相手を動かす方法を紹介しています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/-SMVyQAu8XM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【一流の雑談力①】<br/>コミュ力を身につければ仕事も人間関係も良くなる</h4>
                      <p class="answer_text_p"> YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す「雑談の一流、二流、三流」という本を参考にした【一流の雑談力】についての動画です。</p>
                    </div>
                  </div>
                </li>

              <?php }?>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>
        <?php }?>

        <!-- PHP -->

        <!-- Java -->

        <!-- C言語 -->

        <!-- データベース -->

        <!-- ネットワーク -->

        <!-- サーバー -->
        
        <!-- セキュリティ -->

        <!-- 設計 -->

        <!-- プレゼン能力 -->

      </div>

      <!-- 短所 -->
      <div class="answers" id="disadvantage">

        <!-- 問題解決能力 -->
        <?php if($your_solving_problem_percentage<50) {?> 
          <div class="monndai">

            <h2 class="answer_h2">問題解決能力</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEの現場では、日々問題が発生します。そのため、いついかなる時も「問題解決能力」というものは重要視されます。ただ、「問題解決能力」を意識して向上させようとした経験がある方はあまりいないのではないでしょうか？「問題解決能力」はセンスではなく、努力次第で向上させることが出来るものです。是非この機会に、自分の「問題解決能力」を確認し、向上させましょう！
              </div>
            </div>
    
            <ul class="answer_ul">
            
              <?php if($your_solving_problem_percentage<25) {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=12062570&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0496%2F9784478000496.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >世界一やさしい問題解決の授業 [ 渡辺健介 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=12062570&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0496%2F9784478000496.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >世界一やさしい問題解決の授業 [ 渡辺健介 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">世界一やさしい問題解決の授業 [ 渡辺健介 ]</h4>
                      <p class="answer_text_p"> ロジカルシンキング・問題解決の考え方を中高生にもわかるように解説した本です。薄くてわかりやすく、内容的には十分で、10年以上支持され続けている本でもあります。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                  <iframe src="https://www.youtube.com/embed/LO-ird7xhbE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【５分で要約】<br/>世界一やさしい問題解決の授業</h4>
                      <p class="answer_text_p">「世界一優しい問題解決の授業」の要点が簡潔にまとめられている動画です。この本の概要を知りたい方にオススメの動画となっています。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif(25<=$your_solving_problem_percentage){?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=10970613&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4925%2F49253112.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ロジカル・シンキング 論理的な思考と構成のスキル （Best solution） [ 照屋華子 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=10970613&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4925%2F49253112.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ロジカル・シンキング 論理的な思考と構成のスキル （Best solution） [ 照屋華子 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">ロジカル・シンキング</h4>
                      <p class="answer_text_p">相手に自分の考えを論理的に伝えることに重点を置いた、ロジカルシンキングについての本です。覚えるべき技術もわかりやすく説明されており、問題解決能力を上げるには優れた本です。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/WcWX_7HEfGQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">10分で分かる<br/>ロジカルシンキング</h4>
                      <p class="answer_text_p">「ロジカル・シンキング」の要点が簡潔にまとめられている動画です。この本の概要を知りたい方にオススメの動画となっています。</p>
                    </div>
                  </div>
                </li>
              <?php }?>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>
        <?php }?>

        <!-- コミュニケーション能力 -->
        <?php if($your_communication_percentage<50) {?> 

          <div class="monndai">
            <h2 class="answer_h2">コミュニケーション能力</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEの仕事は一日中パソコンに向かって行う作業であると思っている人が多いと思いますが、実はその認識は誤りです。コーディングや設計書の作成は一人で取り組むものではなく、チーム内での作業分担、チームメンバーでの仕事の方針のすり合わせ、仕事の進捗の共有など多くのコミュニケーションを必要とします。ただ、IT知識や技術があれば良いと思っている方はその認識を改め、是非この機会に、自分の「コミュニケーション能力」を向上させましょう！ 
              </div>
            </div>

            <ul class="answer_ul">
            
              <?php if($your_communication_percentage<25) {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=16270527&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7210%2F9784478017210.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >伝え方が9割 [ 佐々木圭一 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=16270527&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7210%2F9784478017210.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >伝え方が9割 [ 佐々木圭一 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">伝え方が9割 [ 佐々木圭一 ]</h4>
                      <p class="answer_text_p"> この本は、仕事から日常生活、恋愛などの伝えるコミュニケーション全般に適している本です。ノーをイエスに変える技術を、「３つのステップ」と「7つの切り口」で紹介しています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/lLHGUlMbti0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【話し方の極意】<br/>なぜあなたの話は分かりにくいのか</h4>
                      <p class="answer_text_p"> YouTubeチャンネル登録者80万人を超える、マコなり社長が話す「話し方の極意」なぜ伝わらないかを深掘りしていき、伝わる改善方法を知ることができる内容です。非常に聴きやすく、分かりやすい動画になっています。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif(25<=$your_communication_percentage){?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18228021&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3550%2F9784905073550.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >超一流の雑談力「超・実践編」 [ 安田正 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18228021&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3550%2F9784905073550.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >超一流の雑談力「超・実践編」 [ 安田正 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">超一流の雑談力「超・実践編」 [ 安田正 ]</h4>
                    <p class="answer_text_p"> この本は、ビジネスマン向けコミュニケーション(雑談力)の実践型本になります。そして本書の中で会話例がたくさん出てきますので分かりやすい本になっています。</p>
                  </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/-SMVyQAu8XM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【一流の雑談力①】<br/>コミュ力を身につければ仕事も人間関係も良くなる</h4>
                      <p class="answer_text_p"> YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す「雑談の一流、二流、三流」という本を参考にした【一流の雑談力】についての動画です。</p>
                    </div>
                  </div>
                </li>
              <?php }?>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>
        <?php }?>

        <!-- 基本情報技術者試験 -->
        <?php if($_SESSION["array"]["answer21"] === "1") {?>
          <div class="monndai">

            <h2 class="answer_h2">基本情報技術者試験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                基本情報技術者試験とは、高度IT人材となるために必要な基本的知識・技能を問う国家試験です。この試験は、IT関連の職についた新人が真っ先に取らされることが多い試験であり、幅広いITの基礎知識を身につけることが出来ます。IT関連の職に就く方なら是非とも取っておきたい試験の一つです。 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20175716&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7818%2F9784297117818.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >キタミ式イラストIT塾 基本情報技術者 令和03年 [ きたみりゅうじ ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20175716&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7818%2F9784297117818.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >キタミ式イラストIT塾 基本情報技術者 令和03年 [ きたみりゅうじ ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">キタミ式イラストIT塾 基本情報技術者 令和03年</h4>
                      <p class="answer_text_p">「基本情報技術者試験」受験者向けに作られた本です。イラストが非常に多く分かりやすい本であるため、情報系に精通していない方にも文系の方にもオススメ出来ます！</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>
        <?php }?>

        <!-- 応用情報技術者試験 -->
        <?php if(($_SESSION["array"]["answer21"] === "1")and($_SESSION["array"]["answer22"] === "1")){?>
          <div class="monndai">

            <h2 class="answer_h2">応用情報技術者試験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                応用情報技術者試験とは、高度IT人材となるために必要な応用的知識・技能を問う国家試験です。この試験は、幅広いITの応用的な知識を身につけることが出来るので、IT業界での長いキャリアを考えるなら、是非とも取っておきたい試験の一つです。 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20169031&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7832%2F9784297117832.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >キタミ式イラストIT塾 応用情報技術者 令和03年 [ きたみりゅうじ ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20169031&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7832%2F9784297117832.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >キタミ式イラストIT塾 応用情報技術者 令和03年 [ きたみりゅうじ ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">キタミ式イラストIT塾 応用情報技術者 令和03年</h4>
                      <p class="answer_text_p">「応用情報技術者試験」受験者向けに作られた本です。基本情報技術者試験よりかなり応用的な内容を扱うので、まずは、基本情報技術者試験の勉強に注力し、その後こちらの勉強をするようにしましょう！</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>
        <?php }elseif(($_SESSION["array"]["answer21"] != "1")and($_SESSION["array"]["answer22"] === "1")){?>
          <div class="monndai">

            <h2 class="answer_h2">応用情報技術者試験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                応用情報技術者試験とは、高度IT人材となるために必要な応用的知識・技能を問う国家試験です。この試験は、幅広いITの応用的な知識を身につけることが出来るので、IT業界での長いキャリアを考えるなら、是非とも取っておきたい試験の一つです。 
              </div>
            </div>

            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20169031&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7832%2F9784297117832.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >キタミ式イラストIT塾 応用情報技術者 令和03年 [ きたみりゅうじ ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20169031&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7832%2F9784297117832.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F579eb70512daa57b2704438aaca6157f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >キタミ式イラストIT塾 応用情報技術者 令和03年 [ きたみりゅうじ ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">キタミ式イラストIT塾 応用情報技術者 令和03年</h4>
                      <p class="answer_text_p">「応用情報技術者試験」受験者向けに作られた本です。漫画やイラストを用いて非常に丁寧に説明されている本なので、</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>
        <?php }?>

        <!-- PHP -->
        <?php if($_SESSION["array"]["answer23"] === "1") {?>
          <div class="monndai">

            <h2 class="answer_h2">PHPの経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                販売業、小売業やWeb上でのサービス提供を行う企業では、ECサイトなどのシステムをメンテナンスする必要が生じます。Webの仕組みから、サーバーサイドを担うPHPなどのスクリプト言語、またフロントエンドの言語などの知識が必要となることが多いです。 
              </div>
            </div>
            
            <ul class="answer_ul">

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc20b4d0eebfb5fe168482108db880635%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=15666005&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8857%2F9784897978857.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc20b4d0eebfb5fe168482108db880635%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >いきなりはじめるPHP ワクワク・ドキドキの入門教室 [ 谷藤賢一 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc20b4d0eebfb5fe168482108db880635%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc20b4d0eebfb5fe168482108db880635%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc20b4d0eebfb5fe168482108db880635%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=15666005&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8857%2F9784897978857.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc20b4d0eebfb5fe168482108db880635%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >いきなりはじめるPHP ワクワク・ドキドキの入門教室 [ 谷藤賢一 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">いきなりはじめるPHP ワクワク・ドキドキの入門教室</h4>
                      <p class="answer_text_p">完全な初心者でもPHPをゼロから学べる本です。プログラミングを全く知らない方でも読めるように、難しい用語や説明を省いて説明されています。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/mME5r6mYDVE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">PHPとは？｜現役エンジニアが解説【プログラミング超入門】</h4>
                      <p class="answer_text_p">受講者30,000名を超える日本最大級のオンラインプログラミングスクールTechAcademyのプログラミング解説動画です。 PHPについてTechAcademyのメンターが初心者向けに解説しています。PHP初学者にもおすすめの動画になります。</p>
                    </div>
                  </div>
                </li>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer23"] === "2") {?>
          <div class="monndai">

            <h2 class="answer_h2">PHPの経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                販売業、小売業やWeb上でのサービス提供を行う企業では、ECサイトなどのシステムをメンテナンスする必要が生じます。Webの仕組みから、サーバーサイドを担うPHPなどのスクリプト言語、またフロントエンドの言語などの知識が必要となることが多いです。 
              </div>
            </div>
            
            <ul class="answer_ul">

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5debcc993568e896b5b476864f2e18f5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f9dd79e.be22bbd9.1f9dd79f.22b2f4b6/?me_id=1275488&item_id=14845574&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F1781%2F0018652930l.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5debcc993568e896b5b476864f2e18f5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 独習PHP　第3版 ／山田祥寛(著者) 【中古】afb</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5debcc993568e896b5b476864f2e18f5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5debcc993568e896b5b476864f2e18f5%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5debcc993568e896b5b476864f2e18f5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f9dd79e.be22bbd9.1f9dd79f.22b2f4b6/?me_id=1275488&item_id=14845574&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F1781%2F0018652930l.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5debcc993568e896b5b476864f2e18f5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 独習PHP　第3版 ／山田祥寛(著者) 【中古】afb</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">独習PHP 第3版</h4>
                      <p class="answer_text_p">PHPでWebページ／アプリケーションを開発する際に必要な基礎的な知識が説明されている本です。 PHPの基本構文から、クラス、データベース連携、セキュリティまで一通り理解できる一冊です。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/uVaOzQLxXt0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【PHPプログラミング入門】PHPとは？PHPでできることや平均年収 #00</h4>
                      <p class="answer_text_p">PHP入門の動画になります。全９動画で構成されており、phpの開発環境構築から、phpの言語構造、基礎文法など、phpの基礎を身につけたい、より理解したという初心者向けの方におすすめの動画になります。</p>
                    </div>
                  </div>
                </li>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer23"] === "3") {?>
          <div class="monndai">

            <h2 class="answer_h2">PHPの経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                販売業、小売業やWeb上でのサービス提供を行う企業では、ECサイトなどのシステムをメンテナンスする必要が生じます。Webの仕組みから、サーバーサイドを担うPHPなどのスクリプト言語、またフロントエンドの言語などの知識が必要となることが多いです。 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb25a72c019779ebf022aaf7862748b85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=13992207&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4375%2F9784774144375.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb25a72c019779ebf022aaf7862748b85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >パーフェクトPHP （Perfect series） [ 小川雄大 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb25a72c019779ebf022aaf7862748b85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb25a72c019779ebf022aaf7862748b85%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb25a72c019779ebf022aaf7862748b85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=13992207&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4375%2F9784774144375.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb25a72c019779ebf022aaf7862748b85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >パーフェクトPHP （Perfect series） [ 小川雄大 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">パーフェクトPHP</h4>
                      <p class="answer_text_p">フレームワークを開発しながら、それを用いてWebアプリケーションを作るというのが特徴的な本です。PHPを体系的に学びたい、中〜上級者におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }?>

        <!-- Java -->
        <?php if($_SESSION["array"]["answer24"] === "1") {?>
          <div class="monndai">

            <h2 class="answer_h2">Javaの経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                業種によらず、基幹システムを開発する場合、基幹システムには安定性、厳密さなどが求められるため、JavaやC言語などの汎用言語が用いられる傾向があります。一から開発できるレベルのスキルは無くてもよいですが、フレームワーク、プログラムの構成など、プログラムを読んでどのような処理の理解ができるレベルのスキルが必要です。
              </div>
            </div>
            
            <ul class="answer_ul">

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19815844&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7807%2F9784295007807.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門第3版 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19815844&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7807%2F9784295007807.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門第3版 [ 中山清喬 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるJava入門第3版</h4>
                      <p class="answer_text_p">プログラミングを勉強したことがない人でも分かるよう、Javaの基本的な文法について優しく書かれた本です。しっかりと書かれた解説文にイラストや会話形式の吹き出しもあるので、スムーズに読み進められる一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/wNtiaX0zcZE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">Javaとは？｜現役エンジニアが解説【プログラミング超入門】</h4>
                      <p class="answer_text_p">受講者30,000名を超える日本最大級のオンラインプログラミングスクールTechAcademyのプログラミング解説動画です。 JavaついてTechAcademyのメンターが初心者向けに解説しています。Java初学者にもおすすめの動画になります。</p>
                    </div>
                  </div>
                </li>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer24"] === "2") {?>
          <div class="monndai">

            <h2 class="answer_h2">Javaの経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                業種によらず、基幹システムを開発する場合、基幹システムには安定性、厳密さなどが求められるため、JavaやC言語などの汎用言語が用いられる傾向があります。一から開発できるレベルのスキルは無くてもよいですが、フレームワーク、プログラムの構成など、プログラムを読んでどのような処理の理解ができるレベルのスキルが必要です。
              </div>
            </div>
            
            <ul class="answer_ul">

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F898628f58a3807c7754808a2d5c0ac2a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17105211&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6778%2F9784844336778.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F898628f58a3807c7754808a2d5c0ac2a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門（実践編）第2版 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F898628f58a3807c7754808a2d5c0ac2a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F898628f58a3807c7754808a2d5c0ac2a%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F898628f58a3807c7754808a2d5c0ac2a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17105211&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6778%2F9784844336778.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F898628f58a3807c7754808a2d5c0ac2a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門（実践編）第2版 [ 中山清喬 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるJava入門（実践編）第2版</h4>
                      <p class="answer_text_p">前半では、Javaの基本文法にも触れながら、後半では、開発方法やデザインパターンまでを広く網羅している本です。Javaの基礎から応用まで幅広く学べる一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/kjxetd5ylzI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">Java超入門コース 合併版【Javaの超基本的な部分をたった1時間で学べます】</h4>
                      <p class="answer_text_p">Javaの超基本的な部分を1時間で学ぶことができます。Javaの基礎的な勉強をしたい方や、初めてプログラミングを勉強する方、すでにプログラミングを習得済みの方でざっとJavaを勉強する方にもおすすめの内容となっています。</p>
                    </div>
                  </div>
                </li>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer24"] === "3") {?>
          <div class="monndai">

            <h2 class="answer_h2">Javaの経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                業種によらず、基幹システムを開発する場合、基幹システムには安定性、厳密さなどが求められるため、JavaやC言語などの汎用言語が用いられる傾向があります。一から開発できるレベルのスキルは無くてもよいですが、フレームワーク、プログラムの構成など、プログラムを読んでどのような処理の理解ができるレベルのスキルが必要です。
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe8caf2a36774e92029b982671c556b44%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=11273727&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7038%2F9784797327038.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe8caf2a36774e92029b982671c556b44%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >Java言語で学ぶデザインパターン入門増補改訂版 [ 結城浩 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe8caf2a36774e92029b982671c556b44%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe8caf2a36774e92029b982671c556b44%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe8caf2a36774e92029b982671c556b44%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=11273727&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7038%2F9784797327038.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe8caf2a36774e92029b982671c556b44%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >Java言語で学ぶデザインパターン入門増補改訂版 [ 結城浩 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">Java言語で学ぶデザインパターン入門増補改訂版</h4>
                      <p class="answer_text_p">デザインパターンとはプログラミングにおける設計パターンのことであり、オブジェクト指向設計や開発時に大きな役目を発揮します。ある程度Javaを学習した方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }?>

        <!-- C言語 -->
        <?php if($_SESSION["array"]["answer25"] === "1") {?>
          <div class="monndai">

            <h2 class="answer_h2">C言語の経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                業種によらず、基幹システムを開発する場合、基幹システムには安定性、厳密さなどが求められるため、JavaやC言語などの汎用言語が用いられる傾向があります。一から開発できるレベルのスキルは無くてもよいですが、フレームワーク、プログラムの構成など、プログラムを読んでどのような処理の理解ができるレベルのスキルが必要です。 
              </div>
            </div>
            
            <ul class="answer_ul">

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19149994&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3687%2F9784295003687.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるC言語入門 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19149994&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3687%2F9784295003687.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるC言語入門 [ 中山清喬 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるC言語入門</h4>
                      <p class="answer_text_p">環境構築から用語の説明、C言語の基本的な文法など幅広く扱っている本です。C言語の難しい概念もイラストを用いてわかりやすく説明されているので、初学者にはおすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/lmUKuqeI21E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">C言語とは？｜プログラミング言語のC言語の特徴などについて3分でわかりやすく解説します【プログラミング初心者向け】</h4>
                      <p class="answer_text_p">C言語とは何か？というC言語初学者、プログラミング初心者の方に3分で3分でわかりやすく解説してくれる動画となっています。3分という短い時間で、C言語についての概要、用途、特徴などについて知ることができます</p>
                    </div>
                  </div>
                </li>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer25"] === "2") {?>
          <div class="monndai">

            <h2 class="answer_h2">C言語の経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                業種によらず、基幹システムを開発する場合、基幹システムには安定性、厳密さなどが求められるため、JavaやC言語などの汎用言語が用いられる傾向があります。一から開発できるレベルのスキルは無くてもよいですが、フレームワーク、プログラムの構成など、プログラムを読んでどのような処理の理解ができるレベルのスキルが必要です。 
              </div>
            </div>
            
            <ul class="answer_ul">

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Ffb16ef96ed6de9cf78bef54bf1e72f0c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17435871&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4116%2F9784797384116.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Ffb16ef96ed6de9cf78bef54bf1e72f0c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >新・明解C言語中級編 [ 柴田 望洋 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Ffb16ef96ed6de9cf78bef54bf1e72f0c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Ffb16ef96ed6de9cf78bef54bf1e72f0c%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Ffb16ef96ed6de9cf78bef54bf1e72f0c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17435871&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4116%2F9784797384116.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Ffb16ef96ed6de9cf78bef54bf1e72f0c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >新・明解C言語中級編 [ 柴田 望洋 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">新・明解C言語中級編</h4>
                      <p class="answer_text_p">実際に、色々なゲームをプログラミングで作りながら学べる本です。少しC言語を学んだ方は実際に手を動かしながら学べるため、おすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/fVDuTqb5_u4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">C言語入門 第1回 開発環境の準備 プログラミングを始めよう！（全10回）</h4>
                      <p class="answer_text_p">C言語入門の動画になります。全１０の動画で構成されており、C言語の開発環境構築から、言語構造、基礎文法など、C言語の基礎を身につけたい、より理解したという初心者の方におすすめの動画になります。 </p>
                    </div>
                  </div>
                </li>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer25"] === "3") {?>
          <div class="monndai">

            <h2 class="answer_h2">C言語の経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                業種によらず、基幹システムを開発する場合、基幹システムには安定性、厳密さなどが求められるため、JavaやC言語などの汎用言語が用いられる傾向があります。一から開発できるレベルのスキルは無くてもよいですが、フレームワーク、プログラムの構成など、プログラムを読んでどのような処理の理解ができるレベルのスキルが必要です。 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6060d9f98925c4c9a576815c5dec45c0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17077784&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1498%2F9784839951498.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6060d9f98925c4c9a576815c5dec45c0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >開発ツールを使って学ぶ！C言語プログラミング [ 坂井弘亮 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6060d9f98925c4c9a576815c5dec45c0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6060d9f98925c4c9a576815c5dec45c0%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6060d9f98925c4c9a576815c5dec45c0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17077784&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1498%2F9784839951498.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6060d9f98925c4c9a576815c5dec45c0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >開発ツールを使って学ぶ！C言語プログラミング [ 坂井弘亮 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">開発ツールを使って学ぶ！C言語プログラミング</h4>
                      <p class="answer_text_p">C言語を用いたグループ開発や大規模開発を行う上でのツールの紹介がメインの本です。C言語の基礎を学習し終えた方にとって、エンジニアを目指す上で有益な一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }?>

        <!-- データベース -->
        <?php if($_SESSION["array"]["answer26"] === "1") {?>
          <div class="monndai">

            <h2 class="answer_h2">データベースの経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムのほとんどでデータベースが利用されているので、データベースの経験は欠かせません。是非この機会に、「データベース」について勉強しましょう！
              </div>
            </div>
            
            <ul class="answer_ul">

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F283ba4efd28e2ccde45b1a442280e037%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20202164&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6056%2F9784798166056.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F283ba4efd28e2ccde45b1a442280e037%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解まるわかり データベースのしくみ [ 坂上 幸大 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F283ba4efd28e2ccde45b1a442280e037%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F283ba4efd28e2ccde45b1a442280e037%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F283ba4efd28e2ccde45b1a442280e037%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20202164&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6056%2F9784798166056.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F283ba4efd28e2ccde45b1a442280e037%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解まるわかり データベースのしくみ [ 坂上 幸大 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">図解まるわかり データベースのしくみ</h4>
                      <p class="answer_text_p">データベースの基礎や文法、運用側の注意点などが全て網羅されている本です。難解な印象のあるデータベースの操作が図解を用いて説明されており、最初の一冊に最適な一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/ODngv89ra4I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">SQLとは？｜データベース言語のSQLについて、できることなど含めて3分でわかりやすく解説</h4>
                      <p class="answer_text_p">データベース初学者、データベースの内容を知らない方におすすめの動画になります。データーベースの仕組み、概要、出来ることなどについて、現役のエンジニアの方が、わかりやすく説明してくれます。</p>
                    </div>
                  </div>
                </li>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer26"] === "2") {?>
          <div class="monndai">

            <h2 class="answer_h2">データベースの経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムのほとんどでデータベースが利用されているので、データベースの経験は欠かせません。是非この機会に、「データベース」について勉強しましょう！
              </div>
            </div>
            
            <ul class="answer_ul">

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19388880&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5094%2F9784295005094.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるSQL入門第2版 ドリル222問付き！ [ フレアリンク ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19388880&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5094%2F9784295005094.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるSQL入門第2版 ドリル222問付き！ [ フレアリンク ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるSQL入門第2版 ドリル222問付き！</h4>
                      <p class="answer_text_p">初心者が躓きやすいポイントの解決方法がしっかり押さえられている本です。さまざまな状況に応じた対処を学ぶことができるため、データベースの理解をより一層深めたい方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/T6g-DLWHscw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">データベース設計入門#1 リレーションとER図【11分でマスター！DB設計】</h4>
                      <p class="answer_text_p">データベース初心者におすすめのデーターベース設計入門、全１３の動画構成になります。データベースを扱う上で必要な知識などを実践しながら学ぶことができ、ボリュームのある内容となっています。 </p>
                    </div>
                  </div>
                </li>

            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer26"] === "3") {?>
          <div class="monndai">

            <h2 class="answer_h2">データベースの経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムのほとんどでデータベースが利用されているので、データベースの経験は欠かせません。是非この機会に、「データベース」について勉強しましょう！
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3b6bb3a291a2addfa3e570596402153f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=15778479&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4704%2F9784798124704.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3b6bb3a291a2addfa3e570596402153f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >達人に学ぶDB設計徹底指南書 初級者で終わりたくないあなたへ [ ミック ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3b6bb3a291a2addfa3e570596402153f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3b6bb3a291a2addfa3e570596402153f%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3b6bb3a291a2addfa3e570596402153f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=15778479&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4704%2F9784798124704.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3b6bb3a291a2addfa3e570596402153f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >達人に学ぶDB設計徹底指南書 初級者で終わりたくないあなたへ [ ミック ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">達人に学ぶDB設計徹底指南書 初級者で終わりたくないあなたへ</h4>
                      <p class="answer_text_p">データベースの基本的な内容から豊富なサンプルと練習問題まであり、現場で通用する実践的な力が身につく本です、脱初心者を目指す方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }?>

        <!-- ネットワーク -->
        <?php if($_SESSION["array"]["answer27"] === "1") {?>
          <div class="monndai">

            <h2 class="answer_h2">ネットワークの知識</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの開発だけで終わらず、そのシステムが常に安定的に稼働するためにネットワークなどのインフラ周りの知識も必要となります。是非この機会に、「ネットワーク」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9ee48e925ea3db8df73e9aa34419b54c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19237638&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7498%2F9784798157498.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9ee48e925ea3db8df73e9aa34419b54c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解まるわかり ネットワークのしくみ [ Gene ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9ee48e925ea3db8df73e9aa34419b54c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9ee48e925ea3db8df73e9aa34419b54c%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9ee48e925ea3db8df73e9aa34419b54c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19237638&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7498%2F9784798157498.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9ee48e925ea3db8df73e9aa34419b54c%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解まるわかり ネットワークのしくみ [ Gene ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">図解まるわかり ネットワークのしくみ</h4>
                      <p class="answer_text_p">目に見えなくてイメージがつきにくいネットワーク技術の全体像が、まるごと図解で分かる本です。ネットワークの知識がない初学者の方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcec759b9ad6ee1e391baa4ef061b1320%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/20c0dc6b.2698fc17.20c0dc6c.c279c44e/?me_id=1220950&item_id=13346415&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fneowing-r%2Fcabinet%2Fitem_img_1010%2Fneobk-1937623.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcec759b9ad6ee1e391baa4ef061b1320%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >[書籍とのメール便同梱不可]/この一冊で全部わかるネットワークの基本[本/雑誌] (Informatics &amp; IDEA イラスト図解式:わかりやすさにこだわった) / 福永勇二/著</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcec759b9ad6ee1e391baa4ef061b1320%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcec759b9ad6ee1e391baa4ef061b1320%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcec759b9ad6ee1e391baa4ef061b1320%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/20c0dc6b.2698fc17.20c0dc6c.c279c44e/?me_id=1220950&item_id=13346415&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fneowing-r%2Fcabinet%2Fitem_img_1010%2Fneobk-1937623.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcec759b9ad6ee1e391baa4ef061b1320%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >[書籍とのメール便同梱不可]/この一冊で全部わかるネットワークの基本[本/雑誌] (Informatics &amp; IDEA イラスト図解式:わかりやすさにこだわった) / 福永勇二/著</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">イラスト図解式 この一冊で全部わかるネットワークの基本</h4>
                      <p class="answer_text_p">ネットワークの基本から実際の運用に関わる部分まで網羅されており、イメージを掴むのにとても優れている本です。ネットワークをこれから勉強する方や全体像を掴みたい方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer27"] === "2") {?>
          <div class="monndai">

            <h2 class="answer_h2">ネットワークの知識</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの開発だけで終わらず、そのシステムが常に安定的に稼働するためにネットワークなどのインフラ周りの知識も必要となります。是非この機会に、「ネットワーク」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=12014591&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8222%2F82228311.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ネットワークはなぜつながるのか第2版 知っておきたいTCP／IP、LAN、光ファイバの基 [ 戸根勤 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=12014591&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8222%2F82228311.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ネットワークはなぜつながるのか第2版 知っておきたいTCP／IP、LAN、光ファイバの基 [ 戸根勤 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">ネットワークはなぜつながるのか第2版</h4>
                      <p class="answer_text_p">URLの入力からWebページの閲覧に到る過程について、実際に動作する仕組みを一つ一つ取り上げながら丁寧に説明されている本です。ネットワークについて表面的にしか理解できていない方には、知識や理解を深めるためにおすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19600050&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6805%2F9784797396805.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >インフラ／ネットワークエンジニアのためのネットワーク技術＆設計入門 第2版 [ みやた ひろし ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19600050&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6805%2F9784797396805.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >インフラ／ネットワークエンジニアのためのネットワーク技術＆設計入門 第2版 [ みやた ひろし ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">インフラ／ネットワークエンジニアのためのネットワーク技術＆設計入門 第2版</h4>
                      <p class="answer_text_p">ネットワークについて、座学では手に入らない、実践理解の手助けとなる本です。基本的なインフラの知識が備わっている方には、より実践的な内容を学ぶためにおすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer27"] === "3") {?>
          <div class="monndai">

            <h2 class="answer_h2">ネットワークの知識</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの開発だけで終わらず、そのシステムが常に安定的に稼働するためにネットワークなどのインフラ周りの知識も必要となります。是非この機会に、「ネットワーク」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=12014591&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8222%2F82228311.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ネットワークはなぜつながるのか第2版 知っておきたいTCP／IP、LAN、光ファイバの基 [ 戸根勤 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=12014591&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8222%2F82228311.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F9fb8933eb1874d376861c595b1891b3b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ネットワークはなぜつながるのか第2版 知っておきたいTCP／IP、LAN、光ファイバの基 [ 戸根勤 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">ネットワークはなぜつながるのか第2版</h4>
                      <p class="answer_text_p">URLの入力からWebページの閲覧に到る過程について、実際に動作する仕組みを一つ一つ取り上げながら丁寧に説明されている本です。ネットワークについて表面的にしか理解できていない方には、知識や理解を深めるためにおすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19600050&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6805%2F9784797396805.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >インフラ／ネットワークエンジニアのためのネットワーク技術＆設計入門 第2版 [ みやた ひろし ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19600050&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6805%2F9784797396805.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa3a7608b9fd4fd5e20e9e3ef4a3cdbd2%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >インフラ／ネットワークエンジニアのためのネットワーク技術＆設計入門 第2版 [ みやた ひろし ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">インフラ／ネットワークエンジニアのためのネットワーク技術＆設計入門 第2版</h4>
                      <p class="answer_text_p">ネットワークについて、座学では手に入らない、実践理解の手助けとなる本です。基本的なインフラの知識が備わっている方には、より実践的な内容を学ぶためにおすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>
            
          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }?>

        <!-- サーバー -->
        <?php if($_SESSION["array"]["answer28"] === "1") {?>
          <div class="monndai">

            <h2 class="answer_h2">サーバーの知識</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの開発だけで終わらず、そのシステムが常に安定的に稼働するためにサーバーなどのインフラ周りの知識も必要となります。是非この機会に、「サーバー」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F989a3a8ddb9f89964fd824a576c9a64a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19506079&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0054%2F9784798160054.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F989a3a8ddb9f89964fd824a576c9a64a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解まるわかり サーバーのしくみ [ 西村 泰洋 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F989a3a8ddb9f89964fd824a576c9a64a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F989a3a8ddb9f89964fd824a576c9a64a%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F989a3a8ddb9f89964fd824a576c9a64a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19506079&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0054%2F9784798160054.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F989a3a8ddb9f89964fd824a576c9a64a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解まるわかり サーバーのしくみ [ 西村 泰洋 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">図解まるわかり サーバーのしくみ</h4>
                      <p class="answer_text_p">サーバーの全体像から構築や導入、最新技術までが図解を用いて説明されている本です。サーバーの知識がない初学者の方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a23c7c2cd314e163937ac375ee70394%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/20c0dc6b.2698fc17.20c0dc6c.c279c44e/?me_id=1220950&item_id=13303153&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fneowing-r%2Fcabinet%2Fitem_img_1010%2Fneobk-1937622.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a23c7c2cd314e163937ac375ee70394%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >[書籍とのメール便同梱不可]/この一冊で全部わかるサーバーの基本[本/雑誌] (Informatics &amp; IDEA イラスト図解式:わかりやすさにこだわった) / きはしまさひろ/著</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a23c7c2cd314e163937ac375ee70394%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a23c7c2cd314e163937ac375ee70394%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a23c7c2cd314e163937ac375ee70394%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/20c0dc6b.2698fc17.20c0dc6c.c279c44e/?me_id=1220950&item_id=13303153&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fneowing-r%2Fcabinet%2Fitem_img_1010%2Fneobk-1937622.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a23c7c2cd314e163937ac375ee70394%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >[書籍とのメール便同梱不可]/この一冊で全部わかるサーバーの基本[本/雑誌] (Informatics &amp; IDEA イラスト図解式:わかりやすさにこだわった) / きはしまさひろ/著</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">イラスト図解式 この一冊で全部わかるサーバーの基本</h4>
                      <p class="answer_text_p">サーバーの基本から実際の運用に関わる部分までイラストを用いて解説されており、イメージを掴むのにとても優れている本です。サーバーについてこれから勉強する方や全体像を掴みたい方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer28"] === "2") {?>
          <div class="monndai">

            <h2 class="answer_h2">サーバーの知識</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの開発だけで終わらず、そのシステムが常に安定的に稼働するためにサーバーなどのインフラ周りの知識も必要となります。是非この機会に、「サーバー」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F96edaff2a7c1627c31c263b30176e058%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=16201871&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6135%2F9784798126135.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F96edaff2a7c1627c31c263b30176e058%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >10日でおぼえるLinuxサーバー入門教室CentOS対応 [ 一戸英男 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F96edaff2a7c1627c31c263b30176e058%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F96edaff2a7c1627c31c263b30176e058%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F96edaff2a7c1627c31c263b30176e058%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=16201871&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6135%2F9784798126135.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F96edaff2a7c1627c31c263b30176e058%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >10日でおぼえるLinuxサーバー入門教室CentOS対応 [ 一戸英男 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">10日でおぼえるLinuxサーバー入門教室 CentOS対応</h4>
                      <p class="answer_text_p">Linuxを使ったWeb/ファイルサーバーの構築・管理のノウハウをイチから学べる入門書です。IT業界に従事する方が必ず身につけておきたいサーバー構築・管理の知識をしっかり習得できる一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd1a47b067631730983b6aaca4ca08f12%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19925496&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5441%2F9784296105441.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd1a47b067631730983b6aaca4ca08f12%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >Amazon Web Services 基礎からのネットワーク＆サーバー構築　改訂3版 [ 大澤 文孝 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd1a47b067631730983b6aaca4ca08f12%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd1a47b067631730983b6aaca4ca08f12%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd1a47b067631730983b6aaca4ca08f12%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19925496&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5441%2F9784296105441.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd1a47b067631730983b6aaca4ca08f12%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >Amazon Web Services 基礎からのネットワーク＆サーバー構築　改訂3版 [ 大澤 文孝 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">Amazon Web Services 基礎からのネットワーク＆サーバー構築</h4>
                      <p class="answer_text_p">代表的なクラウドサービス「Amazon Web Services」を実機代わりにネットワークを学び直す、をコンセプトにまとめた本です。インフラをこれから学びたい、一から学び直したい技術者におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer28"] === "3") {?>
          <div class="monndai">

            <h2 class="answer_h2">サーバーの知識</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの開発だけで終わらず、そのシステムが常に安定的に稼働するためにサーバーなどのインフラ周りの知識も必要となります。是非この機会に、「サーバー」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6feed4eb6ead977d53f317c803a63e92%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18047669&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6379%2F9784798146379.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6feed4eb6ead977d53f317c803a63e92%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ゼロからはじめるLinuxサーバー構築・運用ガイド 動かしながら学ぶWebサーバーの作り方 [ 中島能和 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6feed4eb6ead977d53f317c803a63e92%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6feed4eb6ead977d53f317c803a63e92%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6feed4eb6ead977d53f317c803a63e92%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18047669&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6379%2F9784798146379.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6feed4eb6ead977d53f317c803a63e92%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ゼロからはじめるLinuxサーバー構築・運用ガイド 動かしながら学ぶWebサーバーの作り方 [ 中島能和 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">ゼロからはじめるLinuxサーバー構築・運用ガイド 動かしながら学ぶWebサーバーの作り方</h4>
                      <p class="answer_text_p">Linuxの基礎からセキュリティまで、Webサーバーを運用するために身につけるべき知識をまとめた本です。実際に手を動かしながら、Webサーバを構築・運用するので、実践知識を習得したい方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>
            
          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }?>
        
        <!-- セキュリティ -->
        <?php if($_SESSION["array"]["answer29"] === "1") {?>
          <div class="monndai">

            <h2 class="answer_h2">セキュリティの知識</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムを構築する上で、セキュリティ対策は欠かせません。今や、セキュリティの脅威は外部からの攻撃だけではなく多岐にわたります。是非この機会に、「セキュリティ」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdfa83e9ef1e279b06f9f2071c1789065%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19237641&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7207%2F9784798157207.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdfa83e9ef1e279b06f9f2071c1789065%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解まるわかり セキュリティのしくみ [ 増井 敏克 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdfa83e9ef1e279b06f9f2071c1789065%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdfa83e9ef1e279b06f9f2071c1789065%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdfa83e9ef1e279b06f9f2071c1789065%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19237641&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7207%2F9784798157207.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdfa83e9ef1e279b06f9f2071c1789065%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解まるわかり セキュリティのしくみ [ 増井 敏克 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">図解まるわかり セキュリティのしくみ</h4>
                      <p class="answer_text_p">不正アクセス・ウイルスといった攻撃手法から脆弱性・暗号技術といった対策までセキュリティの全体像が図解を用いて説明されている本です。セキュリティの知識がない初学者の方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F26df95cd06b102d2fe93e42ce5124118%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/20c0dc6b.2698fc17.20c0dc6c.c279c44e/?me_id=1220950&item_id=13347408&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fneowing-r%2Fcabinet%2Fitem_img_1144%2Fneobk-2133359.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F26df95cd06b102d2fe93e42ce5124118%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >[書籍とのメール便同梱不可]/この一冊で全部わかるセキュリティの基本[本/雑誌] (Informatics &amp; IDEA イラスト図解式:わかりやすさにこだわった) / みやもとくにお/著 大久保隆夫/著</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F26df95cd06b102d2fe93e42ce5124118%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F26df95cd06b102d2fe93e42ce5124118%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F26df95cd06b102d2fe93e42ce5124118%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/20c0dc6b.2698fc17.20c0dc6c.c279c44e/?me_id=1220950&item_id=13347408&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fneowing-r%2Fcabinet%2Fitem_img_1144%2Fneobk-2133359.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F26df95cd06b102d2fe93e42ce5124118%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >[書籍とのメール便同梱不可]/この一冊で全部わかるセキュリティの基本[本/雑誌] (Informatics &amp; IDEA イラスト図解式:わかりやすさにこだわった) / みやもとくにお/著 大久保隆夫/著</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">イラスト図解式 この一冊で全部わかるセキュリティの基本</h4>
                      <p class="answer_text_p">セキュリティとはそもそも何であり、どのように考えるものかという、基本的な部分からイラストを用いて解説されており、イメージを掴むのにとても優れている本です。セキュリティについてこれから勉強する方や全体像を掴みたい方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer29"] === "2") {?>
          <div class="monndai">

            <h2 class="answer_h2">セキュリティの知識</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムを構築する上で、セキュリティ対策は欠かせません。今や、セキュリティの脅威は外部からの攻撃だけではなく多岐にわたります。是非この機会に、「セキュリティ」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fbadbd7fbc70ead0704995d6e916d8b08%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f9dd79e.be22bbd9.1f9dd79f.22b2f4b6/?me_id=1275488&item_id=15040860&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F2307%2F0018875899l.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fbadbd7fbc70ead0704995d6e916d8b08%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 動かして学ぶセキュリティ入門講座 最新の攻撃手口と予防・対策ツールの活用方法がわかる ／岩井博樹(著者) 【中古】afb</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fbadbd7fbc70ead0704995d6e916d8b08%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fbadbd7fbc70ead0704995d6e916d8b08%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fbadbd7fbc70ead0704995d6e916d8b08%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f9dd79e.be22bbd9.1f9dd79f.22b2f4b6/?me_id=1275488&item_id=15040860&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F2307%2F0018875899l.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fbadbd7fbc70ead0704995d6e916d8b08%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 動かして学ぶセキュリティ入門講座 最新の攻撃手口と予防・対策ツールの活用方法がわかる ／岩井博樹(著者) 【中古】afb</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">動かして学ぶセキュリティ入門講座</h4>
                      <p class="answer_text_p">Part1, Part2ではセキュリティの基礎事項を簡単に説明し、Part3では基礎的な対策ツールの使い方を解説している本です。いろいろなケースが丁寧に書かれていて、入門書としてはおすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb17e744635b83c8dafdc48e3a4939ddb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f6bb6f7.33416d8d.1f6bb6f8.5bc8a5f0/?me_id=1251035&item_id=19460743&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fhmvjapan%2Fcabinet%2Fa11%2F20000%2F11119130.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb17e744635b83c8dafdc48e3a4939ddb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >改訂版小さな会社のIT担当者のためのセキュリティの常識 / 那須慎二 【本】</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb17e744635b83c8dafdc48e3a4939ddb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb17e744635b83c8dafdc48e3a4939ddb%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb17e744635b83c8dafdc48e3a4939ddb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f6bb6f7.33416d8d.1f6bb6f8.5bc8a5f0/?me_id=1251035&item_id=19460743&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fhmvjapan%2Fcabinet%2Fa11%2F20000%2F11119130.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fb17e744635b83c8dafdc48e3a4939ddb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >改訂版小さな会社のIT担当者のためのセキュリティの常識 / 那須慎二 【本】</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">小さな会社のIT担当者のためのセキュリティの常識</h4>
                      <p class="answer_text_p">セキュリティについて、具体的で実践的な説明がなされており、知識ゼロでも良くわかる解説書となっています。スマホ利用で気をつけることなどIT業界に従事しない方にも有益な情報が多い一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer29"] === "3") {?>
          <div class="monndai">

            <h2 class="answer_h2">セキュリティの知識</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムを構築する上で、セキュリティ対策は欠かせません。今や、セキュリティの脅威は外部からの攻撃だけではなく多岐にわたります。是非この機会に、「セキュリティ」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3e12a1c3042baa6406bb9aab5ef2c4a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19130417&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3163%2F9784797393163.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3e12a1c3042baa6406bb9aab5ef2c4a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >体系的に学ぶ 安全なWebアプリケーションの作り方 第2版 脆弱性が生まれる原理と対策の実践 [ 徳丸 浩 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3e12a1c3042baa6406bb9aab5ef2c4a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3e12a1c3042baa6406bb9aab5ef2c4a8%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3e12a1c3042baa6406bb9aab5ef2c4a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19130417&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3163%2F9784797393163.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3e12a1c3042baa6406bb9aab5ef2c4a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >体系的に学ぶ 安全なWebアプリケーションの作り方 第2版 脆弱性が生まれる原理と対策の実践 [ 徳丸 浩 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">体系的に学ぶ 安全なWebアプリケーションの作り方 第2版 脆弱性が生まれる原理と対策の実践</h4>
                      <p class="answer_text_p">Webアプリケーションに生じうる脆弱性とそれを生まないための対策について、解説している本です。セキュリティについての知識がある程度ある方は、改めて体系的に学ぶのにおすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>
            
          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }?>

        <!-- 設計 -->
        <?php if(($_SESSION["array"]["answer30"] === "1")or($_SESSION["array"]["answer30"] === "2")) {?>
          <div class="monndai">

            <h2 class="answer_h2">設計の経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムを構築する上で、セキュリティ対策は欠かせません。今や、セキュリティの脅威は外部からの攻撃だけではなく多岐にわたります。是非この機会に、「セキュリティ」について勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7afc6ed5068802df1ead35b94250995f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19017609&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7194%2F9784822257194.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7afc6ed5068802df1ead35b94250995f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解でなっとく！トラブル知らずのシステム設計　エラー制御・排他制御編 [ 野村総合研究所 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7afc6ed5068802df1ead35b94250995f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7afc6ed5068802df1ead35b94250995f%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7afc6ed5068802df1ead35b94250995f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19017609&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7194%2F9784822257194.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7afc6ed5068802df1ead35b94250995f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解でなっとく！トラブル知らずのシステム設計　エラー制御・排他制御編 [ 野村総合研究所 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">図解でなっとく！トラブル知らずのシステム設計</h4>
                      <p class="answer_text_p">新人SEやアプリケーションエンジニアを主な読者に想定し、画面設計やDB性能に関するシステム設計のポイントを解説した本です。システム設計の知識があまりない方、初めてシステム設計を担当する方におすすめの一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif($_SESSION["array"]["answer30"] === "3") {?>
          <div class="monndai">

            <h2 class="answer_h2">設計の経験</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計が業務の一つとなります。そのため、「自身で考え、設計をした」という経験が非常に重要になります。アプリケーションを開発する際には、自分で考え、設計を行うようにしましょう！また、是非この機会に「設計」をどのように行うのか勉強しましょう！ 
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7da6efc783c0c07bb75c59592161c547%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=13577471&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F2043%2F9784774142043.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7da6efc783c0c07bb75c59592161c547%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >Webを支える技術 HTTP、URI、HTML、そしてREST （WEB＋DB press plusシリーズ） [ 山本陽平 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7da6efc783c0c07bb75c59592161c547%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7da6efc783c0c07bb75c59592161c547%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7da6efc783c0c07bb75c59592161c547%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=13577471&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F2043%2F9784774142043.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F7da6efc783c0c07bb75c59592161c547%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >Webを支える技術 HTTP、URI、HTML、そしてREST （WEB＋DB press plusシリーズ） [ 山本陽平 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">Webを支える技術 HTTP、URI、HTML、そしてREST</h4>
                      <p class="answer_text_p">Webがここまで成功した秘訣は、その設計思想にあります。HTTP、URL、HTMLといったWebサービスの根幹となる技術は、Webの巨大化に対応できるように設計されているのです。Webサービスの設計・開発に携わる方は是非とも読むべき一冊です。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }?>

        <!-- プレゼンテーションスキル -->
        <?php if(($_SESSION["array"]["answer31"] === "1")and($_SESSION["array"]["answer32"] === "1")) {?>
          <div class="monndai">

            <h2 class="answer_h2">プレゼンテーションスキル</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムを提案する上でプレゼンテーションのスキルは必須となります。是非この機会に、「プレゼンテーションスキル」を向上させましょう！
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17480542&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1527%2F9784478061527.gif%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >社内プレゼンの資料作成術 [ 前田鎌利 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17480542&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1527%2F9784478061527.gif%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >社内プレゼンの資料作成術 [ 前田鎌利 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">社内プレゼンの資料作成術</h4>
                      <p class="answer_text_p">あの孫正義社長が「一発OK」を連発した社内プレゼン術が書かれた本です。スライドは5~9枚にまとめる、キーメッセージは13字以内など魅力的な資料づくりの秘訣が多く紹介されています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19910518&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1865%2F9784866731865.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >不安が自信に変わる　話し方の教室 [ 深沢彩子 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19910518&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1865%2F9784866731865.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >不安が自信に変わる　話し方の教室 [ 深沢彩子 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">不安が自信に変わる 話し方の教室</h4>
                      <p class="answer_text_p">アナウンサーを40年務めてきた著者が、生徒との対話形式で相手にしっかり伝わる話し方のポイントを詳細に説明している本です。聞き手の心に響く言葉の選び方や目線の動かし方、届く声の出し方など役に立つコツが多く紹介されています。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif(($_SESSION["array"]["answer31"] === "1")and($_SESSION["array"]["answer32"] === "5")) {?>
          <div class="monndai">

            <h2 class="answer_h2">プレゼンテーションスキル</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムを提案する上でプレゼンテーションのスキルは必須となります。是非この機会に、「プレゼンテーションスキル」を向上させましょう！
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17480542&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1527%2F9784478061527.gif%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >社内プレゼンの資料作成術 [ 前田鎌利 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17480542&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1527%2F9784478061527.gif%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >社内プレゼンの資料作成術 [ 前田鎌利 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">社内プレゼンの資料作成術</h4>
                      <p class="answer_text_p">あの孫正義社長が「一発OK」を連発した社内プレゼン術が書かれた本です。スライドは5~9枚にまとめる、キーメッセージは13字以内など魅力的な資料づくりの秘訣が多く紹介されています。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }elseif(($_SESSION["array"]["answer31"] === "5")and($_SESSION["array"]["answer32"] === "1")) {?>
          <div class="monndai">

            <h2 class="answer_h2">プレゼンテーションスキル</h2>
            <div class="hr_1"></div>
            <div class="skill_description_frame">
              <div class="skill_description">
                社内SEはシステムの設計・開発・テストを手掛けますが、システムを提案する上でプレゼンテーションのスキルは必須となります。是非この機会に、「プレゼンテーションスキル」を向上させましょう！
              </div>
            </div>
            
            <ul class="answer_ul">
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19910518&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1865%2F9784866731865.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >不安が自信に変わる　話し方の教室 [ 深沢彩子 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19910518&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1865%2F9784866731865.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F490e64dc9737003c50f409d477a2f7c9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >不安が自信に変わる　話し方の教室 [ 深沢彩子 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">不安が自信に変わる 話し方の教室</h4>
                      <p class="answer_text_p">アナウンサーを40年務めてきた著者が、生徒との対話形式で相手にしっかり伝わる話し方のポイントを詳細に説明している本です。聞き手の心に響く言葉の選び方や目線の動かし方、届く声の出し方など役に立つコツが多く紹介されています。</p>
                    </div>
                  </div>
                </li>
            </ul>

          </div>
          <div class="hr_25_bottom_20"></div>

        <?php }?>

      </div>

      <!-- ロードマップ -->
      <div class="answers" id="roadmap">
      </div>




<!-- 元々あった部分 -->

        <!-- No.3 -->
        <div class="monndai">
            <h2 class="answer_h2">コミュニケーション(雑談力)
            </h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer3"] === "no") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18228021&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3550%2F9784905073550.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >超一流の雑談力「超・実践編」 [ 安田正 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18228021&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3550%2F9784905073550.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >超一流の雑談力「超・実践編」 [ 安田正 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">超一流の雑談力「超・実践編」 [ 安田正 ]</h4>
                    <p class="answer_text_p"> この本は、ビジネスマン向けコミュニケーション(雑談力)の実践型本になります。そして本書の中で会話例がたくさん出てきますので分かりやすい本になっています。</p>
                  </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/-SMVyQAu8XM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【一流の雑談力①】<br/>コミュ力を身につければ仕事も人間関係も良くなる</h4>
                      <p class="answer_text_p"> YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す「雑談の一流、二流、三流」という本を参考にした【一流の雑談力】についての動画です。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer3"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたは雑談力が備わっていると考えられます。
                    </p>
                </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.4-5 -->
          <div class="monndai">
            <h2 class="answer_h2">コミュニケーション(伝える力)</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer5"] === "yes") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=16270527&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7210%2F9784478017210.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >伝え方が9割 [ 佐々木圭一 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=16270527&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7210%2F9784478017210.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >伝え方が9割 [ 佐々木圭一 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">伝え方が9割 [ 佐々木圭一 ]</h4>
                      <p class="answer_text_p"> この本は、仕事から日常生活、恋愛などの伝えるコミュニケーション全般に適している本です。ノーをイエスに変える技術を、「３つのステップ」と「7つの切り口」で紹介しています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/lLHGUlMbti0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【話し方の極意】<br/>なぜあなたの話は分かりにくいのか</h4>
                      <p class="answer_text_p"> YouTubeチャンネル登録者80万人を超える、マコなり社長が話す「話し方の極意」なぜ伝わらないかを深掘りしていき、伝わる改善方法を知ることができる内容です。非常に聴きやすく、分かりやすい動画になっています。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer5"] === "no") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたは伝える力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.6 -->
          <div class="monndai">
            <h2 class="answer_h2">ITの基礎知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer6"] === "no") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20175716&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7818%2F9784297117818.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >キタミ式イラストIT塾 基本情報技術者 令和03年 [ きたみりゅうじ ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20175716&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7818%2F9784297117818.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >キタミ式イラストIT塾 基本情報技術者 令和03年 [ きたみりゅうじ ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">キタミ式イラストIT塾 基本情報技術者 令和03年</h4>
                      <p class="answer_text_p">「基本情報技術者試験」受験者向けに作られた本です。イラストが非常に多く分かりやすい本であるため、情報系に精通していない方にも文系の方にもオススメ出来ます！</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer6"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはITの基礎知識が備わっていると考えられます。
                    </p>
                </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.7 -->
          <div class="monndai">
            <h2 class="answer_h2">データベースの経験</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">

              <?php if($_SESSION["array"]["answer7"] === "1") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19388880&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5094%2F9784295005094.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるSQL入門第2版 ドリル222問付き！ [ フレアリンク ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19388880&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5094%2F9784295005094.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるSQL入門第2版 ドリル222問付き！ [ フレアリンク ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるSQL入門第2版 ドリル222問付き！</h4>
                      <p class="answer_text_p">データベース言語であるSQLを基礎から学ぶことが出来る本です。200問超のドリル付きで、環境構築なしに始められるので「はじめて」の方にオススメ出来る本です！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_mysql_beginner">
                          <p class="answer_image_a_p dot_pro">（一部有料）Mysql入門 基礎編</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール Mysql</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「（有料）Mysql入門 基礎編」でMysqlの基礎知識を学ぶことが出来ます。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer7"] === "2") {?>
                
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19388880&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5094%2F9784295005094.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるSQL入門第2版 ドリル222問付き！ [ フレアリンク ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19388880&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5094%2F9784295005094.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるSQL入門第2版 ドリル222問付き！ [ フレアリンク ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるSQL入門第2版 ドリル222問付き！</h4>
                      <p class="answer_text_p">データベース言語であるSQLを基礎から学ぶことが出来る本です。200問超のドリル付きで、環境構築なしに始められるので「はじめて」の方にオススメ出来る本です！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_mysql_advanced">
                          <p class="answer_image_a_p dot_pro">（一部有料）Mysql入門 応用編</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール Mysql</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「（有料）Mysql入門 応用編」で集計や分析の手法について幅広い知識を得ることが出来ます。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer7"] === "3") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはデータベースの経験が備わっていると考えられます。
                    </p>
                </div>
                </li>
              <?php }?>

            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

              
          <!-- No.8-->
          <div class="monndai">
            <h2 class="answer_h2">PHPの経験</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">

              <?php if($_SESSION["array"]["answer8"] === "1") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=12891082&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2017%2F005%2F33565580.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】【本】気づけばプロ並みPHP ゼロから作れる人になる! 谷藤賢一/著</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=12891082&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2017%2F005%2F33565580.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】【本】気づけばプロ並みPHP ゼロから作れる人になる! 谷藤賢一/著</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">気づけばプロ並みPHP 改訂版</h4>
                      <p class="answer_text_p">PHPは、webシステムの構築に欠かせません。「PHPって何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_php_v3">
                          <p class="answer_image_a_p dot_pro">（一部有料）はじめてのPHP</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール PHP</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「はじめてのPHP」は、PHP初学者の方にもオススメ出来る教材となっています。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer8"] === "2") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=12891082&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2017%2F005%2F33565580.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】【本】気づけばプロ並みPHP ゼロから作れる人になる! 谷藤賢一/著</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=12891082&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2017%2F005%2F33565580.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】【本】気づけばプロ並みPHP ゼロから作れる人になる! 谷藤賢一/著</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">気づけばプロ並みPHP 改訂版</h4>
                      <p class="answer_text_p">PHPは、webシステムの構築に欠かせません。「PHPって何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_php_grammer">
                          <p class="answer_image_a_p dot_pro">（一部有料）PHP基礎文法編</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール PHP</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「PHP基礎文法編」で基礎を固めてしまいましょう！</p>
                    </div>
                  </div>
                </li>

              <?php }  elseif($_SESSION["array"]["answer8"] === "3") {?>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_php_functions">
                          <p class="answer_image_a_p dot_pro">（一部有料）PHPビルトイン関数編</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_php_objects">
                          <p class="answer_image_a_p dot_pro">（一部有料）PHPオブジェクト編</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール PHP</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「ビルトイン関数編/オブジェクト編」は、PHPの基本を学習した方向けの少し応用的な教材となっています。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer8"] === "4" || $_SESSION["array"]["answer8"] === "5") {?>
                <li class="no_answer_li">]
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはPHPの経験が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>

            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.9-->
          <div class="monndai">
            <h2 class="answer_h2">Pythonの経験</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">

              <?php if($_SESSION["array"]["answer9"] === "1") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                      <?php if ($_SESSION["computer"] === "pc") { ?>
                        <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19618476&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6329%2F9784295006329.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるPython入門 [ フレアリンク ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                      <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                        <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19618476&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6329%2F9784295006329.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるPython入門 [ フレアリンク ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                      <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるPython入門</h4>
                      <p class="answer_text_p">「Pythonって何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_python_v4">
                          <p class="answer_image_a_p dot_pro">（一部有料）はじめてのPython</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール Python</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「はじめてのPython」は、Python初学者の方にもオススメ出来る教材となっています。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer9"] === "2") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19618476&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6329%2F9784295006329.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるPython入門 [ フレアリンク ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19618476&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6329%2F9784295006329.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるPython入門 [ フレアリンク ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるPython入門</h4>
                      <p class="answer_text_p">Pythonは軽く触ったことがある！」といった方はこの本で基礎を固めてしまいましょう！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_python_v3">
                          <p class="answer_image_a_p dot_pro">（一部有料）Python3入門</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール Python</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「Python3入門」で基礎を固めてしまいましょう！</p>
                    </div>
                  </div>
                </li>

              <?php }  elseif($_SESSION["array"]["answer9"] === "3") {?>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス progate</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/">
                          <p class="answer_image_a_p dot_pro">プロゲートのホームページ</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/lessons/python/study/4">
                          <p class="answer_image_a_p dot_pro">(一部有料) プロゲートPython Ⅳ</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/lessons/python/study/5">
                          <p class="answer_image_a_p dot_pro">(一部有料) プロゲートPython Ⅴ</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">プロゲート Python</h4>
                      <p class="answer_text_p">一部有料（月額980円）のプロゲートはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「プロゲートPython Ⅳ」/「プロゲートPython Ⅴ」で少し応用的な知識をつけましょう！</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer9"] === "4" || $_SESSION["array"]["answer9"] === "5") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはPythonの経験が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>

            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.10 -->
          <div class="monndai">
            <h2 class="answer_h2">javaの経験</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer10"] === "1") {?>
                
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19815844&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7807%2F9784295007807.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門第3版 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19815844&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7807%2F9784295007807.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門第3版 [ 中山清喬 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるJava入門</h4>
                      <p class="answer_text_p">「Javaって何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_java_v3">
                          <p class="answer_image_a_p dot_pro">（一部有料）はじめてのJava</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール Java</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「はじめてのJava」は、Java初学者の方にもオススメ出来る教材となっています。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer10"] === "2") {?>
                
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19815844&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7807%2F9784295007807.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門第3版 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19815844&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7807%2F9784295007807.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門第3版 [ 中山清喬 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるJava入門</h4>
                      <p class="answer_text_p">「Javaは軽く触ったことがある！」といった方はこの本で基礎を固めてしまいましょう！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_java_v2">
                          <p class="answer_image_a_p dot_pro">（一部有料）Java8入門</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール Java</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「Java8入門」で基礎を固めてしまいましょう！</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer10"] === "3") {?>
                
                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス progate</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/">
                          <p class="answer_image_a_p dot_pro">プロゲートのホームページ</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/lessons/java/study/4">
                          <p class="answer_image_a_p dot_pro">(一部有料) プロゲートJava Ⅳ</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/lessons/java/study/5">
                          <p class="answer_image_a_p dot_pro">(一部有料) プロゲートJava Ⅴ</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">プロゲート Java</h4>
                      <p class="answer_text_p">一部有料（月額980円）のプロゲートはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「プロゲートJava Ⅳ」/「プロゲートJava Ⅴ」少し応用的な知識をつけましょう！</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer10"] === "4" || $_SESSION["array"]["answer10"] === "5") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはJavaの経験が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.11 -->
          <div class="monndai">
            <h2 class="answer_h2">C言語の経験</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer11"] === "1") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=13740858&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2018%2F024%2F33780420.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】スッキリわかるC言語入門　中山清喬/著</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=13740858&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2018%2F024%2F33780420.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】スッキリわかるC言語入門　中山清喬/著</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるC言語入門</h4>
                      <p class="answer_text_p">「C言語って何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_c">
                          <p class="answer_image_a_p dot_pro">（一部有料）C言語入門</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール C言語</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「C言語入門」は、C言語初学者の方にもオススメ出来る教材となっています。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer11"] === "2") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=13740858&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2018%2F024%2F33780420.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】スッキリわかるC言語入門　中山清喬/著</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=13740858&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2018%2F024%2F33780420.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】スッキリわかるC言語入門　中山清喬/著</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるC言語入門</h4>
                      <p class="answer_text_p">「C言語は軽く触ったことがある！」といった方はこの本で基礎を固めてしまいましょう！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_c">
                          <p class="answer_image_a_p dot_pro">（一部有料）C言語入門</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール C言語</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「C言語入門」で基礎を固めてしまいましょう！</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer11"] === "3") {?>
                
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=13740858&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2018%2F024%2F33780420.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】スッキリわかるC言語入門　中山清喬/著</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eee5ca6.589b7109.1eee5ca7.efd93d4b/?me_id=1259747&item_id=13740858&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fdorama%2Fcabinet%2Fbkimg%2F2018%2F024%2F33780420.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【新品】スッキリわかるC言語入門　中山清喬/著</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">スッキリわかるC言語入門</h4>
                      <p class="answer_text_p">「C言語の基礎を固めた！」という方はこの本で知識の抜けがないか最終確認をしましょう！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_c">
                          <p class="answer_image_a_p dot_pro">（一部有料）C言語入門</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール C言語</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。「C言語入門」で基礎の最終確認をしましょう！</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer11"] === "4" || $_SESSION["array"]["answer11"] === "5") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはC言語の経験が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.12,13 -->
          <div class="monndai">
            <h2 class="answer_h2">目標設定能力</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer13"] === "no") {?>

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18563354&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0594%2F9784799320594.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >原田隆史監修 目標達成ノート STAR PLANNER (スタープランナー) 日付記入式手帳 [ 原田 隆史 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18563354&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0594%2F9784799320594.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >原田隆史監修 目標達成ノート STAR PLANNER (スタープランナー) 日付記入式手帳 [ 原田 隆史 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">目標達成ノート</h4>
                      <p class="answer_text_p">目標を決めずにダラダラと過ごしてしまう方に向けた本です。「本気で変わりたいけど、やらなきゃいけない事を後回しにしてしまう方」にオススメの一冊です！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/i08kXjY9h_c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【ありえないスピードで成長する、最強の目標設定術「MACの原則」とは？</h4>
                      <p class="answer_text_p">YouTubeチャンネル登録者約60万人のブレイクスルー佐々木さんが話す【最強の目標設定術「MACの原則」】についての動画です。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer13"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                    あなたは目標設定能力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.14 -->
          <div class="monndai">
            <h2 class="answer_h2">計画力</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer14"] === "no") {?>
                
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19254061&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8820%2F9784309248820.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >倒れない計画術 まずは挫折・失敗・サボりを計画せよ！ [ メンタリストDaiGo ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19254061&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8820%2F9784309248820.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >倒れない計画術 まずは挫折・失敗・サボりを計画せよ！ [ メンタリストDaiGo ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">倒れない計画術 まずは挫折・失敗・サボりを計画せよ！</h4>
                      <p class="answer_text_p">メンタリストのDaiGoさんが書かれた一冊です。科学的根拠を基に手法が書いてある本なのですぐに実践が可能であるため、「時間管理が苦手な方」にオススメの一冊です！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/z04rQ5YWghc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">計画倒れの99%はコレが原因</h4>
                      <p class="answer_text_p">計画を着実に実行するための具体的な方法論を解説した動画です。計画を立てるのが苦手な方は是非ご参照ください！</p>
                    </div>
                  </div>
                </li>
                  
              <?php }elseif ($_SESSION["array"]["answer14"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたは計画力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.15,16 -->
          <div class="monndai">
            <h2 class="answer_h2">プレゼンテーション能力</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if(($_SESSION["array"]["answer15"] === "yes")||($_SESSION["array"]["answer16"] === "yes")) {?>
                
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1fb3f050.66d490d7.1fb3f051.c588dcaa/?me_id=1278256&item_id=14756220&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Frakutenkobo-ebooks%2Fcabinet%2F6251%2F2000003386251.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >社内プレゼンの資料作成術【電子書籍】[ 前田鎌利 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1fb3f050.66d490d7.1fb3f051.c588dcaa/?me_id=1278256&item_id=14756220&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Frakutenkobo-ebooks%2Fcabinet%2F6251%2F2000003386251.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >社内プレゼンの資料作成術【電子書籍】[ 前田鎌利 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">社内プレゼンの資料作成術</h4>
                      <p class="answer_text_p">あの孫正義社長が「一発OK」を連発した社内プレゼン術が書かれた本です。「プレゼンがもっと上手になりたい！」という方にオススメの一冊です！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/ovxorfBOVRE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">プレゼンの準備の仕方と正しい練習法</h4>
                      <p class="answer_text_p">YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す【プレゼンの準備の仕方と練習法】についての動画です。プレゼンに苦手意識がある方は是非ご参照ください！</p>
                    </div>
                  </div>
                </li>

              <?php }else{?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはプレゼンテーション能力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>
        
          <!-- No.17 -->
          <div class="monndai">
            <h2 class="answer_h2">論理的思考力</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer17"] === "no") {?>
                
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=10970613&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4925%2F49253112.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ロジカル・シンキング 論理的な思考と構成のスキル （Best solution） [ 照屋華子 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=10970613&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4925%2F49253112.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ロジカル・シンキング 論理的な思考と構成のスキル （Best solution） [ 照屋華子 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">ロジカル・シンキング 論理的な思考と構成のスキル</h4>
                      <p class="answer_text_p">コンサルティング会社であるマッキンゼーのエディターが書いた、30万部突破の大ヒットロングセラー本です。「論理的思考力をつけたい！」という方にオススメの一冊です！</p>
                    </div>
                  </div>
                </li>

              <?php }else{?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたは論理的思考力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.18 -->
          <div class="monndai">
            <h2 class="answer_h2">ヒアリング能力</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer18"] === "no") {?>
                
                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f9dd79e.be22bbd9.1f9dd79f.22b2f4b6/?me_id=1275488&item_id=11267032&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F217%2F0015491054l.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 90分で学べるIT提案力 ／小野泰稔【著】 【中古】afb</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f9dd79e.be22bbd9.1f9dd79f.22b2f4b6/?me_id=1275488&item_id=11267032&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F217%2F0015491054l.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 90分で学べるIT提案力 ／小野泰稔【著】 【中古】afb</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">90分で学べるIT提案力</h4>
                      <p class="answer_text_p">提案型SEを目指す人にとっては非常に分かりやすく、役に立つ本です。「提案力をつけたい！」という方にオススメの一冊です！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/news-1172463_640.jpg">
                      <div class="cover_box">
                        <div class="answer_image_div">
                          <p class="answer_image_p">日経XTECH</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://xtech.nikkei.com/it/article/COLUMN/20070808/279390/">
                          <p class="answer_image_a_p">
                          顧客の要望を聞き漏らさないヒアリング能力向上のコツ
                          </p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめの記事</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【ヒアリング能力向上のコツ】</h4>
                      <p class="answer_text_p">この記事では、ヒアリング能力を向上させることが出来るとっておきのトレーニングが紹介されています。「ヒアリング能力を向上させたい！」と言う方は是非ご参照ください！</p>
                    </div>
                  </div>
                </li>

              <?php }else{?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはヒアリング能力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>
        </div>
        
        <!-- 職種について -->
        <?php if($_SESSION["array"]["answer19"] === "yes") {?>
          <div class="answers_always">
            <div class="relation">
              <h2 class="answer_h2"><?php echo $occupation; ?>についてもっと知ろう</h2>
              <div class="hr_1"></div>
              <ul class="answer_ul">

                <li class="answer_li book">
                  <div class="phone_answer_style">
                    <?php if ($_SESSION["computer"] === "pc") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=14434816&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7093%2F9784820747093.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解でよくわかるSEのための業務知識 [ 克元亮 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                      <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=14434816&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7093%2F9784820747093.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解でよくわかるSEのための業務知識 [ 克元亮 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                    <?php } ?>
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">図解でよくわかるSEのための業務知識</h4>
                      <p class="answer_text_p">SEに必要な業務知識を、全業種に共通するコア業務のポイントと業種ごとに特徴的な業務のポイントに分けて解説した本です。「SEの業務について知りたい！」と言う方にオススメの一冊です！</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programming-3170992_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div">
                          <p class="answer_image_p">未来につながるAIメディア</p>
                          <p class="answer_image_p">社内SEとは？なるには？</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://www.bigdata-navi.com/aidrops/3140/">
                          <p class="answer_image_a_p">
                            社内SEの仕事内容・スキル・年収・将来性
                          </p>          
                        </a>
                      </div>
                    </div>

                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめの記事</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【社内SEの仕事】</h4>
                      <p class="answer_text_p">この記事では、社内SEの仕事内容や、将来性などがまとめられています。「社内SEについてもっと詳しく知りたい！」と言う方は是非ご参照ください。</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- 戻るボタン -->
          <div class="return_button">
            <div class="return_button_div">
              <p class="return_button_p">自己分析を終了し、IT自己分析サービスのページに戻ります。</p>
              <a class="return_button_a" href="http://co-19-216.99sv-coco.com/lcc/service/home.php">終了する</a>
            </div>
          </div>

        <?php }?>
        
        <!-- 回答されていない時の処理 -->
      <?php } elseif ($_SESSION["array"] === "") {?>
        <?php header("Location: http://co-19-216.99sv-coco.com/lcc/service/In-house-SE/page1.php");?>
      <?php }?>

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
                  <a  href="" class="logo_a">
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
    'use strict';

    {
      const change_li = document.querySelectorAll('.change_li');
      const answers = document.querySelectorAll('.answers');
      //console.log(change_li);
      //console.log(answers);
      change_li.forEach(clickedItem => {
        clickedItem.addEventListener('click', () => {
          
          change_li.forEach(item => {
            item.classList.remove('active');
          });
          clickedItem.classList.add('active');
          
          answers.forEach(answerItem => {
            answerItem.classList.remove('active');
          });
          document.getElementById(clickedItem.dataset.id).classList.add('active');
        });
      });

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