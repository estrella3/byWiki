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
    echo "문서를 새로 만드시겠습니까? <a href=edit.php>이동하기</a>";
}
?>
</body>
</html>