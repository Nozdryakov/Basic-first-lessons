<?php
// Задание №1: Вывести на экран числа делящиеся на 2 и на 3 одноновременно, диапазон 0-1000
    for($i = 1; $i <=1000; $i++)
    {
        if($i % 2 == 0 && $i % 3 == 0)
        echo $i." ";
    }
    echo "<hr>";

// Задание №2: Функция Фибоначчи
echo '
    <form action = "index.php" method = "GET">
        Кол-во элементов чисел Фибоначчи:
        <input type = "text" name = "f" />
        <input type = "submit" value = "OK" />
     </form> ';
     
    function fibonacci($n)
{
    if ($n < 3) {
        return 1; 
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

    for ($n = 1; $n <= $_GET['f']; $n++)
    {
        echo fibonacci($n) . ", ";
    }
    echo "...";

    echo "<hr>";

// Задание №3: Функция факториал числа
    echo '
    <form action = "index.php" method = "GET">
        Кол-во элементов чисел Фибоначчи:
        <input type = "text" name = "j" />
        <input type = "submit" value = "OK" />
    </form> ';
    $fact = $_GET['j'];

function factorial($fact)
{
    if ($fact >= 12 || $fact <= 0) {
        return 1; 
    }
    else {
        return $fact * factorial($fact - 1);
    }
}
        echo factorial($fact);

?>