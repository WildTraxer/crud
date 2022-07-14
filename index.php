<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>

<body class="body">
    <header class="header">
        <p class="header__logo">CRUD</p>
    </header>
    <br />
    <div class="wrapper">
        <div class="wrapper__container">
            <div class="btns">
                <form action="Insert/index.php" method="POST">
                    <input class="btn" type="submit" name="local" value="Добавить данные" />
                </form>
                <br />
                <form action="Search/index.php" method="POST">
                    <input class="btn" type="submit" name="local" value="Поиск" />
                </form>
                <br>
                <form action = "Test/index.php" method = "POST">
                    <input type="submit" name = "local" value="Тестирование">
                </form> 
                <br>
            </div>
        </div>
    </div>

    <br />
</body>

</html>