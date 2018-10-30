<?php
$dgfd = $_POST['contents'];
$fddg = $_POST['title'];
$pw = $_POST['pwpw'];
?>
<?php
/*XSS 방지 및 허용된 HTML 코드만 사용하도록 변환*/
    $dgfd = str_replace("<","[",$dgfd);
    $dgfd = str_replace("[목차]",'<link rel="stylesheet" href="document.css">',$dgfd);
    $dgfd = str_replace("[link","<link",$dgfd);
    $dgfd = str_replace("[div","<div",$dgfd);
    $dgfd = str_replace("[/div","</div",$dgfd);
    $dgfd = str_replace("[/a","</a",$dgfd);
    $dgfd = str_replace("[a","<a",$dgfd);
    $dgfd = str_replace("[blockquote","<blockquote",$dgfd);
    $dgfd = str_replace("[/blockquote","</blockquote",$dgfd);
    $dgfd = str_replace("[/p","</p",$dgfd);
    $dgfd = str_replace("[p","<p",$dgfd);
    $dgfd = str_replace("[/div","</div",$dgfd);
    $dgfd = str_replace("[div","<div",$dgfd);
    $dgfd = str_replace("[/h2","</h2",$dgfd);
    $dgfd = str_replace("[h2","<h2",$dgfd);
    $dgfd = str_replace("[/h3","</h3",$dgfd);
    $dgfd = str_replace("[h3","<h3",$dgfd);
    $dgfd = str_replace("[/h4","</h4",$dgfd);
    $dgfd = str_replace("[h4","<h4",$dgfd);
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