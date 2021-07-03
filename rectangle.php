<?php

$a = readline('Введите значение количество точек по горизонтали - A:');
$b = readline('Введите значение количество точек по вертикали - B:');

/**
 * @param $a
 * @param $b
 * @param $n
 * @param $m
 * @return int
 */
function countRectangleInMatrix($a,$b,$n,$m)
{
    $count = 0;
    for ($i = 1; $i+$m <= $a; $i++ )
    {
        for ($j = 1; $j+$n <= $b; $j++)
        {
            $count = $count+1;
        }
    }
    return $count;
}

/**
 * @param $a
 * @param $b
 * @return int
 */
function countInscribeRectangles($a,$b)
{
    $countRectangles=0;
    for ($h=1;$h<=$a-1;$h++)
    {
        $count = 0;
        for ($l=1;$l<=$b-1;$l++)
        {
            $count = $count +1;
            $countRectangles = $countRectangles + countRectangleInMatrix($a,$b,$l,$h);

        }
    }

    return $countRectangles;
}

echo "Всего в заданную матрицу можно вписать {countInscribeRectangles($a,$b)} прямоугольников\n";
echo countInscribeRectangles($a,$b);
