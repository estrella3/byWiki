<html>
<?php
		include 'fix.php';
		$name = $_POST['name'];
		if(!isset($name)){
			$name = "$frontpage";
		}
		$getturn = $_GET['return'];
		if(isset($getturn)){
			$name = $getturn;
		}
		$naeyong = htmlspecialchars($_POST['contents']);
		$chamgo = htmlspecialchars($_POST['age']);
	?>
<head>
  <link rel="stylesheet" href="doc.css">
<title><?php echo "$mywiki - $name"?></title>
    <meta charset="UTF-8">
    </head>
    <body>

<header>
    <div id="screen"></div> <!-- 헤더 부분. -->
    <div class='navbar'>
      <ul class="nav">
        <li class="lit"><a href="index.php">ByWiki</a></li>
        <li id="sidenav">
          <a href="#" id="sidenav-toggle">☰</a>
          <nav id="sidenav-menu">
            <header id="sidenav-header">
              <span id="close-sidenav">×</span>
              <div>메뉴</div> 
            </header>
            <ul>
              <li><a href="board.html">게시판</a></li>
              <li><a href='index.php?return=도움말'>도움말</a></li>
            </ul>
          </nav>
        </li>         
          <li id="searchbox" class="til"><form action="search.php" method="post" target="m_view"><input type="text" name="name" class="searchtext" placeholder="검색.."/>
         <input type="image" src="img\search.png"></form></li>
      </ul>
    </div>
</header>
<section id="contents">
    <div id="main"> <!-- 콘텐츠가 보여질 부분. -->
        <div class="view">
                                                <section id="m_main">
                                              <span class="tbar">
                                              <ul>	
                                                <li>
                                                  <form action="history.php" method="post">
                                                    <input type="hidden" name="hist" value="<?php echo $name;?>" />
                                                    <input type="image" src="img/history.png">
                                                  </form>
                                                </li>
                                                <li> &nbsp;&nbsp;
                                          </li>
                                                <li> 
                                                  <form action="do.php" method="post">
                                                    <input type="hidden" name="less" value="<?php echo $name;?>" />
                                                    <input type="image" src="img/Editing-edit-icon.png">
                                                  </form>
                                          </li>

                                              </ul>
                                              </span>
                                        <span id="d">
                                              <h1><?php echo $name;?></h1>
                                              <hr class="title">
                                              <iframe src="d/<?php echo $name; ?>.html" name="m_view" frameborder="no" onload="resizeFrame(this) class="ififrame">
                                              </iframe>
                                          </span>
                                            </section>
        </div>
    </div>
    </section>
    <footer>
    <div id="bottom"> <!-- 푸터 부분.-->
      <div class="footer">
        <a class="footer" target="m_view" href="LICENSE">9.74 With Bywiki.</a>
      </div>
    </div>
    </footer>
    
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script>
    function sidenav_open() {
      $("#sidenav").addClass('open');
      $("#screen").fadeIn();
      $("#sidenav-menu").css('right','0');
    }
    function sidenav_close() {
      $("#sidenav").removeClass('open');
      $("#screen").fadeOut();
      $("#sidenav-menu").css('right','-200px');
    }
    
    $("#sidenav-toggle").click(function(event) {
        event.stopPropagation();
      if( $("#sidenav").hasClass('open') ) sidenav_close();
      else sidenav_open();
    });
    $("#close-sidenav").click(sidenav_close);
    $(window).click(sidenav_close);
    </script>
    </body>
</html>