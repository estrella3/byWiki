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
<?php
    /* 문법 변환*/
    $result = str_replace('<link rel="stylesheet" href="document.css">',"[시작]",$result);
    $result = str_replace("<a href=","[[",$result);
    $result = str_replace("</a>","]]",$result);
    $result = str_replace('<a target="blank" href=',"[([",$result);
    $result = str_replace("<strong>","**",$result);
    $result = str_replace("</strong>","/*",$result);
    $result = str_replace("<em>","__",$result);
    $result = str_replace("</em>","/_",$result);
    $result = str_replace("<mark>","?m",$result);
    $result = str_replace("</mark>","?/m",$result);
    $result = str_replace('<span id="shade">',"?s",$result);
    $result = str_replace("</span>","?/s",$result);
    $result = str_replace("<h2>","=2=",$result);
    $result = str_replace("</h2>","/2=",$result);
    $result = str_replace("<h3>","=3=",$result);
    $result = str_replace("</h3>","/3=",$result);
    $result = str_replace("<h4>","=4=",$result);
    $result = str_replace("/4=","</h4>",$result);
    $result = str_replace("<h5>","=5=",$result);
    $result = str_replace("</h5>","/5=",$result);
    $result = str_replace("<h6>","=6=",$result);
    $result = str_replace("</h6>","/6=",$result);
    $result = str_replace("<blockquote>","?>",$result);
    $result = str_replace("</blockquote>","/?",$result);
    $result = str_replace("<button id=button1 onclick=button1_click();>*</button><script> 
    function button1_click() 
    { 
        alert(","[*",$result);
    $result = str_replace(") } </script>","*]",$result);
?>
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