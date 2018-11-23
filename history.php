<html>
  <?php include 'fix.php'; $from = $_POST['hist'];?>
<head>
  <link rel="stylesheet" href="doc.css">
<title><?php echo "$mywiki - $from 의 편집 역사"?></title>
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
                                                                if (isset($from)) {
                                                                    echo "<h1>'$from'의 편집 역사</h1>";
                                                                    echo "제작중입니다.";
                                                                } else {
                                                                    echo '표시할 내용이 없습니다.';
                                                                    echo '정상적인 값이 아닙니다!';
                                                                };
                                                                ?>
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