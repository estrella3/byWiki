<?php
$is_file = file_exists('./setting.php');
if($is_file == TRUE){
include 'setting.php';
}else{
echo '<script>window.location.href = "./install/index.php";</script>';
}
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $bySiteFab;?>" type="image/x-icon">
    <meta name="description" content="<?php echo $bySiteDesc;?>">
    <meta name="theme-color" content="<?php echo $bySiteColor;?>">
    <title><?php echo $bySiteTitle;?></title>
    <link rel="stylesheet" href="assets/minified/themes/default.min.css" />
<script src="assets/minified/sceditor.min.js"></script>
<link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="navbar.css" rel="stylesheet">
  </head>
  <body style="background-color: <?php echo $bySiteSubColor;?>">
<!-- 사전 정의 -->
<header style="display: none">
  <!-- 구글 사이트 관리 -->
<?php echo $bySite_google; ?>
 <!-- PHP DB 연결 및 세션 시작 -->
                                <?php
session_start();
$conn = mysqli_connect("$bySiteDB", "$bySiteDBuser", "$bySiteDBpw", "$bySiteDBname");
                                ?>
</header>
<!-- 상단바 시작 -->
<nav class="navbar navbar-expand" style="background-color: <?php echo $bySiteColor;?>">
  <div class="container">
    <a class="navbar-brand text-white" href="<?php echo $bySite;?>"><?php echo $bySiteName;?></a>
    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">기능</a>
          <div class="dropdown-menu" aria-labelledby="dropdown07">
            <a class="dropdown-item" href="board.php">위키 토론</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="random.php">임의 문서로</a>
            <a class="dropdown-item" href="upload.php">파일 올리기</a>
          </div>
          <li class="nav-item dropdown">
          <button class="btn btn-link text-white" onclick="openUp()">검색</button>
          <form>
          <script>
          function openUp(){
              var opendiv = document.getElementById('openup');
              if(opendiv.style.display == 'none'){
                  opendiv.style.display = 'block';
              }else{
                  opendiv.style.display = "none";
              }
          }
          </script>
          </form>
        </li>
        </li>
      </ul>
  </div>
<?php
if(!empty($_SESSION['userid'])){
      echo '<div class="dropdown"><a class="btn btn-outline-primary" style="background-color: #fff" class="dropdown-toggle" href="login.php?log=out">'.$_SESSION['userck'].'</a>';
}else{
      echo '<a class="btn btn-outline-primary" style="background-color: #fff" href="login.php">로그인</a>';
}
?>
</nav>
          <form action="search.php" method="post" id="openup" style="display: none">
            <a><input class="form-control" type="text" name="title"></a>
            <a><button class="btn btn-primary form-control" type="submit" style="float: right">검색</button></a>
            <hr>
          </form>
<p align="center">
</p>
  <main style="background-color: transparent" role="main">
    <div style="height: 40px; width: 100%"></div>
  <div class="container">