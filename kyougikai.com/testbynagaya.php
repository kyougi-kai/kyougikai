<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
asd
    <?php
$link = mysqli_connect("localhost","root","","test");

mysqli_set_charset($link,"utf8");

$result = mysqli_query($link, "SELECT * FROM question");
$result = $result->fetch_all(MYSQLI_ASSOC);

echo $result[0]["種別"];
$img_src = base64_encode($result[0]["画像"]);
echo '<img src="data:image/jpeg;base64,' . $img_src . '" alt="BLOB Image"width="300" height="200" />';
mysqli_close($link);

?>
</body>
</html>