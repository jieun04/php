당신이 입력한 검색어:
<?echo $keyword."<br>"?>
<?php 
require 'db.php';
$keyword = $_POST["keyword"];
insert_keyword($keyword);
echo"지금까지 입력한 키워드<br>";
select_keyword(); 
?>

