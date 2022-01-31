<?php
require_once 'db.php';
if ($_POST)
{
    require_once 'connect.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit calculator</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
</head>
<body>
    <header class="main-header">
        <div class="header-box">
            <div class="header-left">
                <p class="header-data-manager">ФИО</p>
            </div>
            <div class="header-right">
                <a class="header-tel" href="#">Номер телофона</a><br>
                <a class="header-email" href="#">Email</a>
            </div>
        </div>
    </header>
    <div class="main-body">
        <form class="main-elements" action="index.php" method="POST">
            <input class="main-elements-input" type="text" required id="amountCredit" name="amountCredit" placeholder="Сумма кредита">
            <input class="main-elements-input" type="text" required id="timeCredit" name="timeCredit" placeholder="Срок в годах">
            <input class="main-elements-input" type="text" required id="interestRate" name="interestRate" placeholder="Процентная ставка, % в год">
            <input class="main-elements-input" type="text" required id="userData" name="userData" placeholder="ФИО">
            <input class="main-elements-input" type="tel" required id="userTel" name="userTel" placeholder="Номер телефона">
            <div class="calc-btn-wrap">
                <input type="submit" name="submit" value="Расчитать" class="submit-app">
            </div>
        </form>
        <div class="calc-result">
            <p class="result-text">Ежемесячный платеж:<? echo($monthlyPay); ?></p>
            <p class="result-text">Сумма выплаченных процентов:</p>
            <p class="result-text">Дата последнего платежа:</p>
        </div>
        <div class="request-call-btn">
            <input type="submit" value="Оставить заявку" class="submit-app">
            <input type="button" value="Вывести график платеже" class="show-table-btn">
        </div>
    </div>
        <footer class="main-footer">
            <div class="footer-box">
                <div class="footer-left">
                    <p class="footer-data-manager">ФИО</p>
                </div>
                <div class="footer-right">
                    <a class="footer-tel" href="#">Номер телофона</a><br>
                    <a class="footer-email" href="#">Email</a>
                </div>
            </div>
        </div>
        </footer>
</body>
</html>