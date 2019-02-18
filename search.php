<?php
include 'up.php';
$title = $_POST['title'];
$query = htmlentities($title);
?>
<h2>검색 결과입니다.<h2>
<hr>
<h5>제목</h5>
<?php
$sql = "SELECT count(*) as cnt from `_article` where `title` like '%$query%'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cnt = $row['cnt'];
?>
<span style="color: gray">검색 결과 : <?php echo $cnt;?>개</span>
<ul>
<?php
$sql = "SELECT * FROM `_article` where `title` LIKE '%$query%'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)){
            echo '<li><h6><a href="index.php?b='.$row['title'].'">'.$row['title'].'</a></h6></li>';
        }
?>
</ul>
<h5>내용</h5>
<?php
$sql = "SELECT count(*) as cnt from `_article` where `content` like '%$query%'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cnt = $row['cnt'];
?>
<span style="color: gray">검색 결과 : <?php echo $cnt;?>개</span>
<ul>
<?php
$sql = "SELECT * FROM `_article` where `content` LIKE '%$title%'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)){
            echo '<li><h6><a href="index.php?b='.$row['title'].'">'.$row['title'].'</a></h6></li>';
        }
?>
</ul>
<h5>작성자 이름</h5>
<ul>
준비중입니다.
</ul>
<?php
include 'down.php';
?>