<html>
  <?php include 'fix.php'; $title = $_POST['less'];?>
<head>
  <link rel="stylesheet" href="doc.css">
<title><?php echo "$mywiki - $title 편집하기";?></title>
    <meta charset="UTF-8">
    </head>
    <body>

<header>
    <div id="screen"></div> <!-- 헤더 부분. -->
    <div class='navbar'>
      <ul class="nav">
        <li class="lit"><a href="index.php">ByWiki</a></li>
          <li id="searchbox" class="til"><form action="search.php" method="post" target="m_view"><input type="text" name="name" class="searchtext" placeholder="검색.."/>
         <input type="image" src="img\search.png"></form></li>
      </ul>
    </div>
</header>
<section id="contents">
    <div id="main"> <!-- 콘텐츠가 보여질 부분. -->
        <div class="history">
                                                                    <?php
                                                                            /* 파일 열기 */
                                                                $f = @fopen("d/$title.html",'r') or exit("파일을 열 수 없습니다..!"); 
                                                                $result = ''; 
                                                                while(!feof($f)){ 
                                                                    $result .= fgets($f,10);
                                                                } fclose($f);
                                                                /* 문법 변환*/
                                                                $result = str_replace('<link rel="stylesheet" href="document.css">',"[시작]",$result);
                                                                $result = str_replace("<a href=","[[",$result);
                                                                $result = str_replace("</a>","]]",$result);
                                                                $result = str_replace('<a target="blank" href=',"[([",$result);
                                                                $result = str_replace("<strong>","*",$result);
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
                                                                $result = str_replace("<button id=button1 onclick=button1_click();>*</button><script>function button1_click(){alert(","[*",$result);
                                                                $result = str_replace(")}</script>","*]",$result);
                                                                $result = str_replace("|#", "<ol>", "$result");
                                                                $result = str_replace("##", "<li>", "$result");
                                                                $result = str_replace("/#", "</li>", "$result");
                                                                $result = str_replace("#|", "</ol>", "$result");
                                                            ?>
                                                            <form action="save.php" method="post">
                                                            <fieldset>
                                                                <legend><?php echo $title;?> 편집</legend>
                                                                    <textarea name="contents" cols="30" rows="10"><?php echo $result; ?></textarea>
                                                                    <input type="hidden" name="title" value="<?php echo $title;?>">
                                                            </fieldset>
                                                            <p><input type="password" name="pwpw" placeholder="비밀번호" maxlength="4"><input type="submit" /></p>
                                                            </form>
    </div>
        </div>
</section>
    <footer>
    <div id="bottom"> <!-- 푸터 부분.-->
      <div class="footer">
        <a class="footer" target="m_view" href="LICENSE">With Bywiki.</a>
      </div>
    </div>
    </footer>
    </body>
</html>