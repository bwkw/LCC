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
  <link rel="stylesheet" href="page2_pc.css">
</head>
<body>

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

    
    <!-- //////////////// 回答結果切替 //////////////////  -->
    <div class="change_div">
      <div class="hr_25"></div>
      <ul class="change_ul">
        <li class="change_li active" data-id="monndai">
          <p class="change_li_p">問題解決能力</p>
        </li>
        <li class="change_li www" data-id="komini">
          <p class="change_li_p">コミュニケーション力</p>
        </li>
        <li class="change_li" data-id="gizyutu">
          <p class="change_li_p">必須スキル・専門知識</p>
        </li>
      </ul>
      <div class="hr_25"></div>
    </div>


    <!-- /////////////////////// 回答結果表示 answers //////////////////////////  -->
    <div class="answers_div">
      <?php if($_SESSION["array"] !== "") {?>

        <!-- 問題解決 -->
        <div class="answers active" id="monndai" >

          <!-- No.1-2 -->
          <div class="monndai">
            <h2 class="answer_h2">問題解決能力</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
            <?php if($_SESSION["array"]["answer2"] === "no") {?>

                <li class="answer_li book">
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=12062570&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0496%2F9784478000496.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >世界一やさしい問題解決の授業 [ 渡辺健介 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">世界一やさしい問題解決の授業 [ 渡辺健介 ]</h4>
                    <p class="answer_text_p"> ロジカルシンキング・問題解決の考え方を中高生にもわかるように解説した本です。薄くてわかりやすいく、内容的には十分で、10年以上支持され続けている本でもあります。</p>
                  </div>
                </li>

                <li class="answer_li mov">
                  <iframe src="https://www.youtube.com/embed/aL2KGPuDLQ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="answer_mov_text">
                    <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4_2">一生モノの問題解決メソッド｜<br/>あとから条件が整ってくる『宇宙の法則』</h4>
                    <p class="answer_text_p"> YouTube講演家 鴨頭嘉人（かもがしら よしひと）さんの経験から話す、問題解決への行動力やそのやり方、条件いついての動画です。</p>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer2"] === "yes") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたは問題解決能力が備わっていると考えられます。
                  </p>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

        </div>

        <!-- コミュニケーション -->
        <div class="answers" id="komini" >

          <!-- No.3 -->
          <div class="monndai">
            <h2 class="answer_h2">コミュニケーション(雑談力)
            </h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer3"] === "no") {?>

                <li class="answer_li book">
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18228021&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3550%2F9784905073550.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >超一流の雑談力「超・実践編」 [ 安田正 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">超一流の雑談力「超・実践編」 [ 安田正 ]</h4>
                    <p class="answer_text_p"> この本は、ビジネスマン向けコミュニケーション(雑談力)の実践型本になります。そして本書の中で会話例がたくさん出てきますので分かりやすい本になっています。</p>
                  </div>
                </li>

                <li class="answer_li mov">
                  <iframe src="https://www.youtube.com/embed/-SMVyQAu8XM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="answer_mov_text">
                    <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4_2">【一流の雑談力①】<br/>コミュ力を身につければ仕事も人間関係も良くなる</h4>
                    <p class="answer_text_p"> YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す「雑談の一流、二流、三流」という本を参考にした【一流の雑談力】についての動画です。</p>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer3"] === "yes") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたは雑談力が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=16270527&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7210%2F9784478017210.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >伝え方が9割 [ 佐々木圭一 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">伝え方が9割 [ 佐々木圭一 ]</h4>
                    <p class="answer_text_p"> この本は、仕事から日常生活、恋愛などの伝えるコミュニケーション全般に適している本です。ノーをイエスに変える技術を、「３つのステップ」と「7つの切り口」で紹介しています。</p>
                  </div>
                </li>

                <li class="answer_li mov">
                  <iframe src="https://www.youtube.com/embed/lLHGUlMbti0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="answer_mov_text">
                    <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4_2">【話し方の極意】<br/>なぜあなたの話は分かりにくいのか</h4>
                    <p class="answer_text_p"> YouTubeチャンネル登録者80万人を超える、マコなり社長が話す「話し方の極意」なぜ伝わらないかを深掘りしていき、伝わる改善方法を知ることができる内容です。非常に聴きやすく、分かりやすい動画になっています。</p>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer5"] === "no") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたは伝える力が備わっていると考えられます。
                  </p>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

        </div>

        <!-- 技術 -->
        <div class="answers" id="gizyutu" >

          <!-- No.6 -->
          <div class="monndai">
            <h2 class="answer_h2">ITの基礎知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer6"] === "no") {?>

                <li class="answer_li book">
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=20175716&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7818%2F9784297117818.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >キタミ式イラストIT塾 基本情報技術者 令和03年 [ きたみりゅうじ ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3d8155cccd85b81a04fa9be3da98b4bd%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">キタミ式イラストIT塾 基本情報技術者 令和03年</h4>
                    <p class="answer_text_p">「基本情報技術者試験」受験者向けに作られた本です。イラストが非常に多く分かりやすい本であるため、情報系に精通していない方にも文系の方にもオススメ出来ます！</p>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer6"] === "yes") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたはITの基礎知識が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19388880&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5094%2F9784295005094.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるSQL入門第2版 ドリル222問付き！ [ フレアリンク ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">スッキリわかるSQL入門第2版 ドリル222問付き！</h4>
                    <p class="answer_text_p">データベース言語であるSQLを基礎から学ぶことが出来る本です。200問超のドリル付きで、環境構築なしに始められるので「はじめて」の方にオススメ出来る本です！</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php }elseif ($_SESSION["array"]["answer7"] === "2") {?>
                
                <li class="answer_li book">
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19388880&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5094%2F9784295005094.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるSQL入門第2版 ドリル222問付き！ [ フレアリンク ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc499627bc4a2d5a39e38b6636fd88cb5%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">スッキリわかるSQL入門第2版 ドリル222問付き！</h4>
                    <p class="answer_text_p">データベース言語であるSQLを基礎から学ぶことが出来る本です。200問超のドリル付きで、環境構築なしに始められるので「はじめて」の方にオススメ出来る本です！</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php }elseif ($_SESSION["array"]["answer7"] === "3") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたはデータベースの経験が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18347568&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0657%2F9784865940657.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >気づけばプロ並みPHP 改訂版ーーゼロから作れる人になる！ [ 谷藤賢一 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">気づけばプロ並みPHP 改訂版</h4>
                    <p class="answer_text_p">PHPは、webシステムの構築に欠かせません。「PHPって何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer8"] === "2") {?>

                <li class="answer_li book">
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18347568&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0657%2F9784865940657.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >気づけばプロ並みPHP 改訂版ーーゼロから作れる人になる！ [ 谷藤賢一 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F1c56910a8f93b72b99f83e3b90734bcb%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">気づけばプロ並みPHP 改訂版</h4>
                    <p class="answer_text_p">PHPは、webシステムの構築に欠かせません。「PHPって何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php }  elseif($_SESSION["array"]["answer8"] === "3") {?>

                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer8"] === "4" || $_SESSION["array"]["answer8"] === "5") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたはPHPの経験が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19618476&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6329%2F9784295006329.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるPython入門 [ フレアリンク ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">スッキリわかるPython入門</h4>
                    <p class="answer_text_p">「Pythonって何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer9"] === "2") {?>

                <li class="answer_li book">
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19618476&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6329%2F9784295006329.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるPython入門 [ フレアリンク ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2844d59961f19a57a0ffbacae7a40273%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">スッキリわかるPython入門</h4>
                    <p class="answer_text_p">Pythonは軽く触ったことがある！」といった方はこの本で基礎を固めてしまいましょう！</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php }  elseif($_SESSION["array"]["answer9"] === "3") {?>

                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer9"] === "4" || $_SESSION["array"]["answer9"] === "5") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたはPythonの経験が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19815844&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7807%2F9784295007807.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門第3版 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">スッキリわかるJava入門</h4>
                    <p class="answer_text_p">「Javaって何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer10"] === "2") {?>
                <li class="answer_li book">
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19815844&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7807%2F9784295007807.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるJava入門第3版 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fee5cedff9e577d428e946d99101a96af%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">スッキリわかるJava入門</h4>
                    <p class="answer_text_p">「Javaは軽く触ったことがある！」といった方はこの本で基礎を固めてしまいましょう！</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer10"] === "3") {?>
                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer10"] === "4" || $_SESSION["array"]["answer10"] === "5") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたはJavaの経験が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19149994&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3687%2F9784295003687.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるC言語入門 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">スッキリわかるC言語入門</h4>
                    <p class="answer_text_p">「C言語って何をするもの？」といった全く知らない方にもオススメ出来る本となっています。</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer11"] === "2") {?>

                <li class="answer_li book">
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19149994&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3687%2F9784295003687.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるC言語入門 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">スッキリわかるC言語入門</h4>
                    <p class="answer_text_p">「C言語は軽く触ったことがある！」といった方はこの本で基礎を固めてしまいましょう！</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer11"] === "3") {?>
                
                <li class="answer_li book">
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19149994&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3687%2F9784295003687.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >スッキリわかるC言語入門 [ 中山清喬 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3250f17bc4fdb18a80173d3f60e43279%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">スッキリわかるC言語入門</h4>
                    <p class="answer_text_p">「C言語の基礎を固めた！」という方はこの本で知識の抜けがないか最終確認をしましょう！</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php } elseif($_SESSION["array"]["answer11"] === "4" || $_SESSION["array"]["answer11"] === "5") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたはC言語の経験が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18563354&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0594%2F9784799320594.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >原田隆史監修 目標達成ノート STAR PLANNER (スタープランナー) 日付記入式手帳 [ 原田 隆史 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">目標達成ノート</h4>
                    <p class="answer_text_p">目標を決めずにダラダラと過ごしてしまう方に向けた本です。「本気で変わりたいけど、やらなきゃいけない事を後回しにしてしまう方」にオススメの一冊です！</p>
                  </div>
                </li>

                <li class="answer_li mov">
                  <iframe src="https://www.youtube.com/embed/i08kXjY9h_c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="answer_mov_text">
                    <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4_2">【ありえないスピードで成長する、最強の目標設定術「MACの原則」とは？</h4>
                    <p class="answer_text_p">YouTubeチャンネル登録者約60万人のブレイクスルー佐々木さんが話す【最強の目標設定術「MACの原則」】についての動画です。</p>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer13"] === "yes") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                  あなたは目標設定能力が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19254061&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8820%2F9784309248820.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >倒れない計画術 まずは挫折・失敗・サボりを計画せよ！ [ メンタリストDaiGo ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">倒れない計画術 まずは挫折・失敗・サボりを計画せよ！</h4>
                    <p class="answer_text_p">メンタリストのDaiGoさんが書かれた一冊です。科学的根拠を基に手法が書いてある本なのですぐに実践が可能であるため、「時間管理が苦手な方」にオススメの一冊です！</p>
                  </div>
                </li>

                <li class="answer_li mov">
                  <iframe src="https://www.youtube.com/embed/z04rQ5YWghc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="answer_mov_text">
                    <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4_2">計画倒れの99%はコレが原因</h4>
                    <p class="answer_text_p">計画を着実に実行するための具体的な方法論を解説した動画です。計画を立てるのが苦手な方は是非ご参照ください！</p>
                  </div>
                </li>
                  
              <?php }elseif ($_SESSION["array"]["answer14"] === "yes") {?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたは計画力が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17480542&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1527%2F9784478061527.gif%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >社内プレゼンの資料作成術 [ 前田鎌利 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">社内プレゼンの資料作成術</h4>
                    <p class="answer_text_p">あの孫正義社長が「一発OK」を連発した社内プレゼン術が書かれた本です。「プレゼンがもっと上手になりたい！」という方にオススメの一冊です！</p>
                  </div>
                </li>

                <li class="answer_li mov">
                  <iframe src="https://www.youtube.com/embed/ovxorfBOVRE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="answer_mov_text">
                    <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4_2">プレゼンの準備の仕方と正しい練習法</h4>
                    <p class="answer_text_p">YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す【プレゼンの準備の仕方と練習法】についての動画です。プレゼンに苦手意識がある方は是非ご参照ください！</p>
                  </div>
                </li>

              <?php }else{?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたはプレゼンテーション能力が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=10970613&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4925%2F49253112.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ロジカル・シンキング 論理的な思考と構成のスキル （Best solution） [ 照屋華子 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">ロジカル・シンキング 論理的な思考と構成のスキル</h4>
                    <p class="answer_text_p">コンサルティング会社であるマッキンゼーのエディターが書いた、30万部突破の大ヒットロングセラー本です。「論理的思考力をつけたい！」という方にオススメの一冊です！</p>
                  </div>
                </li>

              <?php }else{?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたは論理的思考力が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f9dd79e.be22bbd9.1f9dd79f.22b2f4b6/?me_id=1275488&item_id=11267032&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F217%2F0015491054l.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 90分で学べるIT提案力 ／小野泰稔【著】 【中古】afb</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">90分で学べるIT提案力</h4>
                    <p class="answer_text_p">提案型SEを目指す人にとっては非常に分かりやすく、役に立つ本です。「提案力をつけたい！」という方にオススメの一冊です！</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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
                </li>

              <?php }else{?>
                <li class="no_answer_li">
                  <p class="no_answer_li_p">
                    あなたはヒアリング能力が備わっていると考えられます。
                  </p>
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
                  <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=14434816&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7093%2F9784820747093.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >図解でよくわかるSEのための業務知識 [ 克元亮 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F91fbe3d551af07b6c9f17f5e40b4b1a8%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <div class="answer_book_text">
                    <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                    <hr class="text_h3_hr">
                    <h4 class="answer_text_h4">図解でよくわかるSEのための業務知識</h4>
                    <p class="answer_text_p">SEに必要な業務知識を、全業種に共通するコア業務のポイントと業種ごとに特徴的な業務のポイントに分けて解説した本です。「SEの業務について知りたい！」と言う方にオススメの一冊です！</p>
                  </div>
                </li>

                <li class="answer_li sonota">
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