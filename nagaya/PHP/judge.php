<?php
$link = mysqli_connect("localhost","root","","test");

$id = htmlspecialchars($_POST["id"]);
$pass = htmlspecialchars($_POST["pass"]);

mysqli_set_charset($link,"utf8");

$result = mysqli_query($link, "SELECT user_id FROM user WHERE user_id = '". $id ."' AND pass = '".$pass."'");
$result = $result->fetch_all(MYSQLI_ASSOC);

if($result[0]["user_id"] == $id){
    header("location: ./seikou.html");
} else {
    header("location: ./login.php");
}
mysqli_close($link);

?>