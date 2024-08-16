<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body{
            margin: 0;
        }
        .titlelogo img{
            width: 500px;   
        }
        @media screen and (max-width:480px) {
            .titlelogo img{
            width: 300px;   
            }
        }
        .header{
            width: 100%;
            height: 100px;
            border-bottom: 2px solid black;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .header-div{
            height: 100%;
            background: rgb(67, 186, 188);
            display: flex;
        }

        .below{
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgb(251, 0, 255);
            display: flex;
        }

        .check{
            width: 60%;
            border: 1mm solid rgba(70, 37, 114, 0.588);
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .check div{
            padding: 5px 10px;
        }

        .check select {
            margin: 10px 10px;
        }
        @media screen and (max-width:840px) {
            .check{
                grid-template-columns: 1fr;
            }
        }

        .box{
            width: 40%;
            border: 1mm solid rgba(157, 226, 27, 0.588);
            display: block;
            text-align: center;
        }
        
        .vox2{
            width: 10px;
            height: 300px;
            border: 1mm solid rgba(176, 62, 62, 0.588);
        }

        .space{
            width: min(100%, 1200px);
        }

         /* .example4{
            background: linear-gradient(45deg,#e60000,#f39800,#fff100,#009944,#0068b7,#1d2088,#920783, #e60000) 0 / 400%;
            height: 100%;
            animation: 5s example4 linear infinite;
        }
        @keyframes example4{
            100% { background-position: 200%; }
        } */
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<body class="example4" style="height: 100%;">
    <div style="width: 100%;display: flex;justify-content: center;">
    <div class="space">
    <div class="titlelogo">
        <!-- 画像追加予定 -->
         <img src="./img/titlelogo.png" style="margin: auto;"></img>
    </div>
    <div class="header">
        <div class="header-div">
            
        </div>
        <div class="header-div" style="border-left: 2px solid black;">
            
        </div>
        <div class="header-div" style="border-left: 2px solid black;">
            
        </div>
    </div>

    <DIV class="nagaya" style="width:100%;box-sizing: border-box;">
        <DIV class = "below">
        <DIV class = "check">
            <div>
                <input type="checkbox" name="type">用語・計算
            </div>
            <div>
                <input type="checkbox" name="type">データベース
            </div>
            <div>
                <input type="checkbox" name="type">表計算
            </div>
            <div>
                <input type="checkbox" name="type">アルゴリズム
            </div>
            <div>
                <input type="checkbox" name="type">タイマー
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  カスタマイズ
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <button class="dropdown-item" onclick="this.parentElement.parentElement.previousElementSibling.innerHTML = this.innerHTML;">1分</button>
                    </li>
                    <li>
                        <button class="dropdown-item" onclick="this.parentElement.parentElement.previousElementSibling.innerHTML = this.innerHTML;">2分</button>
                    </li>
                    <li>
                        <button class="dropdown-item" onclick="this.parentElement.parentElement.previousElementSibling.innerHTML = this.innerHTML;">30秒</button>
                    </li>
                </ul>
              </div>
            <div>
                <input type="checkbox" name="type">問題数
            </div>
            <select name="question">
                <option>カスタマイズ</option>
                <option>15問</option>
                <option>10問</option>
                <option>5問</option>
            </select>
            <div>
                <input type="radio" name="amount">四択一答（対応問題のみ）
            </div>
            <div>
                <input type="radio" name="amount">一問一答
            </div>
            <div>
                <input type="checkbox" name="type">不正解モード
            </div>
            <select name="failed">
                <option>不正解歴あり</option>
                <option>直前の一回が不正解</option>
            </select>
            <div>
                <input type="checkbox" name="type">オリジナル問題を含める
            </div>
            <div>
                <input type="checkbox" name="type">過去問を含める
            </div>
        </DIV>
        <DIV class = "box">
            <a><img src="./img/用語・計算.png" style="width:min(100%, 200px);"></img></a>
            <a><img src="./img/用語・計算.png" style="width:min(100%, 200px);"></img></a>
            <a><img src="./img/用語・計算.png" style="width:min(100%, 200px);"></img></a>
            <a><img src="./img/用語・計算.png" style="width:min(100%, 200px);"></img></a>
        </DIV>

    </DIV>
    </DIV>
    </div>
    </div>
    <DIV class="footer" style="background-color: rgb(226, 43, 171);width: 100%;height:100px;margin-top: 200px;">

    </DIV>
</body>
</html>