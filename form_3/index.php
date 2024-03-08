<?php

function natural_number(int $number, array $multiples): int
{
    $sum = 0;
    
    foreach($multiples as $mul) 
    {
        for ($num = 0; $num < $number; $num++)
            $sum += ($num % $mul) === 0 ? $num : 0;
    }

    return $sum;
}

$multiples = [
    3,
    5,
];

echo "Ответ: " . natural_number(1000, $multiples);

?>

<br/>

<a href="/">Назад</a>
