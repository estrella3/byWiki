<html>
    <head>
        <title>진행중...</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h2>입력한 내용을 다시 확인합니다.</h2>
    "<?php echo htmlspecialchars($_POST['name']); ?>"에,
이 편집을 "<?php echo $_POST['age']; ?>"(이)가 하셨으며, [ <?php echo htmlspecialchars($_POST['contents']); ?> ] 이라고 입력하셨습니다.
    <br>


<?php
$jemok = str_replace(" ","_",$_POST['name']);
$naeyong = htmlspecialchars($_POST['contents']);
$chamgo = htmlspecialchars($_POST['age']);
?>

<?php
$is_file_exist = file_exists("doc/$jemok.html");

if ($is_file_exist) {
  echo "<strong>이미 존재하는 파일입니다! 이어 쓰기를 이용해주세요!</strong>\n";
  echo '방금 입력하신 내용은 저장되지 않았으며, 옆의 링크는 원래 저장된 글 입';
}
else {
$myfile = fopen("doc/$jemok.html", "w") or die("파일을 열 수 없습니다..!");
$txt = "<html><head><title>$jemok - 문서</title><meta charset=UTF-8 /></head><body>";
fwrite($myfile, $txt);
$txt = "$naeyong\n";
fwrite($myfile, $txt);
$txt = '--&nbsp;';
fwrite($myfile, $txt);
$txt = "$chamgo\n";
fwrite($myfile, $txt);
$txt = "</body></html>";
fwrite($myfile, $txt);
fclose($myfile);
echo "저장 완료! 이 편집이 저장됩";
}
?>
니다. <a href="doc/<?php echo $jemok; ?>.html">바로 보기</a>
</body>
</html>