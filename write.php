<html>
    <head>
        <title>진행중...</title>
        <meta charset="UTF-8" />
    </head>
    <body>
<?php
$title = $_GET['title'];
?>
<form action="save.php" method="post">
<fieldset>
    <legend><?php echo $title;?> 편집</legend>
        <textarea name="contents" cols="30" rows="10"></textarea>
        <input type="hidden" name="title" value="<?php echo $title;?>">
</fieldset>
<p><input type="password" name="pwpw" placeholder="비밀번호" maxlength="4"><input type="submit" /></p>
</form>
</body>
</html>