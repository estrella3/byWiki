<html>
    <head>
        <title>진행중...</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h2>검색 결과</h2>
<?php
$jemok = str_replace(" ","_",$_POST['name']);
?>

<?php
$is_file_exist = file_exists("d/$jemok.html");

if ($is_file_exist) {
  header("Location:page.php?return=$jemok");
}
else {
    echo '해당 문서가 존재하지 않습니다.';
    echo '본문 검색 결과 찾기는 지원 예정입니다.'
}
?>
</body>
</html>