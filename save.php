<?php
$dgfd = $_POST['contents'];
$fddg = $_POST['title'];
$pw = $_POST['pwpw'];
?>
<?php
    $dgfd = htmlspecialchars($dgfd);
    $dgfd = str_replace("&lt;h2&gt;","<h2>",$dgfd);
    $dgfd = str_replace("&lt;/h2&gt;","</h2>",$dgfd);
    $dgfd = str_replace("&lt;h3&gt;","<h3>",$dgfd);
    $dgfd = str_replace("&lt;/h3&gt;","</h3>",$dgfd);
    $dgfd = str_replace("&lt;h4&gt;","<h4>",$dgfd);
    $dgfd = str_replace("&lt;/h4&gt;","</h4>",$dgfd);
    $dgfd = str_replace("&lt;h5&gt;","<h5>",$dgfd);
    $dgfd = str_replace("&lt;/h5&gt;","</h5>",$dgfd);
    $dgfd = str_replace("&lt;h6&gt;","<h6>",$dgfd);
    $dgfd = str_replace("&lt;/h6&gt;","</h6>",$dgfd);
    $dgfd = str_replace("&lt;blockquote&gt;","<blockquote>",$dgfd);
    $dgfd = str_replace("&lt;/blockquote&gt;","</blockquote>",$dgfd);
    $dgfd = str_replace("&lt;a","<a",$dgfd);
    $dgfd = str_replace("&gt;",">",$dgfd);
    $dgfd = str_replace("&lt;p&gt;","<p>",$dgfd);
    $dgfd = str_replace("&lt;/p&gt;","</p>",$dgfd);
    $dgfd = str_replace("&lt;div&gt;","<div>",$dgfd);
    $dgfd = str_replace("&lt;/div&gt;","</div>",$dgfd);
    $dgfd = str_replace("&lt;div","<div",$dgfd);
?>
<?php
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
니다.<a href="d/<?php echo $fddg;?>.html">문서 보기</a>