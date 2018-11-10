<?php
$dgfd = $_POST['contents'];
$fddg = $_POST['title'];
$pw = $_POST['pwpw'];
?>
<?php
/*XSS 방지 및 편집 저장시 편의*/
    $dgfd = str_replace("<","[",$dgfd);
    $dgfd = str_replace("{","(",$dgfd);
            $dgfd =str_replace("[목차]","[시작]",$dgfd);
    $dgfd = str_replace("[시작]",'<link rel="stylesheet" href="document.css">',$dgfd);
    $dgfd = str_replace("[link","<link",$dgfd);
    $dgfd = str_replace("[div","<div",$dgfd);
    $dgfd = str_replace("[/div","</div",$dgfd);
    $dgfd = str_replace("[/a","</a",$dgfd);
    $dgfd = str_replace("[a","<a",$dgfd);
    $dgfd = str_replace("[blockquote","<blockquote",$dgfd);
    $dgfd = str_replace("[/blockquote","</blockquote",$dgfd);
    $dgfd = str_replace("[/p","</p",$dgfd);
    $dgfd = str_replace("[p","<p",$dgfd);
    $dgfd = str_replace("[/h2","</h2",$dgfd);
    $dgfd = str_replace("[h2","<h2",$dgfd);
    $dgfd = str_replace("[/h3","</h3",$dgfd);
    $dgfd = str_replace("[h3","<h3",$dgfd);
    $dgfd = str_replace("[/h4","</h4",$dgfd);
    $dgfd = str_replace("[h4","<h4",$dgfd);
    $dgfd = str_replace("[h5","<h5",$dgfd);
    $dgfd = str_replace("[/h5","</h5",$dgfd);
    $dgfd = str_replace("[h6","<h6",$dgfd);
    $dgfd = str_replace("[/h6","</h6",$dgfd);
    $dgfd = str_replace("[em","<em",$dgfd);
    $dgfd = str_replace("[/em","</em",$dgfd);
    $dgfd = str_replace("[strong","<strong",$dgfd);
    $dgfd = str_replace("[/strong","</strong",$dgfd);
    $dgfd = str_replace("[mark","<mark",$dgfd);
    $dgfd = str_replace("[/mark","</mark",$dgfd);
    $dgfd = str_replace("[span","<span",$dgfd);
    $dgfd = str_replace("[/span","</span",$dgfd);
/* 문법 HTML 코드로 변환 */
    $dgfd = str_replace("[[","<a href=",$dgfd);
    $dgfd = str_replace("]]","</a>",$dgfd);
    $dgfd = str_replace("[([",'<a target="blank" href=',$dgfd);
    $dgfd = str_replace("**","<strong>",$dgfd);
    $dgfd = str_replace("/*","</strong>",$dgfd);
    $dgfd = str_replace("__","<em>",$dgfd);
    $dgfd = str_replace("/_","</em>",$dgfd);
    $dgfd = str_replace("?m","<mark>",$dgfd);
    $dgfd = str_replace("?/m","</mark>",$dgfd);
    $dgfd = str_replace("?s",'<span id="shade">',$dgfd);
    $dgfd = str_replace("?/s","</span>",$dgfd);
    $dgfd = str_replace("=2=","<h2>",$dgfd);
    $dgfd = str_replace("/2=","</h2>",$dgfd);
    $dgfd = str_replace("=3=","<h3>",$dgfd);
    $dgfd = str_replace("/3=","</h3>",$dgfd);
    $dgfd = str_replace("=4=","<h4>",$dgfd);
    $dgfd = str_replace("/4=","</h4>",$dgfd);
    $dgfd = str_replace("=5=","<h5>",$dgfd);
    $dgfd = str_replace("/5=","</h5>",$dgfd);
    $dgfd = str_replace("=6=","<h6>",$dgfd);
    $dgfd = str_replace("/6=","</h6>",$dgfd);
    $dgfd = str_replace("?>","<blockquote>",$dgfd);
    $dgfd = str_replace("/?","</blockquote>",$dgfd);
    $dgfd = str_replace("[*","<button id=button1 onclick=button1_click();>*</button><script> 
    function button1_click() 
    { 
        alert(
    ",$dgfd);
    $dgfd = str_replace("*]",") } </script>",$dgfd);
?>
<?php
/* 파일 저장 부분 */
    if($pw == "0302"){
    $myfile = fopen("d/$fddg.html", "w") or die("파일을 열 수 없습니다..!");
    fwrite($myfile, $dgfd);
    fclose($myfile);
    echo "저장 완료! 이 편집이 저장됩";
    }
    else{
    echo "$fddg 를 편집하지 못했습";
    }
?>
니다.<a href="page.php?return=<?php echo $fddg;?>">문서 보기</a>