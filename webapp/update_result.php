<?php
// movieDB 데이터베이스 접속
$db = mysqli_connect("localhost", "movie_user", "1234", "movieDB")
    or die("movieDB 데이터베이스 접속 실패!");

if(isset($_POST['genre']) && isset($_POST['title']) && isset($_POST['data']) && isset($_POST['price'])) {
    $genre = $_POST['genre'];
    $title = $_POST['title'];
    $data = $_POST['data'];
    $price = $_POST['price'];
}

$sql = "UPDATE movie SET 
    title='" . $title . "',
    genre='" . $genre . "',
    date='" . $date . "',
    price='" . $price . "';";
$result = mysqli_query($db, $sql);

if($result) {
    echo "<script>alert('$title'  정보 수정 성공!);</script>";
} else {
    $err_msg = mysqli_error($db);
    echo"<script>alert(SQL문 정보 추가 오류\\n오류 내용: '$err_msg');</script>";
}
mysqli_close($db);

echo "<script>location.replace('index.php');</script>";"
?>