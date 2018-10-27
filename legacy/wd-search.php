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
$is_file_exist = file_exists("write/doc/$jemok.html");

if ($is_file_exist) {
  echo "해당 문서가 존재합니다!";
  echo "<a href=write/doc/$jemok.html>이동하기</a>";
}
else {
    echo '해당 문서가 존재하지 않습니다.';
}
?>
</body>
</html>