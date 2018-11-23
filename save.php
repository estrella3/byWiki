<?php
include 'fix.php';
$contents = $_POST['contents'];
$title = $_POST['title'];
$pw = $_POST['pwpw'];
?>
<meta http-equiv="refresh" content="3; URL=index.php?return=<?php echo $title;?>">
<?php
/*XSS 방지 및 편집 저장*/ 
    $contents = str_replace("<","[",$contents);
    $contents = str_replace("{","(",$contents);
            $contents =str_replace("[목차]","[시작]",$contents);
    $contents = str_replace("[시작]",'<link rel="stylesheet" href="document.css">',$contents);
    $contents = str_replace("[br","<br",$contents);
/* 문법 HTML 코드로 변환 */
    $contents = str_replace("[[","<a href=",$contents);
    $contents = str_replace("]]","</a>",$contents);
    $contents = str_replace("[([",'<a target="blank" href=',$contents);
    $contents = str_replace("**","<strong>",$contents);
    $contents = str_replace("/*","</strong>",$contents);
    $contents = str_replace("__","<em>",$contents);
    $contents = str_replace("/_","</em>",$contents);
    $contents = str_replace("?m","<mark>",$contents);
    $contents = str_replace("?/m","</mark>",$contents);
    $contents = str_replace("?s",'<span id="shade">',$contents);
    $contents = str_replace("?/s","</span>",$contents);
    $contents = str_replace("=2=","<h2>",$contents);
    $contents = str_replace("/2=","</h2>",$contents);
    $contents = str_replace("=3=","<h3>",$contents);
    $contents = str_replace("/3=","</h3>",$contents);
    $contents = str_replace("=4=","<h4>",$contents);
    $contents = str_replace("/4=","</h4>",$contents);
    $contents = str_replace("=5=","<h5>",$contents);
    $contents = str_replace("/5=","</h5>",$contents);
    $contents = str_replace("=6=","<h6>",$contents);
    $contents = str_replace("/6=","</h6>",$contents);
    $contents = str_replace("?>","<blockquote>",$contents);
    $contents = str_replace("/?","</blockquote>",$contents);
    $contents = str_replace("[*","<button id=button1 onclick=button1_click();>*</button><script>function button1_click(){alert(",$contents);
    $contents = str_replace("*]", ")}</script>",$contents);
    $contents = str_replace("<ol>", "|#", "$contents");
    $contents = str_replace("<li>", "##", "$contents");
    $contents = str_replace("</li>", "/#", "$contents");
    $contents = str_replace("</ol>", "|#", "$contents");
?>
<style>
    .redi {
        color: #7a5230;
        text-align: center;
    }
</style>
<span class="redi">
<?php
/* 파일 저장 부분 */
    if($pw == $mypassword){
    $myfile = fopen("d/$title.html", "w") or die("파일을 열 수 없습니다..!");
    fwrite($myfile, $contents);
    fclose($myfile);
    echo "편집 완료!";
    }
    else{
    echo "비밀번호가 맞지 않거나 오류가 발생했습니다!";
    }
?>
</span>