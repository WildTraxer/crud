<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Добавление в таблицу данных телефон</title>
    <link rel="stylesheet" href="../style.css" />
</head>

<body class="body">
    <header class="header">
        <p class="header__logo font-family">CRUD</p>
    </header>
    <div class="wrapper wrapper--color">
        <div class="wrapper__container font-family">
            <h1 class="h1">Добавление данных в таблицу телефон</h1>
            <form class="form" action="insert.php" method="post" name="action">
                <div class="form-item">
                    <p>Введите Номер телефона</p>
                    <input class="form-item__input" type="int" name="Phone" />
                </div>
                <div class="form-item">
                    <p>Введите ФИО</p>
                    <input class="form-item__input" type="text" name="FIO" />
                </div>
                <div class="form-item">
                    <p>Введите Дату рождения</p>
                    <input class="form-item__input" type="date" name="DateBirth" />
                </div>
                <div class="form-item">
                    <p>Введите Регион</p>
                    <input class="form-item__input" type="int" name="Region" />
                </div>
                <div class="btns">
                    <input class="btn" type="submit" value="Добавить данные" />
                    <input class="btn" type="reset" value="Очистить форму" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>