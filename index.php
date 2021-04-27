<?php include 'post.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="main.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="bank">
            <h1>Банкомат</h1>

            <form>
                <label for="code">Номинал в наличии: </label><br>
                <input type="text" name="banknotes" placeholder="5, 10, 20, 50, 100, 200, 500 "><br>
                <label for="code">Ваша сумма: </label><br>
                <input type="text" name="sum" placeholder=""></br>
                <div class="form-btn">
                    <button type="submit" class="bank-btn">Отправить</button>
                </div>
            </form>
            <div class="answer none">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
