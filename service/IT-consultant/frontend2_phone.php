<?php
session_start();
$occupation="ITコンサルタント";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend2_phone.css">
    <title><?php echo $occupation;?></title>
</head>

<body>

<?php if($_SESSION["array"] !== "") {?>

<h1><?php echo $occupation;?></h1>

<div class="description_div">
  <p class="description">
    あなたが<?php echo $occupation;?>になる上で、力不足な項目に対して、本・動画・その他コンテンツ（記事、Webサービス等）をおすすめしています。</br>
  </p>
  <p class="cau_description">
   ※ 以下の『問題解決能力』/『コミュニケーション能力』/『必須スキル・専門知識』は押すとページが切り替わります！
  </p>
</div>

<div class="midasi_div">
  <h2 class="midasi_h2_1 active" data-id="monndai">問題解決能力</h2>
  <h2 class="midasi_h2_1" data-id="komini">コミュニケーション能力</h2>
  <h2 class="midasi_h2_1" data-id="gizyutu">必須スキル・専門知識</h2>
</div>

    <!-- No.1,2 -->
    <div class="kekka active" id="monndai">
      <div class="kkk">
        <h2 class="kekka_1_p">問題解決能力</h2>
        <?php if($_SESSION["array"]["answer2"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">世界一やさしい問題解決の授業</h4>
                <p class="guide_des">ロジカルシンキング ・問題解決の考え方を中高生にもわかるように解説した本です。薄くてわかりやすいく、内容的には十分で、10年以上支持され続けている本でもあります。</p>
          </div> 
          <div class="xxx">
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=12062570&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0496%2F9784478000496.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >世界一やさしい問題解決の授業 [ 渡辺健介 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
          <hr>
          <div class="xxx guide">
            <h3 class="kekka_1_a mov">あなたにおすすめの動画</h3>
              <h4 class="guide_title">一生モノの問題解決メソッド｜<br/>あとから条件が整ってくる『宇宙の法則』</h4>
                <p class="guide_des">YouTube講演家 鴨頭嘉人（かもがしら よしひと）さんの経験から話す、問題解決への行動力やそのやり方、条件についての動画です。</p>
          </div> 
          <div class="xxx"> 
            <iframe  width="288" height="162" src="https://www.youtube.com/embed/aL2KGPuDLQ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php } elseif ($_SESSION["array"]["answer2"] === "yes") {?>
          <p class="message">あなたは問題解決能力が備わっていると考えられます。</p>
        <?php }?>
      </div>
    </div>

    <!-- No.3 -->
    <div class="kekka" id="komini">
      <div class="kkk">
        <h2 class="kekka_1_p">雑談力</h2>
        <?php if($_SESSION["array"]["answer3"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">超一流の雑談力「超・実践編」</h4>
                <p class="guide_des">ビジネスマン向けコミュニケーション(雑談力)の実践型本になります。そして本書の中で会話例がたくさん出てきますので分かりやすい本になっています。</p>
          </div> 
          <div class="xxx">
            <table  border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18228021&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3550%2F9784905073550.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >超一流の雑談力「超・実践編」 [ 安田正 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
          <hr>
          <div class="xxx guide">
            <h3 class="kekka_1_a mov">あなたにおすすめの動画</h3>
              <h4 class="guide_title">一流の雑談力①</br>コミュ力を身につければ仕事も人間関係も良くなる</h4>
                <p class="guide_des">YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す「雑談の一流、二流、三流」という本を参考にした【一流の雑談力】についての動画です。</p>
          </div> 
          <div class="xxx"> 
            <iframe  width="288" height="162" src="https://www.youtube.com/embed/-SMVyQAu8XM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php } elseif ($_SESSION["array"]["answer3"] === "yes") {?>
          <p class="message">あなたは雑談力が備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.4.5 -->
      <div class="kkk">
        <h2 class="kekka_1_p">伝える力</h2>
        <?php if(($_SESSION["array"]["answer4"] === "yes") || ($_SESSION["array"]["answer5"] === "yes")) {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">伝え方が9割 [ 佐々木圭一 ]</h4>
                <p class="guide_des">仕事から日常生活、恋愛などの伝えるコミュニケーション全般に適している本です。ノーをイエスに変える技術を、「３つのステップ」と「7つの切り口」で紹介しています。</p>
          </div> 
          <div class="xxx">
            <table  border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=16270527&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7210%2F9784478017210.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >伝え方が9割 [ 佐々木圭一 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
          <hr>
          <div class="xxx guide">
            <h3 class="kekka_1_a mov">あなたにおすすめの動画</h3>
              <h4 class="guide_title">【話し方の極意】<br/>なぜあなたの話は分かりにくいのか</h4>
                <p class="guide_des">YouTubeチャンネル登録者80万人を超える、マコなり社長が話す「話し方の極意」なぜ伝わらないかを深掘りしていき、伝わる改善方法を知ることができる内容です。非常に聴きやすく、分かりやすい動画になっています。</p>
          </div> 
          <div class="xxx">
            <iframe  width="288" height="162" src="https://www.youtube.com/embed/lLHGUlMbti0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php } else{?>
          <p class="message">あなたは伝える力が備わっていると考えられます。</p>
        <?php }?>
      </div>
    </div>
    
    <!-- No.6 -->
    <div class="kekka" id="gizyutu">
      <div class="kkk">
        <h2 class="kekka_1_p">SIについての知識</h2>
        <?php if($_SESSION["array"]["answer6"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">ITサービス</h4>
                <p class="guide_des">IT業界の中でも、システムインテグレータ（SIer）に焦点を当てた書籍になります。具体的な業務内容をイメージ出来るので、この業界に行きたい人は読んでおくことをオススメします！</p>
          </div> 
          <div class="xxx">
            <a class="recommend_noimage" target="_blank" rel="noopener noreferrer" href="https://www.amazon.co.jp/dp/4532117216?tag=maftracking256294-22&linkCode=ure&creative=6339">ITサービス</a>
          </div> 
        <?php } elseif ($_SESSION["array"]["answer6"] === "yes") {?>
          <p class="message">あなたはSIについての知識が備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.7,8 -->
      <div class="kkk">
        <h2 class="kekka_1_p">目標設定能力</h2>
        <?php if($_SESSION["array"]["answer8"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">目標達成ノート</h4>
                <p class="guide_des">目標を決めずにダラダラと過ごしてしまう方におすすめの一冊となっています。「本気で変わりたいけど、やらなきゃいけない事を後回しにしてしまう方」にオススメの一冊です！</p>
          </div> 
          <div class="xxx">
            <table  border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=18563354&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0594%2F9784799320594.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcf09543b51fceb8df57a09774c94bd04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >原田隆史監修 目標達成ノート STAR PLANNER (スタープランナー) 日付記入式手帳 [ 原田 隆史 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
          <hr>
          <div class="xxx guide">
            <h3 class="kekka_1_a mov">あなたにおすすめの動画</h3>
              <h4 class="guide_title">ありえないスピードで成長する、最強の目標設定術「MACの原則」とは？</h4>
                <p class="guide_des">YouTubeチャンネル登録者約60万人のブレイクスルー佐々木さんが話す【最強の目標設定術「MACの原則」】についての動画です。</p>
          </div> 
          <div class="xxx">
            <iframe  width="288" height="162" src="https://www.youtube.com/embed/i08kXjY9h_c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php } elseif ($_SESSION["array"]["answer14"] === "yes") {?>
          <p class="message">あなたは目標設定能力が備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.9 -->
      <div class="kkk">
        <h2 class="kekka_1_p">計画力</h2>
        <?php if($_SESSION["array"]["answer9"] === "yes") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">倒れない計画術 まずは挫折・失敗・サボりを計画せよ！</h4>
                <p class="guide_des">メンタリストDaiGoさんの一冊です。科学的根拠を基に手法が書いてある本なのですぐに実践が可能であるため、「時間管理が苦手な方」にオススメの一冊です！</p>
          </div> 
          <div class="xxx">  
            <table  border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19254061&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8820%2F9784309248820.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F651ccfee355ee41788772b1112261764%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >倒れない計画術 まずは挫折・失敗・サボりを計画せよ！ [ メンタリストDaiGo ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
          <hr>
          <div class="xxx guide">
            <h3 class="kekka_1_a mov">あなたにおすすめの動画</h3>
              <h4 class="guide_title">計画倒れの99%はコレが原因</h4>
                <p class="guide_des">計画を着実に実行するための具体的な方法論を解説した動画です。計画を立てるのが苦手な方は是非ご参照ください。</p>
          </div> 
          <div class="xxx">
            <iframe  width="288" height="162" src="https://www.youtube.com/embed/z04rQ5YWghc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php } elseif ($_SESSION["array"]["answer15"] === "no") {?>
          <p class="message">あなたは計画力が備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.10,11 -->
      <div class="kkk">
        <h2 class="kekka_1_p">プレゼンテーション能力</h2>
        <?php if(($_SESSION["array"]["answer10"] === "no")&&($_SESSION["array"]["answer11"] === "no")) {?>
          <p class="message">あなたはプレゼンテーション能力が備わっていると考えられます。</p>
        <?php }else {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">社内プレゼンの資料作成術</h4>
                <p class="guide_des">あの孫正義社長が「一発OK」を連発した社内プレゼン術が書かれた本です。「プレゼンがもっと上手になりたい！」という方にオススメの一冊です！</p>
          </div> 
          <div class="xxx">
            <table  border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17480542&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1527%2F9784478061527.gif%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F3dad772e68069bf67ffadf2930f41fc8%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >社内プレゼンの資料作成術 [ 前田鎌利 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
          <hr>
          <div class="xxx guide">
            <h3 class="kekka_1_a mov">あなたにおすすめの動画</h3>
              <h4 class="guide_title">プレゼンの準備の仕方と正しい練習法</h4>
                <p class="guide_des">YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す【プレゼンの準備の仕方と練習法】についての動画です。プレゼンに苦手意識がある方は是非ご参照ください。</p>
          </div> 
          <div class="xxx">
            <iframe  width="288" height="162" src="https://www.youtube.com/embed/ovxorfBOVRE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php }?>
      </div>

      <!-- No.12 -->
      <div class="kkk">
        <h2 class="kekka_1_p">やれば出来るというマインド</h2>
        <?php if($_SESSION["array"]["answer12"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">マインドセット 「やればできる！」の研究</h4>
                <p class="guide_des">スタンフォード大学発の世界的ベストセラー本です。失敗した時に落ち込んでしまいがちな方、自分に自信がない方にオススメの一冊です！</p>
          </div> 
          <div class="xxx">
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F29885a717a49cf21b014c29b32d813fd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1fb6a18d.09e14c76.1fb6a18e.fc835c27/?me_id=1273418&item_id=13817103&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fvaboo%2Fcabinet%2Fbooks153%2F9784794221780.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F29885a717a49cf21b014c29b32d813fd%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】マインドセット 「やればできる！」の研究 /草思社/キャロル・S．ドウェック（単行本（ソフトカバー））</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
        <?php } else{?>
          <p class="message">あなたはやれば出来るというマインドが備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.13 -->
      <div class="kkk">
        <h2 class="kekka_1_p">ストレス耐性</h2>
        <?php if($_SESSION["array"]["answer13"] === "yes") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">ストレスを操るメンタル強化術</h4>
                <p class="guide_des">メンタリストのDaiGoさんが書かれた一冊です。メンタルが弱い人でも無理なく強いメンタルを手に入れられるノウハウが書かれています。</p>
          </div> 
          <div class="xxx">
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6df6120e403368e0625159e10b29a41e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19837127&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4662%2F9784046044662.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6df6120e403368e0625159e10b29a41e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ストレスを操るメンタル強化術 （角川文庫） [ メンタリスト　DaiGo ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
          <hr>
          <div class="xxx guide">
            <h3 class="kekka_1_a mov">あなたにおすすめの動画</h3>
              <h4 class="guide_title">【ストレスに負けず、疲れにくい人になる方法</h4>
                <p class="guide_des">YouTubeチャンネル登録者約230万人のメンタリストDaiGoさんによる、ストレスに打ち勝つ方法が分かる動画です。</p>
          </div> 
          <div class="xxx">
            <iframe width="288" height="162" src="https://www.youtube.com/embed/Nh9rAy7T5Q4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php } else{?>
          <p class="message">あなたはストレス耐性が備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.14 -->
      <div class="kkk">
        <h2 class="kekka_1_p">目的思考</h2>
        <?php if($_SESSION["array"]["answer1"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">「目的思考」で学びが変わる</h4>
                <p class="guide_des">定期テストや宿題を廃止するなどの学校の既成概念を打ち破り、公立中学としては画期的な改革を次々と行う、麹町中学校の工藤校長の思考法が書かれた本です。目的と手段が混ざってしまう方にオススメの一冊です！</p>
          </div> 
          <div class="xxx">
          <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa82dbc7d041af8f6bcbd2fabb11b6084%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19482163&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F2132%2F9784863102132.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fa82dbc7d041af8f6bcbd2fabb11b6084%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >「目的思考」で学びが変わる 千代田区立麹町中学校長・工藤勇一の挑戦 [ 多田慎介 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
        <?php } else{?>
          <p class="message">あなたは目的思考が備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.15 -->
      <div class="kkk">
        <h2 class="kekka_1_p">仮説思考</h2>
        <?php if($_SESSION["array"]["answer15"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">仮説思考 BCG流問題発見・解決の発想法</h4>
                <p class="guide_des">BCG（ボストン・コンサルティング・グループ）のコンサルタントが3倍速で仕事を進められる秘訣が書かれた本です。物事に取り掛かる時に、徹底的に情報を調べてしまうという方にオススメの一冊です！</p>
          </div> 
          <div class="xxx">
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc128f30427c115aed8928ad76e3788c3%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1fb6a18d.09e14c76.1fb6a18e.fc835c27/?me_id=1273418&item_id=13441191&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fvaboo%2Fcabinet%2Fbooks012%2F9784492555552.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc128f30427c115aed8928ad76e3788c3%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】仮説思考 BCG流問題発見・解決の発想法 /東洋経済新報社/内田和成（単行本）</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
          <hr>
          <div class="xxx guide">
            <h3 class="kekka_1_a mov">あなたにおすすめの動画</h3>
              <h4 class="guide_title">【エリートの仕事術】仕事力とは「仮説力」である</h4>
                <p class="guide_des">YouTubeチャンネル登録者約90万人のマコなり社長による、「仮説を立てる」仕事術を知ることが出来る動画です。</p>
          </div> 
          <div class="xxx">
          <iframe width="288" height="162" src="https://www.youtube.com/embed/pf4eLy22ZCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php } else{?>
          <p class="message">あなたは仮説思考が備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.16 -->
      <div class="kkk">
        <h2 class="kekka_1_p">ロジカルシンキング</h2>
        <?php if($_SESSION["array"]["answer16"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">ロジカルシンキング</h4>
                <p class="guide_des">コンサルティング会社であるマッキンゼーのエディターが書いた、30万部突破の大ヒットロングセラー本です。「論理的思考力をつけたい！」という方にオススメの一冊です！</p>
          </div> 
          <div class="xxx">
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=10970613&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4925%2F49253112.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Faf86865801b564b2efdb7c53c40fff85%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ロジカル・シンキング 論理的な思考と構成のスキル （Best solution） [ 照屋華子 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
        <?php } else{?>
          <p class="message">あなたはロジカルシンキングが備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.17 -->
      <div class="kkk">
        <h2 class="kekka_1_p">感情コントロール力</h2>
        <?php if($_SESSION["array"]["answer17"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">マッキンゼーで学んだ感情コントロールの技術</h4>
                <p class="guide_des">マッキンゼーなどトップコンサルタントやビジネスエリートたちが行う感情コントロールの技術が公開されている本です。感情を上手にコントロール出来ない方にオススメの一冊です！</p>
          </div> 
          <div class="xxx">
          <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F4f9dc76dba04af7cf2cdb5ac58d54993%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=19289162&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1022%2F9784413231022.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F4f9dc76dba04af7cf2cdb5ac58d54993%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >マッキンゼーで学んだ感情コントロールの技術 [ 大嶋祥誉 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
        <?php } else{?>
          <p class="message">あなたは感情コントロール力が備わっていると考えられます。</p>
        <?php }?>
      </div>

      <!-- No.18 -->
      <div class="kkk">
        <h2 class="kekka_1_p">ヒアリング能力</h2>
        <?php if($_SESSION["array"]["answer18"] === "no") {?>
          <div class="xxx guide">
            <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
              <h4 class="guide_title">90分で学べるIT提案力</h4>
                <p class="guide_des">提案型SEを目指す人にとっては非常に分かりやすく、役に立つ本です。「提案力をつけたい！」という方にオススメの一冊です！</p>
          </div> 
          <div class="xxx">
            <table  border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1ef6bd9a.60161acf.1ef6bd9b.00abb1de/?me_id=1312635&item_id=11208309&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_gold%2Fd-book%2Fimg%2F9784822282806.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F329b98e719d6bcbc7c731d0564c27724%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >90分で学べる IT提案力 小野 泰稔9784822282806【中古】</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
          </div>
          <hr>
          <div class="xxx guide">
            <h3 class="kekka_1_a sonota">あなたにおすすめの記事</h3>
              <h4 class="guide_title">顧客の要望を聞き漏らさないヒアリング能力向上のコツ</h4>
                <p class="guide_des">この記事では、ヒアリング能力を向上させることが出来るとっておきのトレーニングが紹介されています。「ヒアリング能力を向上させたい！」と言う方は是非ご参照ください。</p>
          </div> 
          <div class="xxx">
            <a class="recommend_noimage" target="_blank" rel="noopener noreferrer" href="https://xtech.nikkei.com/it/article/COLUMN/20070808/279390/">ヒアリング能力向上のコツ</a>
          </div>
        <?php } else{?>
          <p class="message">あなたはヒアリング能力が備わっていると考えられます。</p>
        <?php }?>
      </div>
    </div>
    
    <!-- No.19 -->
    <?php if($_SESSION["array"]["answer19"] === "yes") {?>
      <div class=total>
        <div class="kkk">
          <h2 class="kekka_1_p"><?php echo $occupation;?>について</h2>
            <div class="xxx guide">
              <h3 class="kekka_1_a book">あなたにおすすめの本</h3>
                <h4 class="guide_title">コンサル一年目が学ぶこと</h4>
                  <p class="guide_des">コンサルをはじめとする、様々な業界でビジネスに携わる人が『基礎力』として持ち合わせておく必要のあるスキルを取り上げた本です。</p>
            </div> 
            <div class="xxx">
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0ed337b5885a3038cb659ac52a92919e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1e560d19.7d530fa8.1e560d1a.12c6b470/?me_id=1213310&item_id=17038618&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F5323%2F9784799315323.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1e560d1b.2305fe5b.1e560d1c.930dd8f1/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0ed337b5885a3038cb659ac52a92919e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >コンサル一年目が学ぶこと [ 大石 哲之 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
            </div>
            <hr>
            <div class="xxx guide">
              <h3 class="kekka_1_a sonota">あなたにおすすめの記事</h3>
                <h4 class="guide_title">ITコンサルタントの仕事内容、やりがい、向いている人を徹底解説</h4>
                  <p class="guide_des">この記事では、ITコンサルタントの仕事の内容から最近の動向まで広く解説されています。「ITコンサルタントについてもっと詳しく知りたい！」と言う方は是非ご参照ください。</p>
            </div> 
            <div class="xxx">
            <a class="recommend_noimage" target="_blank" rel="noopener noreferrer" href="https://type.jp/tensyoku-knowhow/ready/catalog/it-consultant/"><p class="no_image_p">ITコンサルタントのやりがい</p></a>
            </div>   
        </div>
      </div>
    <?php }?>

    <form style="width: 100%; margin: 50px auto 50px;" class="kaitou_form" action="http://co-19-216.99sv-coco.com/service1/In-house-SE/front1_rakuten.php" method="post" class="form">
      <input style="width: 100px; height: 30px; margin: 0 auto; display: block;" type="submit" name="returu" value="終了する">
    </form >

<?php } elseif ($_SESSION["array"] == "") {?>
  <form style="width: 100%; margin: 50px auto 50px;" class="kaitou_form" action="http://co-19-216.99sv-coco.com/service1/In-house-SE/front1_rakuten.php" method="post" class="form">
    <input style="width: 100px; height: 30px; margin: 0 auto; display: block;" type="submit" name="returu" value="終了する">
  </form >
<?php }?>

  <script>

    'use strict';
    {
      const midasi = document.querySelectorAll('.midasi_h2_1');
      const kekka = document.querySelectorAll('.kekka');
      console.log(midasi);
      console.log(kekka);
      midasi.forEach(clickedItem => {
        clickedItem.addEventListener('click', () => {
          
          midasi.forEach(item => {
            item.classList.remove('active');
          });
          clickedItem.classList.add('active');
          
          kekka.forEach(kekkaItem => {
            kekkaItem.classList.remove('active');
          });
          document.getElementById(clickedItem.dataset.id).classList.add('active');
        });
      });
    }

  </script>

</body>
</html>