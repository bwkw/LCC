<?php
session_start();
$_SESSION["URL"] = $_SERVER['REQUEST_URI'];

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
    <link rel="stylesheet" href="home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php if ($_SESSION["computer"] === "pc") { ?>
    <link rel="stylesheet" href="home_pc.css">
    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
      <link rel="stylesheet" href="home_phone.css">
  <?php } ?>
    <title>service</title>
</head>
<body>

      <div class="service_all">
        <div class="service_div"><span class="service">サービス&nbsp;:</span><br class="br"><span class="service_title">IT職種を目指すための自己分析</span></div>
        <div class="service_for">このサービスは、「将来IT人材になりたい！」と考えている方向けのサービスです。</div>
      </div>

      <div class="what_service">
          <div class="service_description">
              昨今の目まぐるしいITの進歩に伴い、IT人材の需要が今後益々高まっていくことが予測されます。<br>
              ただ、「IT人材に興味はあるけど、何をしたら良いか分からない...」という方が多いのではないのでしょうか？<br>
              このサービスでは、IT人材になる上で不足したスキルを特定し、そのスキルを補うコンテンツを紹介しています。<br>
              IT人材になるための一歩を今、踏み出しませんか？
          </div>
      </div>
    
      <div class="job">
          <div class="job_list">
              <img src="https://img.icons8.com/ios-glyphs/30/000000/laptop.png"/>
              <span>職種一覧</span>
          </div>

          <div class="job_div">
            <img src="https://img.icons8.com/ios/50/000000/cloud-development.png"/>
            <span>開発職</span>
          </div>
          <div class="job_type">
            <ul>
              <li>
                <a href="" class="job_type_a">フロントエンドエンジニア</a>
              </li>
              <li>
                <a href="" class="job_type_a">バックエンドエンジニア</a>
              </li>
              <li>
                <a href="" class="job_type_a">データベースエンジニア</a>
              </li>
              <li>
                <a href="" class="job_type_a">ネットワークエンジニア</a>
              </li>
              <li>
                <a href="" class="job_type_a">サーバーエンジニア</a>
              </li>
              <li>
                <a href="" class="job_type_a">組み込み系/IOTエンジニア</a>
              </li>
              <li>
                <a href="" class="job_type_a">アプリケーションエンジニア</a>
              </li>
              <li>
                <a href="" class="job_type_a">クラウドエンジニア</a>
              </li>
              <li>
                <a href="http://co-19-216.99sv-coco.com/lcc/service/In-house-SE/page1.php" class="job_type_a">社内SE</a>
              </li>
              <li>
                <a href="" class="job_type_a">Webデザイナー</a>
              </li>
            </ul>
          </div>

          <div class="job_div">
            <img src="https://img.icons8.com/wired/64/000000/new-job.png"/>
            <span>営業・コンサルタント職</span>
          </div>
          <div class="job_type">
            <ul>
              <li>
                <a href="" class="job_type_a">セールスエンジニア</a>
              </li>
              <li>
                <a href="" class="job_type_a">ITコンサルタント</a>
              </li>
            </ul>
          </div>

          <div class="job_div">
            <img src="https://img.icons8.com/wired/64/000000/marketing.png"/>
            <span>マーケティング職</span>
          </div>
          <div class="job_type">
            <ul>
              <li>
                <a href="" class="job_type_a">Webマーケター</a>
              </li>
              <li>
                <a href="" class="job_type_a">データアナリスト</a>
              </li>
            </ul>
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
                    <img class="img_lcc"src="../img/4040.png">
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