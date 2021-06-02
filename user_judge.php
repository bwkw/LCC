<?php
session_start();
$_SESSION["computer"] = "";
$com = "";

//ユーザーエージェント
if (isset($_SERVER['HTTP_USER_AGENT'])) {
  $ua = $_SERVER['HTTP_USER_AGENT'];
} else {
  $ua = "";
}

if ($_SESSION["computer"]  === null || $_SESSION["computer"]  === "") {
  if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
      // スマートフォンからアクセスされた場合
      header("Location: http://co-19-216.99sv-coco.com" . $_SESSION["URL"]);
      $_SESSION["computer"] = "phone";
      exit;

  } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
      // タブレットからアクセスされた場合
      header("Location: http://co-19-216.99sv-coco.com" . $_SESSION["URL"]);
      $_SESSION["computer"] = "phone";
      exit;

  } elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
      // 携帯からアクセスされた場合
      header("Location: http://co-19-216.99sv-coco.com" . $_SESSION["URL"]);
      $_SESSION["computer"] = "phone";
      exit;

  } else {
      // その他（PC）からアクセスされた場合
      header("Location: http://co-19-216.99sv-coco.com" . $_SESSION["URL"]);
      $_SESSION["computer"] = "pc";
      exit;
  }
} else {
  header("Location: http://co-19-246.99sv-coco.com" . $_SESSION["URL"]);
  exit;
}

echo $_SESSION["computer"];
echo $ua;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>