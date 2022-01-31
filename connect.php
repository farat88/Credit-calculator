<?php
    require_once 'db.php';

    $amountCredit = $_POST['amountCredit'];
    $timeCredit = $_POST['timeCredit'];
    $interestRate = $_POST['interestRate'];
    $userData = $_POST['userData'];
    $userTel = $_POST['userTel'];
    
    $query = "INSERT INTO `products`(`id`, `amount_credit`, `time_credit`, `interest_rat`, `user_data`, `user_tel`)
    VALUES (NULL, '$amountCredit', '$timeCredit', '$interestRate', '$userData', '$userTel')";
    $connect->exec($query);
    
    function getMonthlyPay ($timeCredit, $interestRate, $amountCredit)
        {
            $n = $timeCredit * 12;
            $i = $interestRate / (100 * 12);
            $pow = pow(($i + 1), $n);
            $result = $amountCredit * ($i + $i / ($pow - 1));
            return $result;
        }
        $monthlyPay = getMonthlyPay ($timeCredit, $interestRate, $amountCredit);

        