<html>
    <head>
        <title>진행중...</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h2>덧붙이는 내용을 확인합니다.</h2>
    "<?php echo htmlspecialchars($_POST['name']); ?>"에,
이 편집을 "<?php echo $_POST['age']; ?>"(이)가 하셨으며, [ <?php echo htmlspecialchars($_POST['contents']); ?> ] 이라고 입력하셨습니다.
    <br>


<?php
$jemok = str_replace(" ","_",$_POST['name']);
$naeyong = $_POST['contents'];
$chamgo = $_POST['age'];
?>

<?php
$is_file_exist = file_exists("doc/$jemok.html");

if ($is_file_exist) {
$myfile = fopen("doc/$jemok.html", "a") or die("파일을 열 수 없습니다..!");
$txt = "<br>$naeyong\n";
fwrite($myfile, $txt);
$txt = '--&nbsp;';
fwrite($myfile, $txt);
$txt = "$chamgo\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "저장 완료! 이 편집이 저장됩";
}
else {
  echo "<strong>작성 기록이 없는 파일입니다! 글을 처음부터 작성하여주세요!</strong>\n";
  echo '혹시 제목을 잘못 찾으셨나요? 방금 입력하신 내용은 저장되지 않았습';
}
?>
니다. <a href="doc/<?php echo $jemok; ?>.html">바로 보기</a>
</body>
</html>