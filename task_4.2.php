<?php
if ($argc === 3)
{
    $size = $argv[1];
    $q = 1;
    if($argv[2] === 'right')
    {
        for ($i = 0; $i < $size; $i++)
        {
            for ($j=0; $j < $size; $j++)
            { 
            echo $i % 2 ? ($i + 1) * $size - $j : $q, ' ';
            $q++;
            }
            echo PHP_EOL;
        }
    }
    elseif($argv[2] === 'bot')
    {
        for ($i = 0; $i < $size; $i++)
        {
            for ($j = 0; $j < $size; $j++)
            {
                if ($j % 2 === 1)
                {
                    echo (($j + 1) * $size - $i), ' ';
                }
                else
                {
                    echo $q, ' ';
                    $q += 2 * $size;
                }
               // (j%2?(j+1)*n-i-1:k)
            }
            $q = $i + 2;
            echo PHP_EOL;
        }
    }
}
else
{
    echo "Вы ввели не корректно данные. Сначала введите размер матрицы затем направление(right/bot) и попробуйте снова =)";
}