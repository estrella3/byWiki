<?php
include 'up.php';

if(!empty($_GET['b'])){
    $turn = $_GET['b'];
    $is_redi = FALSE;
}elseif(!empty($_GET['to'])){
    $turn = $_GET['to'];
    $from = $_GET['from'];
    $is_redi = TRUE;
}else{
    $turn = $bySiteFront;
}

    $sql = "SELECT * FROM `_article` where `title` LIKE '$turn'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
    $views = $row['views'];
    }
    $views = $views + 1;

    $sql = "UPDATE `_article` set views = {$views} where `title` LIKE '$turn'";
    $result = mysqli_query($conn, $sql);
    if($result === false){
    echo '조회수 집계 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    }

    $sql = "SELECT * FROM `_article` where `title` LIKE '$turn'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
    $title = $row['title'];
    $cont = $row['content'];
    }
echo "<div><h2>$title</h2><button class='btn btn-primary' style='float: right'>편집</button><button class='btn btn-secondary' style='float: right'>기록</button><button class='btn btn-success' style='float: right'>토론</button></div><br>";
echo "<p>$cont</p>";



include 'down.php';
?>