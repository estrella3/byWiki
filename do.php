<html>
    <head>
        <title>진행중...</title>
        <meta charset="UTF-8" />
    </head>
    <body>
<?php
$title = $_POST['less'];
?>
<?php 
                /* 파일 열기 */
     $f = @fopen("d/$title.html",'r') or exit("파일을 열 수 없습니다..!"); 
     $result = ''; 
     while(!feof($f)){ 
        $result .= fgets($f,10);
     } fclose($f);
?>
<!-- 입력 폼 -->
<form action="save.php" method="post">
<fieldset>
    <legend><?php echo $title;?> 편집</legend>
        <textarea name="contents" cols="30" rows="10"><?php echo $result; ?></textarea>
        <input type="hidden" name="title" value="<?php echo $title;?>">
</fieldset>
<p><input type="password" name="pwpw" placeholder="비밀번호" maxlength="4"><input type="submit" /></p>
</form>
</body>
</html>