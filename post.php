<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $banknotes = explode(',', preg_replace('/,\s+/', ',', trim($_POST['banknotes'])));
    rsort($banknotes);

    $sum = (int)trim($_POST['sum']);

    $sum2 = 0;

    $arr = [];

    foreach ($banknotes ?? [] as $banknote) {

        if ($sum % $banknote == 0) {

            $arr[$banknote] = (int)$sum / $banknote;

            $sum = 0;

            continue;
        }

        if ($sum == 0) {

            $arr[$banknote] = 0;

            continue;
        }

        if ($sum / $banknote >= 1) {

            $arr[$banknote] = (int)floor($sum / $banknote);

            $sum2 += $banknote * floor($sum / $banknote);

            $sum -= $banknote * floor($sum / $banknote);

        } else {
            $arr[$banknote] = 0;
        }

    }

    if ($sum == 0) {

        echo json_encode([$arr, 'status' => true]);

    } else {

        echo json_encode([$sum2, $sum2 + $banknotes[count($banknotes) - 1], 'status' => false]);
    }
}