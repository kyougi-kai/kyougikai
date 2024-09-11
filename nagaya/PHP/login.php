<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .text{
        text-align: center;
    }
</style>
<body>
    <div style="display: flex;justify-content: center;">
    <form method="post" action="judge.php">
       
        
            <div class="text">ユーザID</div><br>
            <input type="text" name="id">
        <br><br>
          
            <div class="text">パスワード</div>
            <br>
            <input type="password" name="pass">
     <br><br>

        <div Style="text-align: center;"><input class="submit_a" type="submit" value="ログイン"></DIV>
        </form>
    </div>
</body>
</html>